@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Training Program 2</title>
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
                                    <li class="trail-item"><a href="{{route('training-program1')}}">Training Programs</a></li>
                                    <li class="trail-end">High Performance Selling</li>
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
                            <img src="{{asset('frontend/images/training/d2.jpg')}}" alt="images">

                            <div class="flat-divider d40px"></div>

                            <div class="general-text">
                                <h4 class="title">High Performance Selling drives results through sales process, deal strategy, and dialogue skills</h4>
                                <p><strong>Critical Issues Facing Sales:</strong></p>
                                <ul class="flat-list style1 style2">
                                    <li>Better alignment with your customers’ new buying patterns</li>
                                    <li>Increased consistency in process and skills to identify “winnable” opportunities</li>
                                    <li>Improved visibility into the pipeline and accuracy of the forecast</li>
                                    <li>Strengthened dialogue skills  that uncover the client’s challenging issues</li>
                                    <li>Expand existing relationships by reaching new decision makers</li>
                                </ul>

                                <div class="flat-divider d30px"></div>

                                <p><strong>Unitelearingn’s High Performance Selling&nbsp;drives behavior change and accelerates business results&nbsp;</strong></p>

                                <p>Unitelearing’s High Performance SellingTM (“HPS”) combines a best-in-class selling methodology with proven and powerful sales training to help businesses transform the way their sales force sells. HPS is based on three organizing principles:</p>

                                <ul class="flat-list style1">
                                    <li>Salespeople must combine sales process, deal strategy, and excellent dialogue skills to be successful.</li>
                                    <li>Salespeople need tools embedded in their work stream to support the adoption of sales process and strategy.</li>
                                    <li>Effective sales processes are defined by leading indicators, or verifiable outcomes, at each stage that correspond to customer buying behavior, not to sales rep behavior.</li>
                                </ul>

                                <div class="flat-divider d20px"></div>

                                <p>The High Performance SellingTM solution addresses the tougher and more competitive selling environment created by customers demanding more value, speed and control of the process. The HPS solution consists of five key components, each of which can be implemented separately or as a comprehensive, holistic performance improvement solution. They are:</p>

                                <ul class="flat-list style1">
                                    <li>Sales Process Consulting (which includes identification of verifiable outcomes)</li>
                                    <li>High Performance SellingTM Skills Diagnostic</li>
                                    <li>Highly Interactive, Customized Training</li>
                                    <li>CRM-embedded Tools</li>
                                    <li>Coaching to Sales Process, Deal Strategy, and Quality Customer Dialogues</li>
                                </ul>

                                <div class="flat-divider d20px"></div>

                                <p>The High Performance SellingTM solution is a powerful combination of sales methodology, training, and sustainment to accelerate behavior change leading to more consistent and higher levels of performance. It enables business-to-business sellers to identify more opportunities in their existing accounts and with prospects and provides the tactics and strategy to pursue and win competitive deals.</p>
                            </div>

                            <div class="flat-divider d35px"></div>

                            <div class="flat-tabs">
                                <ul class="menu-tabs">
                                    <li class="active"><a href="#">Objectives</a></li>
                                    <li><a href="#">Delivery Options</a></li>
                                    <li><a href="#">Tools available</a></li>
                                </ul>
                                <div class="content-tab">
                                    <div class="content-inner">
                                        <p>Upon completion of the course, participants will be able to increase their sales performance by:</p>
                                        <ul class="flat-list style1">
                                            <li>Applying a client-focused approach to develop and expand client relationships, leverage internal resources, and increase your sales results</li>
                                            <li>Applying a consistent and repeatable sales process based on winning practices to increase selling efficiency and improve opportunity forecasting</li>
                                            <li>Learning a method for evaluating the appropriate stage for each opportunity in the sales process</li>
                                            <li>Identifying the appropriate points in the sales process for strategic decision making</li>
                                            <li>Further developing dialogue skills in order to uncover the client’s challenging issues and communicate the positive business impact your company’s solutions will have on these issues</li>
                                            <li>Defining what different stakeholders value and to tailor how you communicate your company’s value accordingly</li>
                                            <li>Expanding existing relationships by reaching new decision makers</li>
                                            <li>Utilizing tools that enhance the selling process, strategic decision making, and client dialogues</li>
                                            <li>Developing feedback and self-coaching skills in order to ensure ongoing development</li>
                                        </ul>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Blended, stand-alone classroom, eLearning, webinar, Train-the-Trainer</p>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Exercises, Role Plays, Planners, podcasts, video casts, books</p>
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
                                                <a class="active" href="{{route('training-program1')}}">High Performance Selling</a>
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
                                            <p>Thank you for your interest in Unitelearing's Selling training solutions. To download this brochure, please complete the form on the right.If you are having any issues completing the form, please email Linethemes at the following and we can send you the files - contact <a href="#" class="scheme2">info@unitelearning.com</a></p>
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
