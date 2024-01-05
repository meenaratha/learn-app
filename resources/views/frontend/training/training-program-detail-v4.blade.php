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

                                <p><strong>Sell More Effectively by Selling with Insights&nbsp;</strong></p>

                                <p><strong>Unitelearning’s Selling with Insights®</strong> program provides sellers with advanced-level skills that allow them to know when and how to leverage insights in strategic dialogues with customers. In order to think like a business executive and connect their capabilities to the customer’s high-level business issues, sellers must identify potential blind spots in the customer’s thinking where they can provide insight, and create value for the buyer. This program develops their ability to become the point of differentiation and bring relevant insights and ideas to create value in the buying experience rather than just in the solution the seller delivers.</p>

                                <p><strong>Unitelearning’s&nbsp;Selling with Insights®&nbsp;</strong>is a<strong>&nbsp;</strong>two-day program that includes pre- and post-work, learning sessions, planners, coaching and a post-learning reinforcement tool, Unitelearning QuickCheck™. The <strong>Unitelearning Selling with Insights</strong>® program also incorporates Unitelearning’s proven methodology which helps reps systematically tailor and communicate compelling insights that provide value and helps differentiate your company from the competition.</p>

                                <p><strong>The Unitelearning Selling with Insights Program will help your sales team members to:</strong></p>

                                <ul class="flat-list style1">
                                    <li>Help clients validate, clarify, deepen, and reframe their thinking around how to address business issues (challenges and opportunities) in order to reach their goals and objectives</li>
                                    <li>Differentiate the seller by bringing personal value to the client’s buying experience</li>
                                    <li>Generate interest in the seller’s capabilities</li>
                                    <li>Influence decision criteria to align to the seller’s distinct competitive advantage</li>
                                </ul>

                                <div class="flat-divider d20px"></div>

                                <p>Interested in seeing other sales training programs offered by Unitelearning? Browse our list and see what other types of training may help your sales team achieve its goals.</p>
                            </div>
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
                                                <a class="active" href="{{route('training-program4')}}">Selling With Insights</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('training-program5')}}">Trusted Advisor Training</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->

                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <h4 class="widget_title">Complimentary Download</h4>
                                            <p>Thank you for your interest in php's Selling training solutions. To download this brochure, please complete the form on the right.If you are having any issues completing the form, please email Linethemes at the following and we can send you the files - contact <a href="#" class="scheme2">info@unitelearning.com</a></p>
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
