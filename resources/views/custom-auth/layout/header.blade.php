<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard - user</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/icon/favicon.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/dashboard/assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('frontend/dashboard/assets/css/font-awesome.min.css')}}">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('frontend/dashboard/assets/css/line-awesome.min.css')}}">

		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{asset('frontend/dashboard/assets/plugins/morris/morris.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('frontend/dashboard/assets/css/style.css')}}">

        <!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('frontend/dashboard/assets/css/select2.min.css')}}">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('frontend/dashboard/assets/css/bootstrap-datetimepicker.min.css')}}">

		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="{{asset('frontend/dashboard/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>

    <body>
<!-- Main Wrapper -->
        <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{asset('frontend/icon/favicon.png')}}" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->



            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Register Your Details</h3>
            </div>
            <!-- /Header Title -->

           <!-- <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>-->

            <!-- Header Menu -->
            <ul class="nav user-menu">


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">

                           <!-- <img src="{{asset('frontend/dashboard/assets/img/profiles/avatar-21.jpg')}}" alt="">-->

                           <!-- <span class="status online"></span>-->
                        </span>
                        <span>Quick Menu</span>
                    </a>
                    <div class="dropdown-menu">
                        <!--<a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>-->
                        <a class="dropdown-item" href="{{('/role-register')}}">Register</a>
                        <a class="dropdown-item" href="{{('/role-login')}}">Login</a>

                        <!-- Authentication -->

                        <a class="dropdown-item" href="{{ route('logout.perform') }}" >
                            Logout</a>

                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>

                    <!-- Authentication -->

                        <a class="dropdown-item" href="{{ route('logout') }}">
                            Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
        <!-- /Header -->
