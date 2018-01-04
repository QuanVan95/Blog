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
                        <h3 class="box-title">Web Information </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('config.update', $config->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name </label>
                                <input type="text" name="name" class="form-control" required value="{{ $config->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Value 1 </label>
                                <input type="text" name="value1" class="form-control" value="{{ $config->value1 }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Value 2 </label>
                                <input type="text" name="value2" class="form-control" value="{{ $config->value2 }}">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="exampleInputEmail1">Active: </label>--}}
                                {{--@if( $config->active == 1)--}}
                                    {{--<input type="checkbox" name="active" checked>--}}
                                {{--@else--}}
                                    {{--<input type="checkbox" name="active">--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-default" href="{{ route('config.index') }}">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection