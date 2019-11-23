<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 bg-light modal-dialog">
        <div class="navbar"><a href="index.html" class="navbar-brand"><svg width="32" height="32"
                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path
                            d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z">
                        </path>
                    </g>
                </svg> <span class="hidden-folded d-inline l-s-n-3x">
                    <img src="/logo3.png" style="max-width: 90px;" alt="COCODOWO" class=""></span></a></div>
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded"><span class="text-muted">Main</span></li>
                    <li><a href="{{route('admin.dashboard')}}"><span class="nav-icon text-primary"><i
                                    data-feather="home"></i></span> <span class="nav-text">Dashboard</span></a></li>
                    <li class="nav-header hidden-folded"><span class="text-muted">Applications</span></li>
                    <li><a href="#"><span class="nav-icon text-info">
                        <i data-feather="users"></i></span> <span class="nav-text">Admins</span><span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{route('admin')}}" class=""><span class="nav-text">All Admins</span></a></li>
                            <li><a href="{{route('admin-new')}}" class=""><span class="nav-text">Add Admin</span></a></li>
                            <li><a href="{{route('admin-suspended')}}" class=""><span class="nav-text">Suspended Admins</span></a></li>
                            <li><a href="{{route('admin-deleted')}}" class=""><span class="nav-text">Deleted Admins</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="nav-icon text-success">
                        <i data-feather="users"></i></span> <span class="nav-text">Sponsors</span><span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{route('admin-users')}}" class=""><span class="nav-text">All Sponsors</span></a></li>
                            <li><a href="{{route('admin-new')}}" class=""><span class="nav-text">Add Sponsor</span></a></li>
                            <!-- <li><a href="{{route('admin-suspended')}}" class=""><span class="nav-text">Suspended Sponsor</span></a></li> -->
                        </ul>
                    </li>
                    <li><a href="#"><span class="nav-icon text-success">
                        <i data-feather="users"></i></span> <span class="nav-text">Farmers</span><span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{route('admin-farmers')}}" class=""><span class="nav-text">All Farmers</span></a></li>
                            <li><a href="{{route('admin-farmer-new')}}" class=""><span class="nav-text">Add New Farmer</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="nav-icon text-success">
                        <i data-feather="users"></i></span> <span class="nav-text">Products</span><span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{route('products.index')}}" class=""><span class="nav-text">All Products</span></a></li>
                            <li><a href="{{route('products.create')}}" class=""><span class="nav-text">Add New Product</span></a></li>
                            <!-- <li><a href="{{route('admin-suspended')}}" class=""><span class="nav-text">Suspended Sponsor</span></a></li> -->
                        </ul>
                    </li>
                    <li><a href="#"><span class="nav-icon text-success">
                        <i data-feather="users"></i></span> <span class="nav-text">Investment</span><span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{route('investments.index')}}" class=""><span class="nav-text">All investments</span></a></li>
                            <li><a href="{{route('investments.create')}}" class=""><span class="nav-text">Add New Investments</span></a></li>
                            <!-- <li><a href="{{route('admin-suspended')}}" class=""><span class="nav-text">Suspended Sponsor</span></a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="nav-icon text-warning">
                            <i data-feather="settings"></i></span> <span class="nav-text">Settings</span>
                            <span class="nav-badge"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-logout')}}"><span class="nav-icon text-danger">
                            <i data-feather="power"></i></span> <span class="nav-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>