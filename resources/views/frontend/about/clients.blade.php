@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Our Clients</title>
@endsection
@section('body')
<!--client body content start--->

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
                                    <li class="trail-item"><a href="{{route('about')}}">Who we are</a></li>
                                    <li class="trail-end"> Clients</li>
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
                        <div class="general flat-clients">
                            <div class="general-text">
                                <h4 class="title">OUR CLIENTS</h4>
                                <p>Our deep knowledge and experience across a multitude of industries allows us to provide unique and valuable insight and counsel to our clients.</p>
                                <p>Unitelearing has provided services in 50 countries and in 20 languages. We can help your entire global sales organization overcome business development challenges and go-to-market successfully. While some of the world’s largest companies are our clients, we’ve helped grow businesses of every size—from emerging startups to the Global 2000 and Fortune 500.</p>
                                <p>Below are just a few of the companies we’ve served:</p>
                            </div><!-- /.clients-text -->

                            <div class="clients-image clearfix">
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/1.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Embossed Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/2.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Hot Foil Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/3.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Burned Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/4.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Sharon Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/5.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Giraffe Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/6.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Vintage Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/7.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Premium Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/8.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Leather Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/9.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Cardboard Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/10.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Hot Foil Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/1.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Embossed Logo Mockup</p>
                                </div>
                                <div class="item-three-column">
                                    <div class="item-img">
                                        <img src="{{asset('frontend/images/client/3.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Burned Logo Mockup</p>
                                </div>
                            </div><!-- /.flat-clients-image -->

                            <div class="clients-text-title">
                                <h6>IF YOU WOULD LIKE TO DISCUSS A POTENTIAL PARTNERSHIP WITH UNITELEARNING,
                                     PLEASE CONTACT US AT TEL: 1800 232 3485 OR INFO@UNITELEARNING.COM</h6>
                            </div>
                        </div><!-- /.flat-clients -->

                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a class="active" href="{{route('about')}}">Overview</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('company-history')}}">Company history</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('leadership-team')}}">Leadership Team</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('partners')}}">Partners </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="active" href="{{route('our-clients')}}"> Clients</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('testimonial')}}">Testimonials</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('faq')}}">FAQ</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('awards-recognition')}}">Awards &amp; Recognition</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->

                                    @include('frontend.layout.download')
                                    <!-- /.widget_text -->
                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebar-wrap -->
                        </div><!-- /.general-sidebar -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
        @endsection
