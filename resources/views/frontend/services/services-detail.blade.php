@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Sales Effectiveness Solutions</title>
@endsection
@section('body')
<!--Sales Effectiveness Solutions body content start--->
        <!-- Page title -->
        <div class="page-title style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <div class="breadcrumbs">
                                <ul class="trail-items">
                                    <li>You are here:</li>
                                    <li class="trail-item"><a href="index.php">Home</a></li>
                                    <li class="trail-item"><a href="services.php">What we do</a></li>
                                    <li class="trail-end">Sales Effectiveness Solutions</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <div class="flat-row flat-general sidebar-left">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a class="active" href="{{route('sales-effectiveness-solutions')}}">Sales Effectiveness Solutions</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('sales-training')}}">A Focus on Customized Sales Training</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('learning-approach')}}">Continuous Learning Approach</a>
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

                        <div class="general services-detail">
                            <div class="services-single-img clearfix">
                                <div class="item-two-column">
                                    <div class="single-img">
                                        <a class="popup-gallery" href="{{asset('frontend/images/services/1.jpg')}}"><img src="{{asset('frontend/images/services/1.jpg')}}" alt="images"></a>
                                    </div>
                                </div>
                                <div class="item-two-column">
                                    <div class="single-img">
                                        <a class="popup-gallery" href="{{asset('frontend/images/services/2.jpg')}}"><img src="{{asset('frontend/images/services/2.jpg')}}" alt="images"></a>
                                    </div>
                                </div>
                            </div><!-- /.services-single-img -->

                            <div class="flat-divider d40px"></div>

                            <div class="general-text">
                                <h4 class="title">SALES EFFECTIVENESS TRAINING SOLUTIONS</h4>
                                <p><strong>Unitelearning helps your sales force become more effective by providing a continuous learning environment.</strong></p>
                                <p>Unitelearning&nbsp;is a global&nbsp;sales training&nbsp;company that offers sales effectiveness consulting and assessments. Our approach is highly collaborative, with a focus on enabling the right sales activity and effective customer dialogues.&nbsp;Through our&nbsp;<strong>Sales Effectiveness System</strong><strong>™</strong>,&nbsp;we help you improve sales results. We do this in three ways to create a continuous learning and performance development loop:</p>
                                <ul class="flat-list style1">
                                    <li>We <strong>diagnose and assess</strong> the talent and structure of your sales force</li>
                                    <li>We create customized solutions that leverages our building block sales training curriculum</li>
                                    <li>We <strong>reinforce learning</strong> to drive behavior change through coaching and digital learning sustainment tools</li>
                                </ul>
                                <div class="flat-divider d20px"></div>
                                <p><strong>Flexible Approach&nbsp;</strong></p>
                                <p>Our sales effectiveness training provides a versatile approach with each part, Define, Develop, Drive, being implemented separately or together for a complete solution. Given the breadth of our curriculum and tools, we can help you with one piece at a time, based on your biggest opportunity for sales lift and what needs attention first?</p>
                                <ul class="flat-list style1">
                                    <li>Lead generation?</li>
                                    <li>Consistent selling process?</li>
                                    <li>Opportunity management?</li>
                                    <li>On-boarding?</li>
                                    <li>Account development?</li>
                                    <li>General selling dialogue skills?</li>
                                    <li>Advanced insight creation and delivery?</li>
                                </ul>
                                <div class="flat-divider d20px"></div>
                                <p>Whatever it is, Unitelearning can help your sales force become more efficient and get the results you want.&nbsp;We bring all of this together by customizing your solution to the deepest levels in the industry for maximum relevance to your business.&nbsp;For more information,&nbsp;please contact&nbsp;us today, or&nbsp;<strong><a class="scheme2" href="#">click here</a></strong>&nbsp;to download the&nbsp;Sales Effectiveness System&nbsp;Curriculum map to see our full suite of services and curriculum.</p>
                            </div>
                        </div><!-- /.general -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
        @endsection
