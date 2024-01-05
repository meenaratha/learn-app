@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Digital Marketing Course</title>
@endsection
@section('body')
<!--Digital marketing body content start--->
        <!-- Page header --
        <div class="flat-wrapper"></div>
        <div class="flat-page-header parallax parallax1 " style="background-image: url('images/parallax/bg-parallax1.jpg');
                                                                 background-position: center center;
                                                                 max-width: 100%;
                                                                 height: auto;  ">
            <div class="container">
                <div class="row">

                        <div class="page-header-title">
                            <h2 class="title"></h2>
                        </div>
                    </div><!-- /.flat-wrapper --
                </div><!-- /.row --
            </div><!-- /.container --
        </div><!-- /.page-header -->
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
                                    <li class="trail-item"><a href="{{route('digital-marketing')}}">Training Programs</a></li>
                                    <li class="trail-end">Digital Marketing </li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <div class="flat-row flat-general sidebar-right flex-row">
            <div class="container">
                <!---left container-->

                    <img class="digital-container" src="{{asset('frontend/images/unitelearning/unite digital marketing banner logo.png')}}" alt="">



<!---left container end-->
<!---right container start-->
                    <div class="general-sidebar">
                        <div class="sidebar-wrap">
                            <div class="sidebar txt-btn" >
                                <!--<div class="txt-btn1 button-51 pulse-button">
                                    <img src="images/unitelearning/classroom_program.png" class="" alt="">

                                </div>
                        <div class="txt-btn2 button-51 pulse-button">
                            <img src="images/unitelearning/online program_txt.png" class="" alt="">

                        </div>-->
                        <button>Class Room Program</button>

                                </div>
                                </div>
                                </div>

                                <!---left container end -->

                    </div>
                    </div>

        <div class="flat-row flat-general sidebar-right" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="general">
                            <img src="{{asset('frontend/images/training/d1.jpg')}}" alt="images">

                            <div class="flat-divider d40px"></div>

                            <div class="general-text">
                                <h4 class="title">Digital Marketing</h4>
                                <p><strong>A digital marketing  offers a range of services to help businesses enhance their online presence, connect with their target audience, and achieve their marketing goals. These services leverage various digital channels and strategies to drive brand awareness, increase website traffic, and improve overall online performance. Key services provided by digital marketing agencies include:</strong></p>
                                <ul class="flat-list style1 style2">
                                    <li>Search Engine Optimization (SEO): Optimizing websites to rank higher in search engine results, improving visibility and organic traffic.</li>
                                    <li>Pay-Per-Click Advertising (PPC): Managing paid advertising campaigns on platforms like Google Ads and social media to drive targeted traffic and conversions.</li>
                                    <li>Social Media Marketing (SMM): Creating and managing social media strategies to build brand presence, engage with the audience, and drive traffic.</li>
                                    <li>Content Marketing: Developing and distributing valuable, relevant content to attract and retain a target audience, positioning the brand as an authority in the industry.</li>
                                    <li>Email Marketing: Designing and executing email campaigns to nurture leads, promote products/services, and maintain communication with the audience.</li>
                                </ul>

                                <div class="flat-divider d30px"></div>

                                <p><strong></strong></p>

                                <p></p>
                            </div>

                            <div class="flat-divider d35px"></div>

                            <div class="flat-tabs">
                                <ul class="menu-tabs">
                                    <li class="active"><a href="#">Analytics and Data Analysis</a></li>
                                   <!-- <li><a href="#">Mobile Marketing</a></li>-->
                                    <li><a href="#">Audience</a></li>
                                    <li><a href="#">Delivery Options</a></li>
                                </ul>
                                <div class="content-tab">
                                    <div class="content-inner">
                                        <ul class="flat-list style1">
                                            <li>Utilizing tools to track and analyze data, providing insights into campaign performance and user behavior for informed decision-making.</li>
                                            <li>Drive revenue and business performance by helping increase close ratios for new clients and expand business for existing clients</li>
                                        </ul>
                                    </div><!-- /.content-inner -->

                                   <!-- <div class="content-inner">
                                        <ul class="flat-list style1">
                                            <li> Optimizing digital marketing strategies for mobile users, considering the growing use of smartphones and tablets.</li>
                                            <li>Develop skills in building rapport during sales that encourages clients to more openly and honestly share information about their needs, competitors, pricing, decision criteria, and other information critical to winning business.</li>
                                            <li>Provide a questioning strategy to more effectively uncover client needs and enable product positioning that is strategic and client-focused</li>
                                            <li>Apply a four-step Model to resolve any objection</li>
                                            <li>More confidently ask for the business</li>
                                        </ul>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Similar to all of Unitelearing’s sales training programs, content for consultative selling training is highly customized to any level, from new to experienced salespeople, their managers, and executive management</p>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Available through 1-2 day classroom delivery (Unitelearing-led or train-the-trainer), online eLearning, one-on-one coaching, or webinar; wide variety of relevant books and support materials to embed and sustain learning are also available.</p>
                                    </div><!-- /.content-inner -->
                                </div><!-- /.content-tab -->
                            </div><!-- /.flat-tabs -->
                        </div><!-- /.general -->

                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a class="active" href="{{route('digital-marketing')}}">Digital Marketing</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program1')}}">High Performance Selling</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program2')}}">Sales Coaching Training</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program3')}}">Sales Negotiation Training</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program4')}}">Selling With Insights</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program5')}}">Trusted Advisor Training</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->

                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <h4 class="widget_title">Complimentary Download</h4>
                                            <p>Thank you for your interest in Unitelearing's Selling training solutions. To download this brochure, please complete the form on the right.If you are having any issues completing the form, please email Linethemes at the following and we can send you the files - contact <a href="#" class="scheme2">info@unitelearning.com </a></p>
                                            <form class="widget-form">
                                                <p>
                                                    <input type="text" name="EMAIL" placeholder="Your email address">
                                                </p>
                                                <p>
                                                    <input type="submit" value="Download">
                                                </p>
                                            </form>
                                        </div>
                                    </div><!-- /.widget_text -->
                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebar-wrap -->
                        </div><!-- /.general-sidebar -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

       @endsection
