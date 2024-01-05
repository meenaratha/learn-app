@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Online Training Course 4</title>
@endsection
@section('body')
<!--Online Training Course 4 body content start--->

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
                                    <li class="trail-item"><a href="#">Projects</a></li>
                                    <li class="trail-end">Management Protects and Grows Accounts</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <!-- Portfolio single -->
        <div class="flat-row flat-portfolio-single pad-bottom0px">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <a class="popup-gallery" href="{{asset('frontend/images/portfolio/ps1.jpg')}}"><img src="{{asset('frontend/images/portfolio/ps1.jpg')}}" alt="images"></a>
                                        </li>
                                        <li>
                                            <a class="popup-gallery" href="{{asset('frontend/images/portfolio/ps2.jpg')}}"><img src="{{asset('frontend/images/portfolio/ps2.jpg')}}" alt="images"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.portfolio-slider -->

                            <div class="portfolio-content-single">
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="main-text">
                                            <h5 class="main-text-title">CHALLENGE</h5>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-6">
                                        <div class="main-text">
                                            <p class="main-text-content">Toyota Fleet Management (TFM) aspires to transition from being a Trusted Fleet Manager to a Trusted Fleet Advisor to their customers. To achieve this, TFM identified some gaps in the knowledge and skill-sets of their Relationship Managers (RMs) that would need to be addressed. At the same time, they were concerned about recent sales trends and felt there was more that their RMs could be doing to retain and grow their customer base.</p>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="main-text">
                                            <h5 class="main-text-title">SOLUTION</h5>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-6">
                                        <div class="main-text">
                                            <p>Toyota Fleet Management engaged Unitelearning to help their RMs become more customer-centric, strategic, and better prepared for identifying opportunities and having high-value conversations with their customers. Unitelearning:</p>
                                            <ul class="flat-list">
                                                <li>Delivered a customized Key Account Management program to develop account management and sales skills</li>
                                                <li>Trained sales managers in Sales Coaching to support the RMs and implement the use of account planning tools</li>
                                                <li>Rolled out a Key Account Planner in the training program, allowing RMs to work on account plans directly in the program so training would transfer immediately on-the-job</li>
                                                <li>Reinforced in-person training with sales performance coaching of the sales managers to ensure accountability and support during the embedding phase of the method</li>
                                            </ul>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="main-text">
                                            <h5 class="main-text-title">RESULTS</h5>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-6">
                                        <div class="main-text">
                                            <p>Toyota found Unitelearning’s training to be well researched and insightful. Relationship Managers were given the processes and tools to find and seize opportunities to grow their customers. Using the account plan developed during the training program, within 2 weeks of completion one RM had already grown a single account by 400 vehicles under fleet management, which protects and grows the account considerably.</p>
                                            <p class="main-text-content">The Sales Coaching training is enabling sales managers to get the best out of their teams. They are regularly holding coaching and accountability sessions and they’ve seen a boost in activity following the training—both from coaches, in putting the processes in place, and from the sales team, in preparing and executing their account plans.</p>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="main-text">
                                            <h5 class="main-text-title">HIGHLIGHTS</h5>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-6">
                                        <div class="main-text">
                                            <p>
                                                <strong>Client</strong>: Toyota Fleet Management<br>
                                                <strong>Industry</strong>: Business Services<br>
                                                <strong>Services</strong>: Key Account Management, Sales Coach Training, Insight Selling
                                            </p>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.portfolio-content-single -->
                        </div><!-- /.portfolio-single -->

                        <div class="navigation post-navigation">
                            <ul class="nav-links">
                                <li class="previous-post">
                                    <a href="#" rel="prev"><span class="meta-nav">Previous Post</span> Grows Strategic Accounts by 110% Year-Over-Year</a>
                                </li>
                                <li class="next-post">
                                    <a href="#" rel="next"><span class="meta-nav">Next Post</span> Consulting Firm Grows Client Roster by 29%</a>
                                </li>
                            </ul>
                        </div><!-- /.navigation .post-navigation -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-portfolio-single -->

        <!-- Footer -->
       @endsection
