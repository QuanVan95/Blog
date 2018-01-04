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
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Post Category </h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm">
                            <a name="table_search" class="btn btn-primary form-control pull-right" href="{{ route('postCate.create') }}">Thêm</a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name </th>
                            <th>Parent </th>
                            <th>Description </th>
                            <th>Active </th>
                            <th></th>
                        </tr>
                        @foreach($postCates as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->parent_name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>
                                @if( $value->active == 1)
                                    <input type="checkbox" checked disabled>
                                @else
                                    <input type="checkbox" disabled>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('postCate.detail', $value->id) }}"><i class="fa fa-pencil"></i></a>
                                {{--<a class="btn btn-danger btn-sm" href="{{ route('postCate.delete', $value->id) }}"><i class="fa fa-close"></i></a>--}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {{ $postCates->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
