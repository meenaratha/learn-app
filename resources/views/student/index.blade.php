@extends('student.layout.master-layout')
@section('body')
<!-- Page Wrapper -->
<div class="page-wrappers" style="margin-left: 0px;
padding-top: 60px;
position: relative;">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
       <!-- <div class="page-header" style="background-image: url('asset('frontend/images/unitelearning/mini-banner.jpg')')">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> Student Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>-->
        <!-- /Page Header -->
        <!--section 1 mini banner-->

    <!--section 2 start-->

        <div class="anger-widget">
        <h1>Papular Courses</h1>
<ul class="anger-widget-container">


    <li class="anger-widget-list" style="--accent-color:#1286A8">
        <div class="icon"><i class="fa-brands fa-html5"></i></div>
        <div class="title">HTML 5 Developer</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </li>
    <li class="anger-widget-list" style="--accent-color:#1286A8">
        <div class="icon"><i class="fa-brands fa-html5"></i></div>
        <div class="title">HTML 5 Developer</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </li>
    <li class="anger-widget-list" style="--accent-color:#D2B53B">
        <div class="icon"><i class="fa-brands fa-css3"></i></div>
        <div class="title">Digital Marketing</div>
        <div class="descr">Lorem ipsum dolor sit.</div>
    </li>
    <li class="anger-widget-list" style="--accent-color:#DA611E">
        <div class="icon"><i class="fa-brands fa-js"></i></div>
        <div class="title">SEO Analysis</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam odio alias.</div>
    </li>
    <li class="anger-widget-list" style="--accent-color:#AC2A1A">
        <div class="icon"><i class="fa-brands fa-github"></i></div>
        <div class="title">Social Media Markeing</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </li>
</ul>

     </div>


    </div>

@endsection
