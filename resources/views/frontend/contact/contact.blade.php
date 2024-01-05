@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Contact Us</title>
@endsection
@section('body')
<!--home body content start--->

        <div class="flat-row pad-bottom30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-contact-us style1">
                            <h2 class="title no-margin-top">INCREASE YOUR SALES NOW!</h2>
                            <h4 class="desc no-margin-top">CONTACT A COSINE GROUP EXPERT TODAY AT <a class="scheme2" href="18002323485">1 800 232 3485</a></h4>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row parallax parallax3">
            <div class="overlay bg-f1f2f8"></div>
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-iconbox clearfix">
                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <h5 class="box-title">Let's have a chat!</h5>
                                    </div>
                                    <div class="box-content">
                                        <p>Try our self service options. Available 24/7</p>
                                        <p>
                                            <strong>Online Sales:</strong>+91 9667660773<br>
                                            <strong>Complaints:</strong>+91 9667660773<br>
                                            <a class="scheme2" href="#">info@unitelearning.com</a>
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->

                            <!--<div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <h5 class="box-title">Working hours</h5>
                                    </div>
                                    <div class="box-content">
                                        <p>Find out opening hours and information.</p>
                                        <p>
                                            <strong>Mon-Fri:</strong> 8:00am – 19:00pm<br>
                                            <strong>Saturday:</strong> 8:00am – 13:00pm<br>
                                            <strong>Sunday:</strong> Closed
                                        </p>
                                    </div>
                                </div>
                            </div>---><!-- /.item-three-column -->

                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <h5 class="box-title">Company location</h5>
                                    </div>
                                    <div class="box-content">
                                        <p>Headquarters (USA)</p>
                                        <p>
                                            <strong>Street:</strong> 1553, 447, BROADWAY, 2ND FLOOR.<br>
                                            <strong>City:</strong> NEW YORK, NY.<br>
                                            <strong>Country:</strong> USA - 10013.
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->



                            <div class="item-three-column">
                                <div class="iconbox">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <h5 class="box-title">Company location</h5>
                                    </div>
                                    <div class="box-content">
                                        <p>Branch (India)</p>
                                        <p>
                                            <strong>Street:</strong> Shesh ACASA Plot No. 63.<br>
                                            <strong>City:</strong> Beverly Hills of kakatiya Hills.<br>
                                            <strong>Country:</strong> Madhapur, Hydrabad - 500033.
                                        </p>
                                    </div>
                                </div><!-- /.iconbox -->
                            </div><!-- /.item-three-column -->
                        </div><!-- /.flat-iconbox -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row pad-bottom20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="flat-contact-us style1">
                            <h4 class="desc no-margin-top no-margin-bottom">Contact us by email</h4>
                            <p>Complete the contact form below and one of our dedicated Business Consultants will be in touch shortly.</p>
                        </div>
                        <div class="flat-divider d20px"></div>
                        <div class="social-links">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>

                        <div class="flat-divider d20px"></div>
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-8">
                        <form id="contactform" method="post" action="{{route('/')}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <span><input name="name" type="text" value="" placeholder="Name" required="required"></span>
                                    <span><input id="email" name="email" type="email" value="" placeholder="Email" required="required"></span>
                                    <span><input id="phone" name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                    <span><input id="subject" name="subject" type="text" value="" placeholder="Subject" required="required"></span>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <span><textarea name="message" placeholder="Comment" required="required"></textarea></span>
                                    <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Sent Mail">
                                    </span>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <!--<div id="flat-map"></div>-->

        <div id="flat" style="position: relative; overflow: hidden;">
         <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3806.2649756261003!2d78.39908217516631!3d17.44702718345033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDI2JzQ5LjMiTiA3OMKwMjQnMDYuMCJF!5e0!3m2!1sen!2sin!4v1702232526080!5m2!1sen!2sin"
         width="900" height="600" style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- /#flat-map -->

        <!-- Footer -->
        @endsection
