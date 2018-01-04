<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'desc')->paginate(10);
        return view('adminlte::gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::gallery.create');
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
        $galleries = $request->file('galleries');
        $data['gallery'] = [];
        foreach ($galleries as $value){
            $file_name = time() . '_' . $value->getClientOriginalName();
            array_push($data['gallery'], $file_name);
            $value->move(base_path().'/public/images/galleries', $file_name);
        }
        $data['gallery'] = json_encode($data['gallery']);
        Gallery::create($data);
        Session::flash('success', 'Thành công!');
        return redirect(route('gallery.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);
        $gallery->gallery = json_decode($gallery['gallery']);
        return view('adminlte::gallery.detail', compact('gallery'));
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
        $gallery = Gallery::find($id);
        $galleryArray = [];
        //dd($gallery->gallery);
        $data = $request->all();
        $galleries = $request->file('galleries');
        if(count($galleries) > 0){
            foreach ($galleries as $value){
                $file_name = time() . '_' . $value->getClientOriginalName();
                array_push($galleryArray, $file_name);
                $value->move(base_path().'/public/images/galleries', $file_name);
            }
        }
        foreach ($data['items'] as $value){
            array_push($galleryArray, $value);
        }
        $gallery->gallery = $galleryArray;
        $data['gallery'] = json_encode($gallery->gallery);
        $gallery->update($data);
        Session::flash('success', 'Thành công!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        Session::flash('success', 'Thành công!');
        return back();
    }
}
