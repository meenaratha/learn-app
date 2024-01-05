@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Training Profram 5</title>
@endsection
@section('body')
<!--home body content start--->

        <!-- Page title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <div class="breadcrumbs">
                                <ul class="trail-items">
                                    <li>You are here:</li>
                                    <li class="trail-item"><a href="{{route('/')}}">Home</a></li>
                                    <li class="trail-item"><a href="{{route('training-program5')}}">Training Programs</a></li>
                                    <li class="trail-end">Selling With Insights</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <div class="flat-row flat-general sidebar-right">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="general">
                            <img src="{{asset('frontend/images/training/d5.jpg')}}" alt="images">

                            <div class="flat-divider d40px"></div>

                            <div class="general-text">
                                <h4 class="title">Selling with Insights helps create consistent, measurable value with key clients and prospects.</h4>

                                <p><strong>Critical Issues Facing Sales Reps:</strong></p>

                                <ul class="flat-list style1 style2">
                                    <li>Differentiating and creating value in their selling efforts</li>
                                    <li>Integrating the use of insights in customer dialogues</li>
                                    <li>Crafting tailored insight messages</li>
                                </ul>

                                <div class="flat-divider d30px"></div>
                            </div>
                        </div><!-- /.general -->

                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}">Data Science & Business Analytics</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}">Cyber Security
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}"> AI & Machine Learning</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}">Courses in Software Development</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="active" href="{{route('onlineclass-course5')}}"> Digital Marketing</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}"> Cloud Computing</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}"> Big Data</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}">Project Management</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}"> IT Service and Architecture</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('onlineclass-course5')}}">  Web and Programming</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->


                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebar-wrap -->
                        </div><!-- /.general-sidebar -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->


        <section class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-portfolio portfolio-grid-alt">
                            <ul class="portfolio-filter">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".coaching" href="#">Free Training</a></li>
                                <li><a data-filter=".consulting" href="#">IT Program</a></li>
                                <li><a data-filter=".assessment" href="#">Non-IT Program</a></li>
                                <li><a data-filter=".messaging" href="#">Corporate Training</a></li>
                            </ul><!-- /.project-filter -->

                            <div class="portfolio">
                                <div class="portfolio-item item-four-column coaching consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/1.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Start Learning</a></li>
                                                    <li><a href="#">Sales Consulting</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}"> Data Science & Business Analytics</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column coaching">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/2.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Cybar Security</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Coaching</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}">AI & Machine Learning</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column coaching consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/3.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Digital Marketing</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Coaching</a></li>
                                                    <li><a href="#">Sales Consulting</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}">Web Application</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column assessment">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/4.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Talent Assessment</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}">HITACHI GENERATES MORE THAN $40 MILLION</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column messaging">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/5.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Messaging</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}">TRANSITIONING TO INSIGHT-BASED SELLING</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/6.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Consulting</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}">LAUNCHING A SMARTER SALES PROCESS</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column assessment">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/7.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Talent Assessment</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course5')}}">PROFILING HIGH PERFORMER REPS</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column coaching consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course5')}}"><img src="{{asset('frontend/images/portfolio/8.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course5')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Coaching</a></li>
                                                    <li><a href="#">Sales Consulting</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course4')}}">BUILDING A SALES MANAGER ACADEMY</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.flat-portfolio -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <!-- Footer -->
       @endsection
