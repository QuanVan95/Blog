<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;
use Session;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        foreach ($posts as $value){
            $postCate = PostCategory::find($value->category_id);
            if($postCate){
                $value->category_name = $postCate->name;
            }
        }
        return view('adminlte::post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postCates = PostCategory::all();
        return view('adminlte::post.create', compact('postCates'));
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
        $file = $request->file('image');
        if($file){
            $file_name = time() . '_' . $file->getClientOriginalName();
            $data['image'] = $file_name;
            $file->move(base_path().'/public/images/posts', $file_name);
        }

        Post::create($data);
        Session::flash('success', 'Create Successfully!');
        return redirect(route('post.index'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        $postCates = PostCategory::all();
        return view('adminlte::post.detail', compact(['post','postCates']));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
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
        $file = $request->file('image');
        if($file){
            $file_name = time() . '_' . $file->getClientOriginalName();
            $data['image'] = $file_name;
            $file->move(base_path().'/public/images/posts', $file_name);
        }
        $post->update($data);
        Session::flash('success', 'Update Successfully!');
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Delete Successfully!');
        return back();
    }
}
