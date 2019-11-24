<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CocoaDowo | Nigeria's Number one Digital Cocoa Farming Platform</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="/sponsor/assets-2/styles/vendor/datatables.min.css">
    <link rel="stylesheet" href="/sponsor/assets-2/styles/css/themes/lite-purple.min.css">
    <link rel="stylesheet" href="/sponsor/assets-2/styles/css/themes/custom.css">
    <link rel="stylesheet" href="/sponsor/assets-2/styles/vendor/perfect-scrollbar.css">
</head>

<body>
    <div class="app-admin-wrap">
        <div class="main-header">
            <div class="logo">
                <img src="/logo.jpg" alt="">
            </div>

            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Main Menu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">About <br> Cocoadowo</h2>
                                <p>Cocoadowo is an agroforestry enterprise offering an end to end agriculture services with strong commitment on deforestation-free cocoa farming and increased food security. </p>
                                <a class="btn btn-lg btn-rounded btn-outline-warning" href="/about.html">Learn More</a>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">More on CocoaDowo</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#about"><i class="i-Library"></i>About </a>
                                    <a href="#blog"><i class="i-Drop"></i> Blog</a>
                                    <a href="#forum"><i class="i-File-Clipboard-File--Text"></i> Forum</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <!-- <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i> -->
                <!-- Grid menu Dropdown -->

               <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user colalign-self-end">
                        <img src="/sponsor/assets-2/images/faces/1.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> {{Auth::user()->name}}, {{Auth::user()->email}}
                            </div>
                            <a class="dropdown-item" href="{{route('settings')}}">Account settings</a>
                            <a class="dropdown-item" href="{{route('transactions')}}">Transaction history</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="side-content-wrap">
            <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                <li class="nav-item">
                        <a class="nav-item-hold" href="{{route('dashboard')}}">
                            <i class="nav-icon i-Bar-Chart"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-item-hold" href="{{route('wallet')}}">
                            <i class="nav-icon i-Money"></i>
                            <span class="item-name">Wallet</span>
                        </a>
                    </li>
                    <li class="nav-item" data-item="activity">
                        <a class="nav-item-hold" href="#user/activity">
                            <i class="nav-icon i-Optimization"></i>
                            <span class="nav-text">Activities</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="profile">
                        <a class="nav-item-hold" href="user/profile">
                            <i class="nav-icon i-Administrator"></i>
                            <span class="nav-text">Profile</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{route('locations')}}">
                            <i class="nav-icon i-Double-Tap"></i>
                            <span class="nav-text">Locations</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
            
            <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
                <!-- Profile -->
                <ul class="childNav" data-parent="profile">
                    <li class="nav-item">
                        <a href="{{route('settings')}}">
                            <i class="nav-icon i-Gear"></i>
                            <span class="item-name">Settings</span>
                        </a>
                    </li>
                </ul>
                <!-- Activity -->
                <ul class="childNav" data-parent="activity">
                    <li class="nav-item">
                        <a href="{{route('investments')}}">
                            <i class="nav-icon i-Environmental-3"></i>
                            <span class="item-name">Investments</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('investments.myindex')}}">
                            <i class="nav-icon i-Environmental-3"></i>
                            <span class="item-name">Investments History</span>
                        </a>
                    </li>
                </ul>
            <div class="sidebar-overlay"></div>
            </div>
        </div>
        <!--=============== Left side End ================-->

        <div class="main-content-wrap sidenav-open d-flex flex-column">
