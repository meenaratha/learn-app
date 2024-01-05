@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Awards Recognition</title>
@endsection
@section('body')
<!--home body content start--->
        <!-- Page title -->
        <div class="page-title style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <div class="breadcrumbs">
                                <ul class="trail-items">
                                    <li>You are here:</li>
                                    <li class="trail-item"><a href="{{route('/')}}">Home</a></li>
                                    <li class="trail-item"><a href="{{route('about')}}">Who we are</a></li>
                                    <li class="trail-end">Awards &amp; Recognition</li>
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
                        <div class="general flat-awards-recognition">
                            <div class="general-text">
                                <h4 class="title">AWARDED TOP SALES TRAINING COMPANY</h4>
                                <p>We are proud of the success and recognition that we’ve achieved with our clients. We pride ourselves on developing practical solutions that drive results in the real world. These solutions span sales performance improvement, learning and development, and technological innovation. Below are just a few examples of awards that we have earned.</p>
                            </div><!-- /.general-text -->

                            <div class="flat-divider d40px"></div>

                            <div class="awards-recognition">
                                <div class="awards-recognition-item">
                                    <div class="ar-img">
                                        <img src="{{asset('frontend/images/about/a1.jpg')}}" alt="images">
                                    </div>
                                    <div class="ar-content">
                                        <p><strong>Training Industry – <span class="scheme2">Top Training Companies 2016</span></strong></p>
                                        <p>Awarded Training Industry’s annual Top Sales Training Companies Award for the 10th consecutive year. This award went to those who&nbsp;provide outstanding service, and a proven track record for delivering superior sales training and improving the impact of the sales organization.</p>
                                    </div>
                                </div><!-- /.awards-recognition-item -->

                                <div class="awards-recognition-item">
                                    <div class="ar-img">
                                        <img src="{{asset('frontend/images/about/a2.jpg')}}" alt="images">
                                    </div>
                                    <div class="ar-content">
                                        <p><strong>SellingPower – <span class="scheme2">Top 20 Sales Training Companies 2015</span></strong></p>
                                        <p>Named in Selling Power Magazine’s Top 20 Sales Training Companies Award for the 3rd consecutive year. This award went to those who demonstrated depth and breadth of training offered, innovative offerings, the ability to customize offerings, and the strength of client satisfaction.</p>
                                    </div>
                                </div><!-- /.awards-recognition-item -->

                                <div class="awards-recognition-item">
                                    <div class="ar-img">
                                        <img src="{{asset('frontend/images/about/a3.jpg')}}" alt="images">
                                    </div>
                                    <div class="ar-content">
                                        <p><strong>CIO Big Data 100</strong></p>
                                        <p>Recognized as CIO Review’s Top 100 Most Promising Big Data Companies for 2014. This award was for our Sales Talent Optimization (STO) solutions to companies that leverage assessment and analytical technologies to help sales and human recourse executives maximize their team’s performance.</p>
                                    </div>
                                </div><!-- /.awards-recognition-item -->

                                <div class="awards-recognition-item">
                                    <div class="ar-img">
                                        <img src="{{asset('frontend/images/about/a4.jpg')}}" alt="images">
                                    </div>
                                    <div class="ar-content">
                                        <p><strong>Pharma Tech Outlook – <span class="scheme2">Top Analytics Solution Providers 2016</span></strong></p>
                                        <p>Named in Pharma Tech Outlook’s Top 10 Analytics Solution Providers. This award was for our ability to help the world’s leading organizations drive predictable revenue and profitability by optimizing sales performance.</p>
                                    </div>
                                </div><!-- /.awards-recognition-item -->

                                <div class="awards-recognition-item">
                                    <div class="ar-img">
                                        <img src="{{asset('frontend/images/about/a5.jpg')}}" alt="images">
                                    </div>
                                    <div class="ar-content">
                                        <p><strong>Training Industry – <span class="scheme2">2016 Sales Training Companies Watch List</span></strong></p>
                                        <p>Awarded Training Industry’s annual Top Sales Training Companies Award for the 10th consecutive year. This award went to those who&nbsp;provide outstanding service, and a proven track record for delivering superior sales training and improving the impact of the sales organization.</p>
                                    </div>
                                </div><!-- /.awards-recognition-item -->
                            </div><!-- /.awards-recognition -->
                        </div><!-- /.company-history -->

                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a href="{{route('about')}}">Overview</a>
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
                                                <a href="{{route('our-clients')}}">Our Clients </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('testimonial')}}">Testimonials</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('faq')}}">FAQ</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="active" href="{{route('awards-recognition')}}">Awards &amp; Recognition</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->
                                    @include('frontend.layout.download')

                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebar-wrap -->
                        </div><!-- /.general-sidebar -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
       @endsection
