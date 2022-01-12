<header class="main-header">
    <nav class="navbar navbar-static-top pl-30">
        <!-- Sidebar toggle button-->
        <div>
            <ul class="nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
                        <i class="nav-link-icon mdi mdi-menu"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="javascript:void(0)" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
                        <img src="{{ (!empty($user->image ))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg')}}" alt="">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
