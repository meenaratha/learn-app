<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    @yield('title')
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheets/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheets/style.css')}}">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheets/responsive.css')}}">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheets/colors/color1.css')}}" id="colors">
	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheets/animate.css')}}">
    <!-- Additional Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheets/custom.css')}}">
    <!-- Favicon and touch icons  -->
    <link href="{{asset('frontend/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset('frontend/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('frontend/icon/favicon.png')}}" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="header-sticky page-loading">
    <div class="loading-overlay">
    </div>

   <!-- Boxed -->
   <div class="boxed">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="flat-address">
                        <div class="social-links">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                        <div class="custom-info">
                            <span></span>
                            <i class="fa fa-envelope"></i>info@unitelearning.com
                            <i class="fa fa-phone"></i>1 800 232 3485
                        </div>
                    </div><!-- /.flat-address -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-6">
                    <div class="top-navigator">
                        <ul>



                            <li><a href="#">Online programs</a>
                                <ul>
                                    <li><a href="{{ route('data-science') }}">Web Designing</a></li>
                                    <li><a href="{{ route('data-science') }}">App Developement</a></li>
                                    <li><a href="{{ route('data-science') }}">SEO Marketing</a></li>


                                </ul>
                            </li>
                            <li><a href="#">Class Room Programs</a>
                                <ul class="right-sub-menu">
                                    <li><a href="{{route('digital-marketing')}}">Digital Marketing </a></li>
                                    <li><a href="{{route('digital-marketing')}}">Business Analyst</a></li>

                                </ul>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            <li>
                                <a href="{{ url('/welcome-to-our-world') }}" class=""  >
                                <img src="{{asset('frontend/images/icon/profile.png')}}"
                                alt="" style="width:30px;"> </a> </li>
                            @else
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="register-btn">Sign Up</a></li>
                            @endif
                            <li><a href="{{ route('login') }}" class="login-btn">Sign in </a></li>
                            @endauth
                            @endif
                        </ul>
                    </div><!-- /.top-navigator -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top -->

 <!-- Header -->
 <header id="header" class="header clearfix">
    <div class="header-wrap clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="logo" class="logoo">
                        <a href="{{route('/')}}">
                            <img src="{{asset('frontend/images/logo@2x.png')}}"  alt="images" width="123px" height="30px">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->

                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">

                                <li class="has-mega-menu">
                                    <a class="has-mega" href="#mega">Who we are</a>
                                    <div class="submenu mega-menu">
                                        <div class="row">
                                            <div class="container">
                                                <div class="col-md-4">
                                                    <div class="mega-title">
                                                        <h5 class="btn-mega">Who we are</h5>
                                                    </div>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="{{route('about')}}">Overview</a></li>
                                                        <li><a href="{{route('company-history')}}">Company History</a></li>
                                                        <li><a href="{{route('leadership-team')}}">Leadership Team</a></li>
                                                        <li><a href="{{route('partners')}}">Partners </a></li>
                                                        <li><a href="{{route('our-clients')}}">Our Clients </a></li>
                                                        <li><a href="{{route('testimonial')}}">Testimonials</a></li>
                                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                                        <li><a href="{{route('awards-recognition')}}">Awards &amp; Recognition</a></li>

                                                    </ul>
                                                </div><!-- /.col-md-4 -->



                                            <div class="col-md-4">
                                                <div class="mega-title">
                                                    <h5 class="btn-mega">what we do</h5>
                                                </div>
                                                <ul class="mega-menu-sub">
                                                    <li><a href="{{route('sales-effectiveness-solutions')}}">Sales Effectiveness Solutions</a></li>
                                        <li><a href="{{route('sales-training')}}">A Focus on Customized Sales Training</a></li>
                                        <li><a href="{{route('learning-approach')}}">Continuous Learning Approach</a></li>
                                        <li><a href="{{route('corporate.council')}}">Councling Services</a></li>
                                        <li><a href="">Placement</a></li>

                                                </ul>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="mega-title">
                                                    <h5 class="btn-mega">Placement</h5>
                                                </div>
                                                <ul class="mega-menu-sub">
                                                    <li><a href="{{ route('data-science') }}">Career</a></li>
                                                    <li><a href="{{ route('data-science') }}">Placement</a></li>
                                                    <li><a href="{{route('contact')}}">Contact </a></li>

                                                </ul>
                                              </div><!-- /.col-md-4 -->
                                            </div><!-- /.container -->
                                        </div><!-- /.row -->
                                    </div><!-- /.submenu -->
                                </li><!-- /.flat-mega-menu -->




                                <!--<li><a href="#">What we do</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('sales-effectiveness-solutions')}}">Sales Effectiveness Solutions</a></li>
                                        <li><a href="{{route('sales-training')}}">A Focus on Customized Sales Training</a></li>
                                        <li><a href="{{route('learning-approach')}}">Continuous Learning Approach</a></li>
                                        <li><a href="{{route('corporate.council')}}">Councling Services</a></li>
                                        <li><a href="">Placement</a></li>


                                    </ul>
                                </li>--><!-- /.submenu -->


                                <li class="has-mega-menu">
                                    <a class="has-mega" href="#mega">ALL COURSES</a>
                                    <div class="submenu mega-menu">
                                        <div class="row">
                                            <div class="container">
                                                <div class="col-md-4">
                                                    <div class="mega-title">
                                                        <h5 class="btn-mega">IT TRAINING</h5>
                                                    </div>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="{{ route('data-science') }}">Cyber security</a></li>
                                                        <li><a href="{{ route('data-science') }}">Software development</a></li>
                                                        <li><a href="{{ route('data-science') }}">Data science</a></li>
                                                        <li><a href="{{ route('data-science') }}">Artificial intelligence</a></li>
                                                        <li><a href="{{ route('data-science') }}"> Cloud computing</a></li>
                                                        <li><a href="{{ route('data-science') }}">Web development</a></li>
                                                        <li><a href="{{ route('data-science') }}">Android development</a></li>
                                                        <li><a href="{{ route('data-science') }}">Microsoft technologies</a></li>
                                                        <li><a href="{{ route('data-science') }}">DevOps</a></li>
                                                    </ul>
                                                </div><!-- /.col-md-4 -->



                                            <div class="col-md-4">
                                                <div class="mega-title">
                                                    <h5 class="btn-mega">NON-IT TRAINING</h5>
                                                </div>
                                                <ul class="mega-menu-sub">
                                                    <li><a href="{{ route('data-science') }}">Digital marketing</a></li>
                                                    <li><a href="{{ route('data-science') }}">Business Analyst</a></li>
                                                    <li><a href="{{ route('data-science') }}">Graphic Designer</a></li>
                                                    <li><a href="{{ route('data-science') }}">Search Engine Marketing</a></li>
                                                    <li><a href="{{ route('data-science') }}">Social Media Marketing</a></li>
                                                    <li><a href="{{ route('data-science') }}">Content Marketing</a></li>
                                                    <li><a href="{{ route('data-science') }}"> Marketing management</a></li>
                                                    <li><a href="{{ route('data-science') }}">Project management</a></li>

                                                </ul>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="mega-title">
                                                    <h5 class="btn-mega">FREE COURSES</h5>
                                                </div>
                                                <ul class="mega-menu-sub">
                                                    <li><a href="{{ route('data-science') }}">Cyber Security </a></li>
                                                    <li><a href="{{ route('data-science') }}">Data Science & Business Analytics</a></li>
                                                    <li><a href="{{ route('data-science') }}">Digital Marketing Course</a></li>
                                                    <li><a href="{{ route('data-science') }}">AI & Machine Learning </a></li>
                                                    <li><a href="{{ route('data-science') }}">Full Stack Developer Basics Course</a></li>
                                                    <li><a href="{{ route('data-science') }}"> SQL Basics </a></li>
                                                    <li><a href="{{ route('data-science') }}">Business and leadership</a></li>
                                                    <li><a href="{{ route('data-science') }}">IT service and Architechture</a></li>
                                                    <li><a href="{{ route('data-science') }}">Software Developer</a></li>
                                                </ul>
                                              </div><!-- /.col-md-4 -->
                                            </div><!-- /.container -->
                                        </div><!-- /.row -->
                                    </div><!-- /.submenu -->
                                </li><!-- /.flat-mega-menu -->

                                <li class="has-mega-menu">
                                    <a class="has-mega" href="#mega">Hire From Us</a>
                                    <div class="submenu mega-menu">
                                        <div class="row">
                                            <div class="container">

                                                <div class="col-md-3">
                                                    <div class="mega-title">
                                                        <h5 class="btn-mega">CORPORATE TRAINING</h5>
                                                    </div>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="{{route('corporate.mission-billions')}}">Mission to Billions</a></li>
                                                        <li><a href="{{route('corporate.magic-males-female')}}">The Magic of males and females</a></li>
                                                        <li><a href="{{route('corporate.eagle-enterprize')}}">Eagle enterprise intensive</a></li>
                                                        <li><a href="{{route('corporate.awaken-warrior')}}">awaken Warrior inside You</a></li>
                                                        <li><a href="{{route('corporate.artwork')}}">Artwork Of Parenting</a></li>
                                                        <li><a href="{{route('corporate.life-education')}}">peak performance life education</a></li>
                                                        <li><a href="{{route('corporate.college-to-corporate')}}">college to corporate</a></li>
                                                        <li><a href="{{route('corporate.women-excellence')}}">women Excellence</a></li>
                                                        <li><a href="{{route('corporate.superior-law')}}">superior law of appeal Traines education</a></li>
                                                    </ul>
                                                </div><!-- /.col-md-4 -->

                                                <div class="col-md-3">
                                                    <div class="mega-title">
                                                        <h5 class="btn-mega">OUR MAIN TRAINING</h5>
                                                    </div>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="{{route('corporate.regulation-of-attraction')}}">regulation of attraction</a></li>
                                                        <li><a href="{{route('corporate.adults')}}">exquisite children and brilliant
                                                            <br>young adults</a></li>
                                                        <li><a href="{{route('corporate.nlp')}}">NLP international</a></li>
                                                        <li><a href="{{route('corporate.college-program')}}">college development Programme(CDP)</a></li>
                                                        <li><a href="{{route('corporate.teach-instructor')}}">teach the instructor</a></li>
                                                        <li><a href="{{route('corporate.lifestyle')}}">smooth abilties and lifestyles skills</a></li>

                                                    </ul>
                                                </div><!-- /.col-md-4 -->

                                                <div class="col-md-3">
                                                    <div class="mega-title">
                                                        <h5 class="btn-mega">EVENTS</h5>
                                                    </div>
                                                    <div class="mega-menu-sub list-about ">
                                                        <article class="latest-post">
                                                            <div class="entry-wrapper clearfix">
                                                                <div class="entry-cover">
                                                                    <a href="{{route('onlineclass-course1')}}"><img src="{{asset('frontend/images/blog/c1.jpg')}}" alt="images" style="width:91px; height:64px;"></a>
                                                                </div>
                                                                <div class="entry-content-wrap">
                                                                    <div class="entry-header">
                                                                        <h2 class="entry-title">
                                                                            <a href="{{route('onlineclass-course1')}}">Plan and Prepare For Your Sales Call</a>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="entry-footer">
                                                                        <div class="entry-meta">
                                                                            <span class="entry-author"><a href="#">21 Dec 2023</a></span>
                                                                            <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>

                                                        <article class="latest-post">
                                                            <div class="entry-wrapper clearfix">
                                                                <div class="entry-cover">
                                                                    <a href="{{route('onlineclass-course1')}}"><img src="{{asset('frontend/images/blog/c2.jpg')}}" alt="images" style="width:91px; height:64px;"></a>
                                                                </div>
                                                                <div class="entry-content-wrap">
                                                                    <div class="entry-header">
                                                                        <h2 class="entry-title">
                                                                            <a href="{{route('onlineclass-course1')}}">6 Tips to Retain Your Top Sales Talent</a>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="entry-footer">
                                                                        <div class="entry-meta">
                                                                            <span class="entry-author"><a href="#">21 Dec 2023</a></span>
                                                                            <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </article>


                                                    </div><!--/.list-about -->
                                                </div><!-- /.col-md-4 -->

                                                <div class="col-md-3">
                                                    <div class="mega-title">
                                                        <h5 class="btn-mega">INTEGRATED CAMPUS PROGRAM</h5>
                                                    </div>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="">User Training Research Placement </a></li>
                                                        <li><a href="">Software Developer</a></li>
                                                        <li><a href="">NLT program</a></li>
                                                        <li><a href="">Proffesional Campus Training</a></li>
                                                        <li><a href="">psychology</a></li>
                                                        <li><a href="">Events</a></li>

                                                    </ul>
                                                </div><!-- /.col-md-4 -->
                                            </div><!-- /.container -->
                                        </div><!-- /.row -->
                                    </div><!-- /.submenu -->
                                </li><!-- /.flat-mega-menu -->

                                <!--<li><a href="{{route('contact')}}">Contact </a>
                                <ul class="submenu">
                                    <li><a href="{{route('contact')}}">Career </a></li>
                                    <li><a href="">Placement</a></li>
                                </ul>
                                </li>-->
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-4">
                    <div class="top-search">
                        <div class="widget widget_search">
                            <form class="search-form" action="{{route('search')}}" method="GET">
                                <input type="search" name="search" class="search-field" placeholder="Search …">
                                <input type="submit" class="search-submit">
                            </form>
                        </div>
                    </div>



                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-inner -->
</header><!-- /.header -->
