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
                        <h3 class="box-title">Home Management </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('home_management.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo </label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" name="logo">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload' class="img-responsive"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title </label>
                                <input type="text" name="title" class="form-control" id="name" required onkeyup="return getSlug()" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Animation Title </label>
                                <input type="text" name="animation_title" class="form-control" id="animation_title" required onkeyup="return getSlug()" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Title </label>
                                <input type="text" name="sub_title" class="form-control" id="sub_title" required onkeyup="return getSlug()" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Background Image </label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp1" name="background_image">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload1' class="img-responsive"/>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-default" href="{{ route('home_management.index') }}">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection