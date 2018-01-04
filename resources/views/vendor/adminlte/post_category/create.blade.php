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
                        <h3 class="box-title">Post Category </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('postCate.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent </label>
                                <select name="parent_id" class="form-control">
                                    <option value="0">- Choose Parent -</option>
                                    @foreach($postCates as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name </label>
                                <input type="text" name="name" class="form-control" id="name" required onkeyup="return getSlug()" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description </label>
                                <input type="text" name="description" class="form-control" id="description" autocomplete="off" onkeyup="return getSlug()">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Active: </label>
                                <input type="checkbox" name="active" checked>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-default" href="{{ route('postCate.index') }}">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection