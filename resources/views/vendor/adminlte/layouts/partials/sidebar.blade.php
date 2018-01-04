<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>--}}
              {{--<span class="input-group-btn">--}}
                {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
              {{--</span>--}}
            {{--</div>--}}
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>--}}
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('admin/home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('admin/home-managements') }}"><i class='fa fa-link'></i> <span>Home Management </span></a></li>
            <li><a href="{{ url('admin/post_categories') }}"><i class='fa fa-link'></i> <span>Post Category Management</span></a></li>
            <li><a href="{{ url('admin/posts') }}"><i class='fa fa-link'></i> <span>Post Management</span></a></li>
            <li><a href="{{ url('admin/config') }}"><i class='fa fa-link'></i> <span>Config</span></a></li>
            <li><a href="{{ url('admin/contacts') }}"><i class='fa fa-link'></i> <span>Contact Management</span></a></li>
            {{--<li><a href="{{ url('admin/posts') }}"><i class='fa fa-link'></i> <span>Quản lý bài viết</span></a></li>--}}
            {{--<li><a href="{{ url('admin/contacts') }}"><i class='fa fa-link'></i> <span>Quản lý Contact</span></a></li>--}}
            {{--<li><a href="{{ url('admin/section_categories') }}"><i class='fa fa-link'></i> <span>Danh mục home</span></a></li>--}}
            {{--<li><a href="{{ url('admin/galleries') }}"><i class='fa fa-link'></i> <span>Quản lý thư viện </span></a></li>--}}
            {{--<li><a href="{{ url('admin/config') }}"><i class='fa fa-link'></i> <span>Thông tin website</span></a></li>--}}
            {{--<li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>--}}
                    {{--<li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
