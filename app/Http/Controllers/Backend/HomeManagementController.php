<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeManagement;
use Session;
use File;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeManagementController extends Controller
{
    public function index()
    {
        $homeManagements = HomeManagement::orderBy('id', 'desc')->paginate(10);
        return view('adminlte::home_management.index', compact('homeManagements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homeManagements = HomeManagement::all();
        return view('adminlte::home_management.create', compact('homeManagements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('logo');
        if($file){
            $fileName = time() . '_' . $file->getClientOriginalName();
            $data['logo'] = $fileName;
            $file->move(base_path().'/public/images/logos', $fileName);
        }

        $backgroundImage = $request->file('background_image');
        if($backgroundImage){
            $backgroundName = time().'_'.$backgroundImage->getClientOriginalName();
            $data['background_image'] = $backgroundName;
            $backgroundImage->move(base_path().'/public/images/background_images',$backgroundName);
        }

        HomeManagement::create($data);
        Session::flash('success', 'Create Successfully!');
        return redirect(route('home_management.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $homeManagement = HomeManagement::find($id);
        return view('adminlte::home_management.detail', compact('homeManagement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homeManagement = HomeManagement::find($id);
        $data = $request->all();
        $file = $request->file('logo');
        if($file){
            $fileName = time() . '_' . $file->getClientOriginalName();
            $data['logo'] = $fileName;
            $file->move(base_path().'/public/images/logos', $fileName);
        }

        $backgroundImage = $request->file('background_image');
        if($backgroundImage){
            $backgroundName = time().'_'.$backgroundImage->getClientOriginalName();
            $data['background_image'] = $backgroundName;
            $backgroundImage->move(base_path().'/public/images/background_images',$backgroundName);
        }
        $homeManagement->update($data);
        Session::flash('success', 'Update Successfully!');
        return redirect(route('home_management.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeManagement = HomeManagement::find($id);
        $homeManagement->delete();
        Session::flash('success', 'Delete Successfully!');
        return back();
    }
}