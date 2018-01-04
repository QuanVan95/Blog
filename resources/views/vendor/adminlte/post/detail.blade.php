@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has($msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
                    @endif
                @endforeach
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Post Management </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Category </label>
                                <select name="category_id" class="form-control">
                                    <option value="0">- Please Choose Post Category -</option>
                                    @foreach($postCates as $value)
                                        @if($post->category_id == $value->id)
                                            <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                        @else
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" onkeyup="return getSlug()" autocomplete="off" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Animation Title </label>
                                <input type="text" name="animation_title" class="form-control" value="{{ $post->animation_title }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Title</label>
                                <input type="text" id="sub_title"  class="form-control" name="sub_title" value="{{ $post->sub_title }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content </label>
                                <input type="text" name="content" class="form-control"  value="{{ $post->content }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Position </label>
                                <input type="number" min="0" name="position" class="form-control" value="{{ $post->position }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image </label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" name="image">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly value="{{ $post->image }}">
                                </div>
                                <img id='img-upload' class="img-responsive" src="{{ asset('images/posts/' . $post->image) }}"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Active: </label>
                                @if( $post->active == 1)
                                    <input type="checkbox" name="active" checked>
                                @else
                                    <input type="checkbox" name="active">
                                @endif
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-default" href="{{ route('post.index') }}">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection