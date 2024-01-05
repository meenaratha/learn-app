@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Training Program 3</title>
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
                                    <li class="trail-item"><a href="{{route('training-program2')}}">Training Programs</a></li>
                                    <li class="trail-end">Sales Coaching Training</li>
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
                            <img src="{{asset('frontend/images/training/d3.jpg')}}" alt="images">

                            <div class="flat-divider d40px"></div>

                            <div class="general-text">
                                <h4 class="title">Sales Coaching Training transforms the traditional role of a sales manager</h4>
                                <p><strong>Critical Issues Facing Managers in Sales Coaching:</strong></p>
                                <ul class="flat-list style1 style2">
                                    <li>Building an organization-wide coaching culture that drives business performance</li>
                                    <li>Increasing potential to meet measurable business goals and change behavior based on creating a discipline of “everyday coaching”</li>
                                    <li>Increasing sales and meet business objectives by building the single most competitive skill an organization can possess</li>
                                </ul>

                                <div class="flat-divider d30px"></div>

                                <p><strong>Cosine’s sales coaching training solutions quickly deliver the processes and skills managers can implement to help their salespeople reach a higher level of performance.</strong></p>

                                <p>Cosine’s Developmental Sales Coaching Program transforms the traditional role of a sales manager from being a boss to being a coach.&nbsp; Using a four-part framework, sales managers learn to provide more than a typical evaluative performance review that gives feedback a few times a year, and instead offer developmental feedback every day that is directly&nbsp;linked to achieving business objectives.&nbsp; Using highly customized scenarios, sales managers practice the critical skill at the heart of Developmental Sales Coaching —“let them talk first” — in other words, instead of “telling” a salesperson what to do, a developmental coach uses a strategic process and questioning skills to help salespeople uncover obstacles and create their own solutions.</p>

                                <p>The result for the sales team is a smarter, more skilled group who self coach and more independently meet business goals so that sales managers have more time to devote to other critical priorities.&nbsp; Concurrently, the result for the organization is a culture that seeks and values feedback as an integral part of everyday business.</p>
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
                                            <li>Learn a Developmental Sales Coaching Framework to effectively open a coaching dialogue, probe for perceptions and needs, uncover obstacles, create a solution, and close</li>
                                            <li>Create a culture that welcomes and thrives on feedback</li>
                                            <li>Reposition the value of sales managers – from administrative task masters to valued resources who “develop” vs. “tell” and foster powerful, incremental behavioral change</li>
                                        </ul>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Our Sales Coaching Solutions &amp; Programs are highly customized to any level, from new to experienced sales managers.</p>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>Available through one-half to 2 day classroom delivery (Cosine-led or train-the-trainer), online eLearning, one-on-one coaching, or webinar; wide variety of relevant books and support materials to embed and sustain learning are also available.</p>
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
                                                <a href="{{route('digital-marketing')}}">Digital Marketing</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program1')}}">High Performance Selling</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="active" href="{{route('training-program2')}}">Sales Coaching Training</a>
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
                                            <p>Thank you for your interest in Cosine's Selling training solutions. To download this brochure, please complete the form on the right.If you are having any issues completing the form, please email Linethemes at the following and we can send you the files - contact <a href="#" class="scheme2">info@unitelearning.com </a></p>
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
