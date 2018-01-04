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
                        <h3 class="box-title">Thư viện hình ảnh </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('gallery.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên  </label>
                                <input type="text" name="name" class="form-control" required onkeyup="return getSlug()" autocomplete="off" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thư viện  </label>
                                <div>
                                    <button type="button" class="btn btn-success fileup-btn">
                                        Select files
                                        <input type="file" id="upload-2" name="galleries[]" multiple>
                                    </button>
                                    <div id="upload-2-queue" class="queue"></div>
                                </div>
                            </div>
                        </div>
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>

                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <a class="btn btn-default" href="{{ route('gallery.index') }}">Đóng</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection