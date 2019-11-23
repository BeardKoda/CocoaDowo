<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} - Admin |  @yield('title') </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('admincss/assets/css/site.min.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body class="layout-row bg-dark">
    @include('admin.include.side')
    <div id="main" class="layout-column flex">
        @include('admin.include.header')
		<div id="content" class="flex">
        <div class="page-hero page-container" id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">@yield('title')</h2>@yield('sub-title')
                </div>
                <div class="flex"></div>
                <div>
                    @include('admin.flash')                    
                </div>
            </div>
        </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.include.javascript')   
        @include('admin.include.footer') 
    </div>
    <script src="{{ asset('admincss/assets/js/site.min.js') }}"></script>
    @yield('javascript')
</body>
</html>