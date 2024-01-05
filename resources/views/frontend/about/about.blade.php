@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || about Page</title>
@endsection
@section('body')
<!--about body content start--->
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
                                    <li class="trail-end">Who we are</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <!-- Flat about -->
        <div class="flat-row flat-general sidebar-right">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="general about-content">
                            <div class="about-slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <a class="popup-gallery" href="{{asset('frontend/images/about/1.jpg')}}"><img src="{{asset('frontend/images/about/1.jpg')}}" alt="images"></a>
                                        </li>
                                        <li>
                                            <a class="popup-gallery" href="{{asset('frontend/images/about/2.jpg')}}"><img src="{{asset('frontend/images/about/2.jpg')}}" alt="images"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.about-slider -->

                            <div class="about-content-text">
                                <h4 class="about-content-title">OVERVIEW COMPANY</h4>
                                <p><strong>Research Based Sales Training, Sales Coaching &amp; Sales Consulting</strong></p>
                                <p>At Unitelearning we’ve earned a reputation for providing sales people with the insights they need to dominate in today’s hyper-competitive selling climate.</p>
                                <p>Unitelearning is a research based sales training, sales coaching and sales consulting firm that is the leader in the integration of proven science and sales. Based in New York, United States, we study the scientific disciplines of social psychology, communication theory, cognitive psychology, social neuroscience, cognitive neuroscience and behavioral economics. We then take the repeatable and predictable principles, which science has proven to create and enable influence, out of
                                     the laboratory and academic journals and apply them to selling.</p>
                                <p>What’s more, we have conducted original scientific research that identified the mental process that the human brain goes through when making a buying decision.&nbsp; We then deconstructed this internal decision making process into clear,
                                     manageable steps that equip sales people to literally sell the way that their prospects’
                                     brains are hardwired to buy.</p>
                                <p>When sales people base their sales activities and behaviors upon proven science,
                                    the results are always astounding:&nbsp; sales cycles shorten, market share grows,
                                     and sales production skyrockets.</p>
                            </div><!-- /.about-content-text -->

                            <div class="about-content-text">
                                <h4 class="about-content-title">WHY UNITELEARNING?</h4>
                                <p>We help the world’s leading companies drive predictable revenue and profitability growth by optimizing sales organization performance.</p>
                            </div><!-- /.about-content-text -->

                            <div class="flat-counter">
                                <div class="item-four-column">
                                    <div class="counter">
                                        <div class="counter-image">
                                            <i class="fa fa-signing"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="numb-count" data-to="65" data-speed="3000" data-waypoint-active="yes">65</span>
                                            <span class="counter-suffix">%</span>
                                        </div>
                                        <div class="counter-title">Unitelearning has worked with 65% of the Fortune 500</div>
                                    </div>
                                </div>

                                <div class="item-four-column">
                                    <div class="counter">
                                        <div class="counter-image">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="numb-count" data-to="1000" data-speed="3000" data-waypoint-active="yes">1000</span>
                                            <span class="counter-suffix">+</span>
                                        </div>
                                        <div class="counter-title">Trained over 1,000 sales professionals worldwide</div>
                                    </div>
                                </div>

                                <div class="item-four-column">
                                    <div class="counter">
                                        <div class="counter-image">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="numb-count" data-to="50" data-speed="3000" data-waypoint-active="yes">50</span>
                                            <span class="counter-suffix">countries</span>
                                        </div>
                                        <div class="counter-title">Delivered programs in over 50 countries</div>
                                    </div>
                                </div>

                                <div class="item-four-column">
                                    <div class="counter">
                                        <div class="counter-image">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="numb-count" data-to="8" data-speed="3000" data-waypoint-active="yes">8</span>
                                            <span class="counter-suffix">years</span>
                                        </div>
                                        <div class="counter-title">8 straight years as a top sales training company</div>
                                    </div>
                                </div>
                            </div><!-- /.flat-counter -->

                            <div class="about-content-text item-column">
                                <div class="item-two-column">
                                    <h4 class="about-content-title">WHY ARE WE DIFFERENT?</h4>
                                    <p>Our clients tell us we are unique for a variety of important reasons including:</p>
                                    <ul class="flat-list style1">
                                        <li>Deep customization</li>
                                        <li>Industry specialization</li>
                                        <li>Interactive learning</li>
                                        <li>Extensive curriculum</li>
                                        <li>Traditional and digital delivery modalities</li>
                                        <li>Experienced and expert facilitators</li>
                                        <li>Results in initiating and sustaining change through the organization</li>
                                    </ul>
                                </div>

                                <div class="item-two-column">
                                    <div class="flat-video-fancybox">
                                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                                            <img src="{{asset('frontend/images/11.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.about-content-text -->

                            <div class="flat-accordion style">
                                <div class="flat-toggle">
                                    <h6 class="toggle-title">Unitelearning Mission</h6>
                                    <div class="toggle-content">
                                        <p>Unitelearning is all about the client and our mission is to make you successful. We work with business and sales leaders to improve performance and deliver tangible results. Our belief is that we must do more than just deliver our capabilities and services – we must own results with our clients.</p>
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title">Unitelearning Vision</h6>
                                    <div class="toggle-content">
                                        <p>Our vision is to help clients achieve their highest
                                            levels of sales and customer success by generating demand, winning

                        opportunities, growing accounts, and managing sales performance. We seek to
                        accomplish this through a single platform of assessments and analytics, learning, and sales
                         process playbooks. The Cosine approach enables a faster and more successful execution of
                          sales improvement initiatives.</p>
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">Unitelearning Values</h6>
                                    <div class="toggle-content">
                                        <p>At Unitelearning, we value honesty and integrity
                                            above all else, and highly value customer and employee loyalty.
                                             We also believe in giving back to our communities, making them better
                                              places to live.</p>
                                    </div>
                                </div><!-- /toggle -->
                            </div><!-- /.flat-accordion -->
                        </div><!-- /.about-content -->

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
                                                <a href="{{route('our-clients')}}">Our Clients </a>
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
                                    <!--<div class="widget widget_text">
                                        <div class="textwidget">
                                            <h4 class="widget_title">Complimentary Download</h4>
                                            <p>Thank you for your interest in Cosine's Selling training solutions.
                                                 To download this brochure, please complete the form on the right.If you
                                                  are having any issues completing the form, please email Linethemes at
                                                   the following and we can send you the files - contact <a href="#" class="scheme2">info@unitelearning.com </a></p>
                                            <form class="widget-form">
                                                <p>
                                                    <input type="text" name="EMAIL" placeholder="Your email address">
                                                </p>
                                                <p>
                                                    <input type="submit" value="Download">
                                                </p>
                                            </form>
                                        </div>
                                    </div>-->         <!-- /.widget_text -->

                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebar-wrap -->
                        </div><!-- /.general-sidebar -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

@endsection
