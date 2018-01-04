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
                        <h3 class="box-title">Thông tin website </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('config.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề bài viết </label>
                                <input type="text" name="name" class="form-control" required onkeyup="return getSlug()" autocomplete="off" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề phụ </label>
                                <input type="text" name="sub_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung </label>
                                <textarea type="text" id="summernote" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">URL </label>
                                <input type="text" name="url" class="form-control" id="url" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thứ tự </label>
                                <input type="number" min="0" name="position" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title </label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Keyword </label>
                                <input type="text" name="meta_keyword" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description </label>
                                <input type="text" name="meta_description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Active: </label>
                                <input type="checkbox" name="active" checked>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Show Home: </label>
                                <input type="checkbox" name="show">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh </label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" name="image">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload' class="img-responsive"/>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <a class="btn btn-default" href="{{ route('post.index') }}">Đóng</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection