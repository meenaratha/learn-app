@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Class Room Training  Course 2</title>
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
                                    <li class="trail-end">News</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <!-- Blog shortcode -->
        <div class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="blog-shortcode clearfix">
                            <article class="blog-posts item-three-column">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <h4 class="entry-time">
                                            <span class="entry-day">13</span>
                                            <span class="entry-month">Apr</span>
                                        </h4>
                                        <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/1.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="entry-content-wrap">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{route('class-room-course1')}}">What The Martian Can Teach Sales Professionals</a>
                                            </h2>
                                        </div>
                                        <p class="entry-content">This week, I finally watched the movie “The Martian,” starring Matt Damon. Damon plays Mark Watney, an astronaut trained...</p>
                                        <div class="entry-footer">
                                            <div class="entry-meta">
                                                <span class="entry-author"><a href="#">themesflat</a></span>
                                                <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- /.blog-post -->

                            <article class="blog-posts item-three-column">
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
                                        <p class="entry-content">Bar none, the biggest objection a customer ever raises is price. Often they don’t comprehend the value of your solution,...</p>
                                        <div class="entry-footer">
                                            <div class="entry-meta">
                                                <span class="entry-author"><a href="#">themesflat</a></span>
                                                <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- /.blog-post -->

                            <article class="blog-posts item-three-column">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <h4 class="entry-time">
                                            <span class="entry-day">13</span>
                                            <span class="entry-month">Apr</span>
                                        </h4>
                                        <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/3.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="entry-content-wrap">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{route('class-room-course1')}}">PLAN AND PREPARE FOR YOUR SALES CALL</a>
                                            </h2>
                                        </div>
                                        <p class="entry-content">Research shows that salespeople will never reach their performance potential without a well-defined sales-call procedure...</p>
                                        <div class="entry-footer">
                                            <div class="entry-meta">
                                                <span class="entry-author"><a href="#">themesflat</a></span>
                                                <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- /.blog-post -->

                            <article class="blog-posts item-three-column">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <h4 class="entry-time">
                                            <span class="entry-day">13</span>
                                            <span class="entry-month">Apr</span>
                                        </h4>
                                        <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/4.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="entry-content-wrap">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{route('class-room-course1')}}">6 TIPS TO RETAIN YOUR TOP SALES TALENT</a>
                                            </h2>
                                        </div>
                                        <p class="entry-content">In business, there’s an expression: To have and to hold, from this day forward. … Oh, wait, that’s a marriage vow. And e...</p>
                                        <div class="entry-footer">
                                            <div class="entry-meta">
                                                <span class="entry-author"><a href="#">themesflat</a></span>
                                                <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- /.blog-post -->

                            <article class="blog-posts item-three-column">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <h4 class="entry-time">
                                            <span class="entry-day">13</span>
                                            <span class="entry-month">Apr</span>
                                        </h4>
                                        <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/5.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="entry-content-wrap">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{route('class-room-course1')}}">WHY YOUR SALES FORECAST IS OFF</a>
                                            </h2>
                                        </div>
                                        <p class="entry-content">Sales forecasting is commonplace among sales managers, despite the fact that it’s a ridiculously difficult undertaking a...</p>
                                        <div class="entry-footer">
                                            <div class="entry-meta">
                                                <span class="entry-author"><a href="#">themesflat</a></span>
                                                <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- /.blog-post -->

                            <article class="blog-posts item-three-column">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <h4 class="entry-time">
                                            <span class="entry-day">13</span>
                                            <span class="entry-month">Apr</span>
                                        </h4>
                                        <a href="{{route('class-room-course1')}}"><img src="{{asset('frontend/images/blog/6.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="entry-content-wrap">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{route('class-room-course1')}}">6 TIPS TO INCREASE TRADE SHOW SALES</a>
                                            </h2>
                                        </div>
                                        <p class="entry-content">Spring is starting to show through here in our hometown of Las Vegas. We’re in the midst of trade show season and compan...</p>
                                        <div class="entry-footer">
                                            <div class="entry-meta">
                                                <span class="entry-author"><a href="#">themesflat</a></span>
                                                <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- /.blog-post -->
                        </div><!-- /.blog-shortcode -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
        @endsection
