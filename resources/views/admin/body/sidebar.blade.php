@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->

    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('admin') }} ">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/logo-dark.png') }}" alt="">
                        <h3>Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treevuew {{ ($route == 'admin')?'active':'' }}
            {{ ($route == 'admin.dashboard')?'active':'' }}">
                <a href="{{route('admin.dashboard')}}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ ($route == 'admin.blogTips.index')?'active':'' }}
            {{ ($route == 'admin.blogs.index')?'active':'' }}">
                <a href="javascript:void(0)">
                    <i data-feather="message-circle"></i>
                    <span>Blogs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.blogTips.index')}}"><i class="ti-more"></i>Blog tips</a></li>
                    <li><a href="{{route('admin.blogs.index')}}"><i class="ti-more"></i>Blogs</a></li>
                </ul>
            </li>

            <li class="treeview {{ ($route == 'admin.workTips.index')?'active':'' }}
            {{ ($route == 'admin.works.index')?'active':'' }}">
                <a href="javascript:void(0)">
                    <i data-feather="message-circle"></i>
                    <span>Works</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.workTips.index') }}"><i class="ti-more"></i>Work tips</a></li>
                    <li><a href="{{ route('admin.works.index') }}"><i class="ti-more"></i>Works</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
