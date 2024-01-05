@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Training Program 6</title>
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
                                    <li class="trail-end">Trusted Advisor Training</li>
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
                            <img src="{{asset('frontend/images/training/d6.jpg')}}" alt="images">

                            <div class="flat-divider d40px"></div>

                            <div class="general-text">
                                <h4 class="title">Unitelearning’s Trusted Advisor Training Program teaches the skills to develop a trusted, preferred</h4>

                                <p><strong>Critical Issues Facing Sales Professionals and Managers</strong></p>

                                <ul class="flat-list style1 style2">
                                    <li>Holding higher-level strategic dialogues with senior-level clients</li>
                                    <li>Bolstering client loyalty and retention</li>
                                    <li>Shortening sales cycles and competitive threats</li>
                                    <li>Decreasing fee pressure and increase margins and profitability</li>
                                    <li>Gaining higher, wider access to more effectively cross-sell and expand relationships</li>
                                </ul>

                                <div class="flat-divider d30px"></div>

                                <p><strong>Unitelearning’s Trusted Advisor Sales Training</strong></p>

                                <p>Unitelearning’s Trusted Advisor Training Program teaches a five-part Framework and skills to develop a trusted, preferred provider position with your key accounts. The Program helps participants to think in depth about the behaviors of a trusted advisor, self-assess where they are currently in the Client Relationship Pyramid, and analyze best practices of top-performing advisors.</p>

                                <p>Participants learn to have higher level dialogues with clients about their current and long-term objectives, challenges, strategies, and opportunities, and then strategically build recommendations and position value while demonstrating insight and technical substance.&nbsp; Participants practice these strategies in highly customized scenarios and develop a tailored action plan for a priority relationship.</p>
                            </div>

                            <div class="flat-divider d35px"></div>

                            <div class="flat-tabs">
                                <ul class="menu-tabs">
                                    <li class="active"><a href="#">Objectives</a></li>
                                    <li><a href="#">Audience</a></li>
                                    <li><a href="#">Delivery Options</a></li>
                                </ul>
                                <div class="content-tab">
                                    <div class="content-inner">
                                        <ul class="flat-list style1">
                                            <li>Use a common language, Framework, and process for building trusted relationships, ensuring you are “invited to the table” as a valued sounding board</li>
                                            <li>Build skills at having deeper, more strategic client dialogues to uncover needs</li>
                                            <li>More persuasively and proactively position yourself and your team as a continuous source of ideas</li>
                                            <li>Use a Relationship Planning tool and methodology for proactive, daily action planning that more effectively leverages time and team resources</li>
                                        </ul>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Program content is highly customized to more experienced salespeople, their managers, and senior executives</p>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Available through 1 day classroom delivery (Unitelearning-led or train-the-trainer), online eLearning, one-on-one coaching, or webinar; wide variety of relevant books and support materials to embed and sustain learning are also available.</p>
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
                                                <a href="{{route('digital-marketing')}}">Digital Marketing Training</a>
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
                                                <a class="active" href="{{route('training-program5')}}">Trusted Advisor Training</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->

                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <h4 class="widget_title">Complimentary Download</h4>
                                            <p>Thank you for your interest in Unitelearning's Selling training solutions. To download this brochure, please complete the form on the right.If you are having any issues completing the form, please email Linethemes at the following and we can send you the files - contact <a href="#" class="scheme2">info@unitelearning.com </a></p>
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

        <!-- Footer -->
       @endsection
