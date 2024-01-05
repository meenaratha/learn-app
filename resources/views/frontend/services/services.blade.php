@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Our Services</title>
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
                                    <li class="trail-end">What we do</li>
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
                    <div class="flat-wrapper">
                        <div class="flat-services">
                            <div class="slotholder">
                                <div class="tp-bgimg">
                                    <h3 class="title">Unitelearning Redefines Sales Effectiveness</h3>
                                    <div class="gr-button">
                                        <a class="button" href="{{route('contact')}}">Contact us</a>
                                        <a class="button scheme2" href="{{route('class-room-course1')}}">Case Studies</a>
                                    </div>
                                </div>
                            </div><!-- /.slotholder -->

                            <div class="flat-divider d50px"></div>

                            <div class="services-title">
                                <h2 class="title color-themes1 no-margin-top">WE ENSURE SUSTAINED BEHAVIOR CHANGE AND DRIVE INCREASED SALES PERFORMANCE</h2>
                            </div>

                            <div class="flat-divider d50px"></div>

                            <div class="services-content clearfix">
                                <div class="item-two-column">
                                    <p>Technology and tools can keep the process on track, but even the coolest app is no match for the ability to hold a dialogue and clearly articulate value, eye to eye. The problem is most salespeople don’t have the skills or confidence to initiate compelling conversations with customers. This is where Unitelearning can help.</p>
                                    <p>Unitelearning is a global sales training and sales force effectiveness company. We have over 30 years of experience creating customized sales training solutions that build organizational capability and improves the individual skills necessary to grow profitable sales.</p>
                                </div>

                                <div class="item-two-column">
                                    <p>Unitelearning’s approach is highly collaborative, with a focus on enabling the right sales activity and effective customer dialogues at every stage of your selling cycle. To help you achieve your goals, we partner with you to develop a &nbsp;<strong>culture of continuous learning</strong>&nbsp;that drives sustained improved performance.</p>
                                    <p>We equip your sales organization with the effective dialogues&nbsp;skills through our time-proven Sales Effectiveness System that combines assessment, customized sales, training and integrated performance support tools to sustain and reinforce learning.</p>
                                </div>
                            </div><!-- /.services-content -->

                            <div class="flat-divider d50px"></div>


                        </div><!-- /.flat-services -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row parallax parallax3 pad-top60px pad-bottom60px">
            <div class="overlay bg-f1f2f8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="title-section style5">
                            <h4 class="title no-margin-top">WE PROVIDE AN EMPHASIS ON SKILLS TO EXECUTE IN THE SALES PROCESS AND TOOLS THAT ENABLE YOUR SALES PEOPLE TO SUCCEED.</h4>
                            <p>Click on a link below to learn more about how we can help improve your sales team performance or download our sales effectiveness curriculum guide to learn more about our Sales Effectiveness System</p>
                        </div>
                        <div class="flat-divider d40px"></div>
                    </div><!-- /.col-md-8 -->

                    <div class="flat-wrapper">
                        <div class="flat-imagebox clearfix">
                            <div class="item-three-column">
                                <div class="imagebox">
                                    <div class="box-wrapper">
                                        <div class="box-image">
                                            <img src="{{asset('frontend/images/imagebox/1.jpg')}}" alt="images">
                                        </div>
                                        <div class="box-header">
                                            <h5 class="box-title">
                                                <a href="{{route('sales-effectiveness-solutions')}}">Sales Effectiveness Solutions</a>
                                            </h5>
                                        </div>
                                        <div class="box-content">
                                            <div class="box-desc">Sales Effectiveness Solutions by Unitelearning deliver proven content, deep customization, and expert perspective to help you meet your exact development needs.</div>
                                            <a class="button style1" href="{{route('sales-effectiveness-solutions')}}">Learn more</a>
                                        </div>
                                    </div>
                                </div><!-- /.imagebox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="imagebox">
                                    <div class="box-wrapper">
                                        <div class="box-image">
                                            <img src="{{asset('frontend/images/imagebox/2.jpg')}}" alt="images">
                                        </div>
                                        <div class="box-header">
                                            <h5 class="box-title">
                                                <a href="{{route('sales-training')}}">A Focus on Customized Sales Training</a>
                                            </h5>
                                        </div>
                                        <div class="box-content">
                                            <div class="box-desc">Unitelearning’s customized solutions helps leaders prepare their organizations to execute sales strategies and achieve business objectives.</div>
                                            <a class="button style1" href="{{route('sales-training')}}">Learn more</a>
                                        </div>
                                    </div>
                                </div><!-- /.imagebox -->
                            </div><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="imagebox">
                                    <div class="box-wrapper">
                                        <div class="box-image">
                                            <img src="{{asset('frontend/images/imagebox/3.jpg')}}" alt="images">
                                        </div>
                                        <div class="box-header">
                                            <h5 class="box-title">
                                                <a href="{{route('learning-approach')}}">Continuous Learning Approach</a>
                                            </h5>
                                        </div>
                                        <div class="box-content">
                                            <div class="box-desc">At Unitelearning, we seek to partner with you to develop continuous learning solutions that help change behaviors, enhance the effectiveness of your sales organization.</div>
                                            <a class="button style1" href="{{route('learning-approach')}}">Learn more</a>
                                        </div>
                                    </div>
                                </div><!-- /.imagebox -->
                            </div><!-- /.item-three-column -->
                        </div><!-- /.flat-imagebox -->
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
