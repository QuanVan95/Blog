<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCategory;
use Session;
use File;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postCates = PostCategory::orderBy('id', 'desc')->paginate(10);
        foreach ($postCates as $value){
            if($value->parent_id > 0){
                $postCate = PostCategory::find($value->parent_id);
                if($postCate){
                    $value->parent_name = $postCate->name;
                }
            }
        }
        return view('adminlte::post_category.index', compact('postCates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postCates = PostCategory::all();
        return view('adminlte::post_category.create', compact('postCates'));
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
        if(isset($data['active'])){
            if($data['active'] == 'on'){
                $data['active'] = 1;
            }else{
                $data['active'] = 0;
            }
        }else{
            $data['active'] = 0;
        }
        PostCategory::create($data);
        Session::flash('success', 'Thành công!');
        return redirect(route('postCate.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postCate = PostCategory::find($id);
        $postCates = PostCategory::all();
        foreach ($postCates as $key => $value){
            if($postCate->id == $value->id){
                unset($postCates[$key]);
            }
        }
        return view('adminlte::post_category.detail', compact(['postCate','postCates']));
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
        $data = $request->all();
        if(isset($data['active'])){
            if($data['active'] == 'on'){
                $data['active'] = 1;
            }else{
                $data['active'] = 0;
            }
        }else{
            $data['active'] = 0;
        }
        $postCate = PostCategory::find($id);
        $postCate->update($data);
        Session::flash('success', 'Thành công!');
        return redirect(route('postCate.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postCate = PostCategory::find($id);
        $postCate->delete();
        Session::flash('success', 'Thành công!');
        return back();
    }
}
