@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Frequently Asking Questions</title>
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
                                    <li class="trail-item"><a href="{{route('about')}}">Who we are</a></li>
                                    <li class="trail-end">Frequently Asked Questions</li>
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
                        <div class="general flat-faq">
                            <div class="general-text">
                                <h4 class="title">SALES TRAINING FAQS.</h4>
                                <p>Unitelearning has helped over 2.5 million salespeople from around the world achieve outstanding results. Here are the FAQs we are often asked by people considering joining Club Unitelearning.</p>
                            </div><!-- /.clients-text -->

                            <div class="flat-accordion style1">
                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">What type of course do I need?</h6>
                                    <div class="toggle-content">
                                        <p>Some people will know exactly what course they need, perhaps based on their job title. For example, sales training, human resources, and leadership courses will be appropriate for people involved in these roles. Other people may not have a specific need and will prefer to mis a few subjects together. Have a look through our courses, and see which you feel most meets your needs and then ring us on 1 800 232 3485 or email us, and we will be happy to discuss your requirements with you.</p>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">How do I book a course?</h6>
                                    <div class="toggle-content">
                                        <p>Once you have found the type of course you want, simply ring us on 1 800 232 3485 or email us and we will discuss your exact requirements with you.</p>
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">What skills and experience do your trainers have?</h6>
                                    <div class="toggle-content">
                                        <p>Our trainers have a wealth of experience and skills, gained from working for large international companies, in sales, management and HR / training roles, also in training staff from multinational companies. View our trainers’ profiles on the The Team page. If you want a trainer with specific experience, why not simply ring us on 1 800 232 3485 or email us.</p>
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">How can you design a course when you don't know our company?</h6>
                                    <div class="toggle-content">
                                        <p>Each company is different, and has different needs. A “one size fits all” training programme is not our style. We will meet with you to get to know your company, what you do, how you operate and to discuss your training requirements, so that we understand exactly what you need. We will then design a bespoke course specifically for your company, to ensure the training meet your companies requirements.</p>
                                        <p>Why not ring us on 1 800 232 3485 or email us today for more information.</p>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">What happens after the course?</h6>
                                    <div class="toggle-content">
                                        <p>As a minimum, we always provide feedback and post course evaluation so that you know we’ve helped your staff to improve so they can do their jobs better. We can also provide further evaluation in the form of on the job observation and coaching.</p>
                                        <p>As standard for all or our training courses, we offer a free post course email coaching service, to all delegates. We also work with you to identify future training needs.</p>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">The sort of course I want isn't listed, can you still offer me the training I want?</h6>
                                    <div class="toggle-content">
                                        <p>We fully understand that each company is different, and so has different training requirements. We can design bespoke training courses to meet your exact requirements. If you want training on a subject not listed, simply ring us on 1 800 232 3485 or email us with your requirements and we will be able to create a course to meet you needs.</p>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">I know I want training but don't know what skills I need, can you advise me?</h6>
                                    <div class="toggle-content">
                                        <p>Perhaps your colleagues or manager can help you to decide which areas of your skill set could benefit from training. If you have recently changed jobs, or been promoted, you may be expected to have or learn new skills. Whilst some of our courses are self-explanatory and suitable for specific jobs, other courses are suitable for many job roles in many industries. Just because you are a manager or a sales person, it doesn’t mean that you couldn’t benefit from financial, administrative or telephone skills. Ring us on 1 800 232 3485 or email us and let us help you decide the training that would be most beneficial to you.</p>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <h6 class="toggle-title active">Who else has used Unitelearning Sales Training?</h6>
                                    <div class="toggle-content">
                                        <p>We are proud of our reputation for providing bespoke training courses, and have worked with some of leading companies all over the world. Have a look at our Clients list and see who we’ve helped in your industry. References are also available on request.</p>
                                    </div>
                                </div><!-- /toggle -->
                            </div><!-- /.flat-accordion -->
                        </div><!-- /.flat-clients -->

                        <div class="general-sidebar">
                            <div class="sidebar-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_nav_menu">
                                        <ul class="nav_menu">
                                            <li class="menu-item">
                                                <a href="{{route('about')}}">Overview</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('company-history')}}">Company history</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('leadership-team')}}">Leadership Team</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('partners')}}">Partners </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('our-clients')}}">Our Clients </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('testimonial')}}">Testimonials</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="active" href="{{route('faq')}}">FAQ</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('awards-recognition')}}">Awards &amp; Recognition</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_nav_menu -->
                                    @include('frontend.layout.download')
                                      <!-- /.widget_text -->
                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebar-wrap -->
                        </div><!-- /.general-sidebar -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
       @endsection
