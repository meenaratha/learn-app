@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || home Page</title>
@endsection
@section('body')

<!--home body content start--->

<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
            <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="{{asset('frontend/images/slides/1.jpg')}}" data-thump="images/unitelearning/slide1-360x220.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="40" data-y="111" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Sales force<br>transformation
                </div>
                <div class="tp-caption sfr desc-slide center" data-x="40" data-y="272" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    It isn't just about selling better, it's about selling differently
                </div>
                <div class="tp-caption sfl flat-button-slider" data-x="40" data-y="323" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('/')}}">
                    Find your optimal sales process</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>

            <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="{{asset('frontend/images/slides/2.jpg')}}" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="40" data-y="111" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    finding the<br>right sales
                </div>
                <div class="tp-caption sfr desc-slide center" data-x="40" data-y="272" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    Get the most competencies in the fewest bodies
                </div>
                <div class="tp-caption sfl flat-button-slider bg-button-slider-15416e" data-x="40" data-y="323" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('about')}}">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                <div class="tp-caption sfr flat-button-slider" data-x="268" data-y="323" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('contact')}}">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

            </li>

            <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="{{asset('frontend/images/slides/3.jpg')}}" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="40" data-y="111" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Top 20 Sales<br>Training
                </div>
                <div class="tp-caption sfr desc-slide center" data-x="40" data-y="272" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    We serve every size and type company from startups to Fortune 50.
                </div>
                <div class="tp-caption sfl flat-button-slider" data-x="40" data-y="323" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('about')}}">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>
        </ul>
    </div>
</div>

<div class="flat-row pad-top40px pad-bottom40px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="no-margin-top no-margin-bottom f-size16px">We ensure sustained behavior change and drive increased sales performance. <a class="link" href="{{route('about')}}">Learn more</a></h3>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row pad-top0px">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-imagebox clearfix">
                    <div class="item-three-column">
                        <div class="imagebox">
                            <div class="box-wrapper">
                                <div class="box-image">
                                    <img src="{{asset('frontend/images/unitelearning/1.jpg')}}" alt="images">
                                </div>
                                <div class="box-header">
                                    <h5 class="box-title">
                                        <a href="services-detail.html">Sales Effectiveness Solutions</a>
                                    </h5>
                                </div>
                                <div class="box-content">
                                    <div class="box-desc">Sales Effectiveness Solutions by unitelearning deliver proven content, deep customization,
                                         and expert perspective to help you meet your exact development needs.</div>
                                    <a class="button style1" href="{{route('sales-effectiveness-solutions')}}">Learn more</a>
                                </div>
                            </div>
                        </div><!-- /.imagebox -->
                    </div><!-- /.item-three-column -->

                    <div class="item-three-column">
                        <div class="imagebox">
                            <div class="box-wrapper">
                                <div class="box-image">
                                    <img src="{{asset('frontend/images/unitelearning/2.jpg')}}" alt="images">
                                </div>
                                <div class="box-header">
                                    <h5 class="box-title">
                                        <a href="{{route('sales-training')}}">A Focus on Customized Sales Training</a>
                                    </h5>
                                </div>
                                <div class="box-content">
                                    <div class="box-desc">Unitelearning’s customized solutions helps leaders prepare
                                        their organizations to execute sales strategies and achieve business objectives.</div>
                                    <a class="button style1" href="{{route('learning-approach')}}">Learn more</a>
                                </div>
                            </div>
                        </div><!-- /.imagebox -->
                    </div><!-- /.item-three-column -->

                    <div class="item-three-column">
                        <div class="imagebox">
                            <div class="box-wrapper">
                                <div class="box-image">
                                    <img src="{{asset('frontend/images/unitelearning/3.jpg')}}" alt="images">
                                </div>
                                <div class="box-header">
                                    <h5 class="box-title">
                                        <a href="services-detail-v2.html">Continuous Learning Approach</a>
                                    </h5>
                                </div>
                                <div class="box-content">
                                    <div class="box-desc">At unitelearning, we seek to partner with you to develop
                                        continuous learning solutions that help change behaviors, enhance the
                                        effectiveness of your sales organization.</div>
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

<div class="flat-row background-f1f2f8 pad-bottom40px">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-title-button">
                    <h3 class="title"><i class="fa fa-line-chart"></i>Sales Training Programs</h3>
                    <p><a class="button sm" href="{{route('training-program1')}}">View all programs</a></p>
                </div>
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->

        <div class="flat-divider d30px"></div>

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
                            Digital Marketing Skills provides a powerful roadmap for a
                            successful need-based dialogue.
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
                                Unitelearning Sales Negotiation Training helps develop the
                                 skills needed to negotiate win-win opportunities.
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
                                High Performance Selling drives results through
                                sales process, deal strategy, and dialogue skills training.
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
                                Unitelearning Trusted Advisor Training Program
                                teaches the skills to develop a trusted, preferred provider.
                                <p class="box-readmore">
                                    <a href="{{route('training-program4')}}">Learn more</a>
                                </p>
                            </div>
                        </div><!-- /.iconbox -->
                    </div><!-- /.item-three-column -->

                    <div class="item-three-column">
                        <div class="quick-form">
                            <h4>Request a call back.</h4>
                            <p>Just submit your details and we’ll be in touch shortly.</p>
                            <p>
                            <form id="request-call-back" method="post" action="./contact/request-call-back-process.php">
                                <span><input id="phone" name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Sent Mail"></span>
                            </form>
                            </p>
                        </div><!-- /.iconbox -->
                    </div><!-- /.item-three-column -->
                </div><!-- /.flat-iconbox -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="bg-themes">
    <div class="flat-row parallax parallax5 pad165px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="home-title">SALES TRAINING. SALES COACHING. SELLING SKILLS.<br>
                    ACTION SELLING CONSISTENTLY IMPROVES SALES PRODUCTIVITY</h3>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->
</div>

<div class="flat-row flat-latest-news pad-bottom70px">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-title-button">
                    <h3 class="title"><i class="fa fa-newspaper-o"></i>Latest news</h3>
                    <p><a class="button sm" href="{{route('class-room-course1')}}">View all articles</a></p>
                </div>
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->

        <div class="flat-divider d30px"></div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <article class="blog-posts">
                            <div class="entry-wrapper">
                                <div class="entry-cover">
                                    <h4 class="entry-time">
                                        <span class="entry-day">13</span>
                                        <span class="entry-month">Apr</span>
                                    </h4>
                                    <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/1.jpg')}}"   alt="images"></a>
                                </div>
                                <div class="entry-content-wrap">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="{{route('class-room-course1')}}">What The Martian Can Teach Sales Professionals</a>
                                        </h2>
                                    </div>
                                    <div class="entry-footer">
                                        <div class="entry-meta">
                                            <span class="entry-author"><a href="#">Unitelearning</a></span>
                                            <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <article class="blog-posts">
                            <div class="entry-wrapper">
                                <div class="entry-cover">
                                    <h4 class="entry-time">
                                        <span class="entry-day">13</span>
                                        <span class="entry-month">Apr</span>
                                    </h4>
                                    <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/2.jpg')}}" alt="images"></a>
                                </div>
                                <div class="entry-content-wrap">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="{{route('class-room-course1')}}">HOW TO OVERCOME B2B PRICE OBJECTIONS</a>
                                        </h2>
                                    </div>
                                    <div class="entry-footer">
                                        <div class="entry-meta">
                                            <span class="entry-author"><a href="#">Unitelearning</a></span>
                                            <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /.col-md-6 -->
                </div>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4">
                <article class="latest-post">
                    <div class="entry-wrapper clearfix">
                        <div class="entry-cover">
                            <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/c1.jpg')}}" style="width: 91px; height: 63px;" alt="images"></a>
                        </div>
                        <div class="entry-content-wrap">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    <a href="{{route('class-room-course1')}}">Plan and Prepare For Your Sales Call</a>
                                </h2>
                            </div>
                            <div class="entry-footer">
                                <div class="entry-meta">
                                    <span class="entry-author"><a href="#">Unitelearning</a></span>
                                    <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="latest-post">
                    <div class="entry-wrapper clearfix">
                        <div class="entry-cover">
                            <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/c2.jpg')}}"  style="width: 91px; height: 63px;" alt="images"></a>
                        </div>
                        <div class="entry-content-wrap">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    <a href="{{route('class-room-course1')}}">6 Tips to Retain Your Top Sales Talent</a>
                                </h2>
                            </div>
                            <div class="entry-footer">
                                <div class="entry-meta">
                                    <span class="entry-author"><a href="#">Unitelearning</a></span>
                                    <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="latest-post">
                    <div class="entry-wrapper clearfix">
                        <div class="entry-cover">
                            <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/c3.jpg')}}" style="width: 91px; height: 63px;" alt="images"></a>
                        </div>
                        <div class="entry-content-wrap">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    <a href="{{route('class-room-course1')}}">Why Your Sales Forecast Is Off</a>
                                </h2>
                            </div>
                            <div class="entry-footer">
                                <div class="entry-meta">
                                    <span class="entry-author"><a href="#">Unitelearning</a></span>
                                    <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="latest-post">
                    <div class="entry-wrapper clearfix">
                        <div class="entry-cover">
                            <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/c4.jpg')}}"  style="width: 91px; height: 63px;"alt="images"></a>
                        </div>
                        <div class="entry-content-wrap">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    <a href="{{route('class-room-course1')}}">6 Tips to Increase Trade Show Sales</a>
                                </h2>
                            </div>
                            <div class="entry-footer">
                                <div class="entry-meta">
                                    <span class="entry-author"><a href="#">Unitelearning</a></span>
                                    <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row pad-bottom0px background-20242e">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title-section style1">
                    <h3 class="title"><span>Why choose Unitelearning?</span></h3>
                </div>

                <div class="list-about">
                    <h4>
                        <span>
                            <i class="fa fa-check border"></i>
                            Awarded Top Sales Training Company
                        </span>
                    </h4>
                    <p><span>since 1990, over 400,000 salespeople have been certified on the skills
                         of Unitelearning. These skills are proven to produce the greatest gains in
                         sales performance. Unitelearning has been recognized by industry leaders and
                         many business publications.</span></p>
                </div><!-- /.list-about -->

                <div class="list-about">
                    <h4>
                        <span>
                            <i class="fa fa-check border"></i>
                            Digital Marketing training solutions, delivered cost-effectively
                        </span>
                    </h4>
                    <p><span>In fact, we designed our programs and materials to be quickly
                        and economically adaptable for any audience, without sacrificing the
                        quality or integrity of the training solution.</span></p>
                </div><!-- /.list-about -->

                <div class="list-about">
                    <h4>
                        <span>
                            <i class="fa fa-check border"></i>
                            Smart planning and execution around change
                        </span>
                    </h4>
                    <p><span>We take a broader, more holistic view of all of the
                         factors that influence the desired changes, and help clients
                          develop and execute the strategies and processes needed to implement
                           these changes and ensure lasting results.</span></p>
                </div><!-- /.list-about -->
            </div><!-- /.col-md-6 -->

            <div class="col-md-6">
                <div class="title-section style1">
                    <h3 class="title"><span>Customer Success</span></h3>
                </div>

                <div class="flat-divider d30px"></div>

                <div class="flat-video-fancybox">
                    <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                        <img src="{{asset('frontend/images/v1.jpg')}}" alt="images">
                    </a>
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->

        <div class="flat-divider d50px"></div>

        <div class="clients-image style1 clearfix">
            <div class="clients-item">
                <div class="item-img">
                    <img src="{{asset('frontend/images/client/c1.png')}}" alt="images">
                </div>
                <p class="tooltip">Customer 01</p>
            </div>

            <div class="clients-item">
                <div class="item-img">
                    <img src="{{asset('frontend/images/client/c2.png')}}" alt="images">
                </div>
                <p class="tooltip">Customer 02</p>
            </div>

            <div class="clients-item">
                <div class="item-img">
                    <img src="{{asset('frontend/images/client/c3.png')}}" alt="images">
                </div>
                <p class="tooltip">Customer 03</p>
            </div>

            <div class="clients-item">
                <div class="item-img">
                    <img src="{{asset('frontend/images/client/c4.png')}}" alt="images">
                </div>
                <p class="tooltip">Customer 04</p>
            </div>

            <div class="clients-item">
                <div class="item-img">
                    <img src="{{asset('frontend/images/client/c5.png')}}" alt="images">
                </div>
                <p class="tooltip">Customer 05</p>
            </div>

            <div class="clients-item">
                <div class="item-img">
                    <img src="{{asset('frontend/images/client/c6.png')}}" alt="images">
                </div>
                <p class="tooltip">Customer 06</p>
            </div>
        </div><!-- /.clients-image -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-title-button">
                    <h3 class="title"><i class="fa fa-2x fa-commenting"></i>what our customers have
                    to say about Unitelearning</h3>
                </div>
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->

        <div class="flat-divider d35px"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="flat-testimonial">
                    <div class="testimonial">
                        <div class="testimonial-image">
                            <img src="{{asset('frontend/images/testimonials/t1.jpg')}}" alt="images">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">Jeff Kane</strong>
                                    <div class="author-info">
                                        <span class="subtitle">CEO</span>
                                        <span class="divider">-</span>
                                        <a href="#" class="company">Unified</a>
                                    </div>
                                </div>
                            </div>
                            <blockquote>Your commitment, passion,
                                 and delivery were really amazing. We had a great start and the

                                 speed as well as intensity with which we rolled out globally over
                                  3 years was unbelievable.</blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial-image">
                            <img src="{{asset('frontend/images/testimonials/t2.jpg')}}" alt="images">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">Jeff Kane</strong>
                                    <div class="author-info">
                                        <span class="subtitle">CEO</span>
                                        <span class="divider">-</span>
                                        <a href="#" class="company">Unified</a>
                                    </div>
                                </div>
                            </div>
                            <blockquote>Your commitment, passion, and delivery were really amazing. We had a great start and the speed as well as intensity with which we rolled out globally over 3 years was unbelievable.</blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial-image">
                            <img src="{{asset('frontend/images/testimonials/t3.jpg')}}" alt="images">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">Jeff Kane</strong>
                                    <div class="author-info">
                                        <span class="subtitle">CEO</span>
                                        <span class="divider">-</span>
                                        <a href="#" class="company">Unified</a>
                                    </div>
                                </div>
                            </div>
                            <blockquote>Your commitment, passion, and delivery were really amazing. We had a great start and the speed as well as intensity with which we rolled out globally over 3 years was unbelievable.</blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                </div><!-- /.flat-testimonial -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <div class="flat-divider d85px"></div>

        <div class="row">
            <div class="col-md-12">
                <p class="view-all-testimonial">
                    <a href="{{route('class-room-course1')}}" class="link2">View all testimonials<i class="fa fa-chevron-right"></i></a>
                </p>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<!--<div id="flat-map">
</div><!-- /#flat-map -->

<div id="flat" style="position: relative; overflow: hidden;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3806.2649756261003!2d78.39908217516631!3d17.44702718345033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDI2JzQ5LjMiTiA3OMKwMjQnMDYuMCJF!5e0!3m2!1sen!2sin!4v1702232526080!5m2!1sen!2sin"
    width="900" height="600" style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div><!-- /#flat-map -->

<!--home body content end-->


@endsection
