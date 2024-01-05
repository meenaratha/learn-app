@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Online class  Training Course 1</title>
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
                                    <li class="trail-end">Case Studies Layout 03</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <!-- Portfolio -->
        <section class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-portfolio portfolio-grid-alt">
                            <ul class="portfolio-filter">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".coaching" href="#">Sales Coaching</a></li>
                                <li><a data-filter=".consulting" href="#">Sales Consulting</a></li>
                                <li><a data-filter=".assessment" href="#">Talent Assessment</a></li>
                                <li><a data-filter=".messaging" href="#">Sales Messaging</a></li>
                            </ul><!-- /.project-filter -->

                            <div class="portfolio">
                                <div class="portfolio-item item-four-column coaching consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/1.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
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
                                                    <a href="{{route('onlineclass-course4')}}">Consulting Firm Grows Client Roster by 29%</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column coaching">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/2.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Coaching</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course4')}}">Management Protects and Grows Accounts</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column coaching consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/3.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
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
                                                    <a href="{{route('onlineclass-course4')}}">Grows Strategic Accounts by 110% Year-Over-Year</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column assessment">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/4.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Talent Assessment</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course4')}}">HITACHI GENERATES MORE THAN $40 MILLION</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column messaging">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/5.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Messaging</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course4')}}">TRANSITIONING TO INSIGHT-BASED SELLING</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/6.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Sales Consulting</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course4')}}">LAUNCHING A SMARTER SALES PROCESS</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column assessment">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/7.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-wrap">
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Talent Assessment</a></li>
                                                </ul>
                                                <h6 class="portfolio-title">
                                                    <a href="{{route('onlineclass-course4')}}">PROFILING HIGH PERFORMER REPS</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.portfolio-item -->

                                <div class="portfolio-item item-four-column coaching consulting">
                                    <div class="portfolio-wrap">
                                        <div class="portfolio-thumbnail">
                                            <a href="{{route('onlineclass-course4')}}"><img src="{{asset('frontend/images/portfolio/8.jpg')}}" alt="images"></a>
                                            <div class="flat-figcaption">
                                                <div class="project-buttons">
                                                    <a href="{{route('onlineclass-course4')}}"><span>Quick View</span></a>
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
