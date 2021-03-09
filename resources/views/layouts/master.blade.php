<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('../assets/images/favicon.png')}}">
    <title>Cedimmo - @yield('page_title') </title>
    <!-- Custom CSS -->
    <link href="{{asset('../assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('../assets/css/my-style.css')}}" rel="stylesheet">
    <link href="{{asset('../assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('../dist/css/style.min.css')}}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<!-- Main wrapper - style you can find in pages.scss -->

<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

    @include('layouts.top_bar')

    @include('layouts.sidebar')

    <div class="page-wrapper">

        <div class="container-fluid">

            @yield('main_content')

        </div>

        @include('layouts.footer')

    </div>

</div>

@include('layouts.scripts')

@yield('extra-scripts')

</body>

</html>
