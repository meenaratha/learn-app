@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Training Program 7</title>
@endsection
@section('body')
<!--home body content start--->
        <!-- Page header -->
        <div class="bg-themes">
            <div class="flat-page-header parallax parallax5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="title">Training programs</h2>
                            </div>
                        </div><!-- /.flat-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.page-header -->
        </div>

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
                                    <li class="trail-end">Training Programs</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <div class="flat-row pad-bottom0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="title-training-programs no-margin-top">What are some of the biggest challenges facing sales organizations today?</h3>
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->

                <div class="flat-divider d40px"></div>

                <div class="row">
                    <div class="col-md-6">
                        <p>From our position as a global sales training firm, We has partnered with some of the world’s leading organizations to provide comprehensive total solutions and sales training programs for their sales team members to improve performance and reach revenue goals. As part of our detailed customization process, We interviews several top stakeholders within its client organization to understand needs, challenges, and areas for development.</p>
                        <p>Unitelearning’s proprietary methodology for acquiring and analyzing this information leads to valuable insight, trends and solutions and, as a result, Unitelearning is able to provide value-added solutions to our client partners. We present the following list below which represents some of the most pressing challenges that we have seen sales organizations face the last 12 months.</p>
                        <p>&nbsp;</p>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <img src="{{asset('frontend/images/training/1.jpg')}}" alt="images">
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-divider d60px"></div>

        <div class="flat-row parallax parallax3 pad-top70px pad-bottom70px">
            <div class="overlay bg-f1f2f8"></div>
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-iconbox clearfix">
                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-pie-chart"></i>
                                        </div>
                                        <h4 class="box-title">Digital Marketing Training</h4>
                                    </div>
                                    <div class="box-content">
                                        Consultative Selling Skills provides a powerful roadmap for a successful need-based dialogue.
                                        <p class="box-readmore">
                                            <a href="{{route('digital-marketing')}}">Learn more</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                        <h4 class="box-title">Sales Negotiation Training</h4>
                                    </div>
                                    <div class="box-content">
                                        Unitelearning’s Sales Negotiation Training helps develop the skills needed to negotiate win-win opportunities.
                                        <p class="box-readmore">
                                            <a href="{{route('training-program1')}}">Learn more</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-bar-chart-o"></i>
                                        </div>
                                        <h4 class="box-title">Sales Coaching Training</h4>
                                    </div>
                                    <div class="box-content">
                                        Sales Coaching Training<br>transforms the traditional role of a sales manager.
                                        <p class="box-readmore">
                                            <a href="{{route('training-program2')}}">Learn more</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <h4 class="box-title">High Performance Selling</h4>
                                    </div>
                                    <div class="box-content">
                                        High Performance Selling drives results through sales process, deal strategy, and dialogue skills training.
                                        <p class="box-readmore">
                                            <a href="{{route('training-program3')}}">Learn more</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-bank"></i>
                                        </div>
                                        <h4 class="box-title">Trusted Advisor Training</h4>
                                    </div>
                                    <div class="box-content">
                                        Unitelearning’s Trusted Advisor Training Program teaches the skills to develop a trusted, preferred provider.
                                        <p class="box-readmore">
                                            <a href="{{route('training-program4')}}">Learn more</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <h4 class="box-title">Selling With Insights</h4>
                                    </div>
                                    <div class="box-content">
                                        Provides sellers with advanced-level skills that allow them to know when and how to leverage insights in strategic dialogues with customers.
                                        <p class="box-readmore">
                                            <a href="{{route('training-program5')}}">Learn more</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->
                        </div><!-- /.flat-iconbox -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row pad-top70px pad-bottom70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="flat-contact-us">
                            <h2 class="title no-margin-top">INCREASE YOUR SALES NOW!</h2>
                            <h4 class="desc no-margin-top">CONTACT A Unitelearning GROUP EXPERT TODAY AT <a class="scheme2" href="18002323485">1 800 232 3485</a></h4>
                            <a class="button lg" href="{{route('contact')}}">Contact us now</a>
                        </div>
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <!-- Footer -->
        @endsection
