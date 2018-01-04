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
                        <h3 class="box-title">Contact Detail </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name </label>
                                <input type="text" name="name" class="form-control" readonly value="{{ $contact->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" name="address" class="form-control" readonly value="{{ $contact->address }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" name="phone" class="form-control" readonly value="{{ $contact->phone }} "/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="text" name="email" class="form-control"  value="{{ $contact->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea class="form-control" name="message" id="contactTextarea" readonly>{{$contact->message}}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            {{--<button type="submit" class="btn btn-primary">Lưu</button>--}}
                            <a class="btn btn-default" href="{{ route('contact.index') }}">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection