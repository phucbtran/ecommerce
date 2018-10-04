<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Pixit - Responsive Boostrap3 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="{{ asset('admin_pages/images/favicon.png')}}">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="{{ asset('admin_pages/css/icons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_pages/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_pages/css/plugins.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_pages/css/style.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_pages/css/color-dark.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_pages/css/font-awesome.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    @yield('page_style')
    <!-- END PAGE LEVEL STYLE -->
    <script src="{{ asset('admin_pages/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>

<body data-page="invoice">
<!-- BEGIN TOP MENU -->
@include('admin_pages.templates.layouts.header')
<!-- END TOP MENU -->
<!-- BEGIN WRAPPER -->
<div id="wrapper">
    <!-- BEGIN MAIN SIDEBAR -->
    @include('admin_pages.templates.layouts.left_bar')
    <!-- END MAIN SIDEBAR -->
    <!-- BEGIN MAIN CONTENT -->
    @yield('content')
    <!-- END MAIN CONTENT -->
</div>
<!-- END WRAPPER -->
<!-- BEGIN CHAT MENU -->
@include('admin_pages.templates.layouts.right_bar')
<!-- END CHAT MENU -->
<!-- BEGIN MANDATORY SCRIPTS -->
<script src="{{ asset('admin_pages/js/jquery-1.11.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery-migrate-1.2.1.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery.mobile-1.4.2.js')}}"></script>
<script src="{{ asset('admin_pages/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin_pages/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{ asset('admin_pages/js/bootstrap-select.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery.mmenu.min.all.js')}}"></script>
<script src="{{ asset('admin_pages/js/nprogress.js')}}"></script>
<script src="{{ asset('admin_pages/js/sparkline.min.js')}}"></script>
<script src="{{ asset('admin_pages/js/breakpoints.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery-numerator.js')}}"></script>
<script src="{{ asset('admin_pages/js/jquery.cookie.min.js')}}" type="text/javascript"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('page_script')
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{ asset('admin_pages/js/application.js')}}"></script>
</body>
</html>
