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
                    <h3 class="box-title">Post Management </h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm">
                            <a name="table_search" class="btn btn-primary form-control pull-right" href="{{ route('post.create') }}">Thêm</a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Post Category </th>
                            <th>Title </th>
                            <th>Animation Title </th>
                            <th>Sub Title </th>
                            <th>Content </th>
                            <th>Position </th>
                            <th>Image </th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                        @foreach($posts as $key => $value)
                            {{--@php--}}
                                {{--$imgUrl = (  == true) ? env('APP_URL') . $post->image : env('APP_URL') . '/public/files/admin/not-available.jpg';--}}
                            {{--@endphp--}}

                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->category_name }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->animation_title }}</td>
                            <td>{{ $value->sub_title }}</td>
                            <td>{{ $value->content }}</td>
                            <td>{{ $value->position }}</td>
                            <td><img src="{{ asset('images/posts/' . $value->image) }}" width="100px" height="50px"></td>
                            <td>
                                @if( $value->active == 1)
                                    <input type="checkbox" checked disabled>
                                @else
                                    <input type="checkbox" disabled>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('post.detail', $value->id) }}"><i class="fa fa-pencil"></i></a>
                                {{--<a class="btn btn-danger btn-sm" href="{{ route('post.delete', $value->id) }}"><i class="fa fa-close"></i></a>--}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {{ $posts->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
