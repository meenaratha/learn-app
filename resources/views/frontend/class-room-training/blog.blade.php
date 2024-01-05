@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Class Room Training Course3</title>
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

        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="content-wrap">
                        <div class="main-content">
                            <div class="main-content-wrap">
                                <div class="content-inner">
                                    <article class="blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-header">
                                                <h4 class="entry-time">
                                                    <span class="entry-day">13</span>
                                                    <span class="entry-month">Apr</span>
                                                    <span class="entry-year">2016</span>
                                                </h4>
                                                <div class="entry-header-content">
                                                    <h4 class="entry-title">
                                                        <a href="{{route('class-room-course1')}}">What The Martian Can Teach Sales Professionals</a>
                                                    </h4>
                                                    <div class="entry-meta">
                                                        <i class="fa fa-user"></i>
                                                        <span class="entry-author"><a href="#">Unitelearning</a></span>
                                                        <i class="fa fa-folder-open"></i>
                                                        <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                        <i class="fa fa-comment"></i>
                                                        <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-cover">
                                                <a href="{{route('class-room-course1')}}">
                                                    <img src="{{asset('frontend/images/blog/b1.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->

                                            <div class="entry-content">
                                                <p>This week, I finally watched the movie “The Martian,” starring Matt Damon. Damon plays Mark Watney, an astronaut trained in botany who is left for dead on Mars. Watney must stretch his food rations to keep himself alive in case help arrives. Using all the tools in his mental toolbox, and with no way to communicate with NASA, he engineers methods to keep certain death at bay until the nex...</p>
                                                <div class="readmore"><a href="{{route('class-room-course1')}}" class="more-link">Read more</a></div>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                    <article class="blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-header">
                                                <h4 class="entry-time">
                                                    <span class="entry-day">13</span>
                                                    <span class="entry-month">Apr</span>
                                                    <span class="entry-year">2016</span>
                                                </h4>
                                                <div class="entry-header-content">
                                                    <h4 class="entry-title">
                                                        <a href="{{route('class-room-course1')}}">HOW TO OVERCOME B2B PRICE OBJECTIONS</a>
                                                    </h4>
                                                    <div class="entry-meta">
                                                        <i class="fa fa-user"></i>
                                                        <span class="entry-author"><a href="#"></a></span>
                                                        <i class="fa fa-folder-open"></i>
                                                        <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                        <i class="fa fa-comment"></i>
                                                        <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-cover">
                                                <a href="{{route('class-room-course1')}}">
                                                    <img src="{{asset('frontend/images/blog/b2.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->

                                            <div class="entry-content">
                                                <p>This week, I finally watched the movie “The Martian,” starring Matt Damon. Damon plays Mark Watney, an astronaut trained in botany who is left for dead on Mars. Watney must stretch his food rations to keep himself alive in case help arrives. Using all the tools in his mental toolbox, and with no way to communicate with NASA, he engineers methods to keep certain death at bay until the nex...</p>
                                                <div class="readmore"><a href="{{route('class-room-course1')}}" class="more-link">Read more</a></div>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                    <article class="blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-header">
                                                <h4 class="entry-time">
                                                    <span class="entry-day">13</span>
                                                    <span class="entry-month">Apr</span>
                                                    <span class="entry-year">2016</span>
                                                </h4>
                                                <div class="entry-header-content">
                                                    <h4 class="entry-title">
                                                        <a href="{{route('class-room-course1')}}">PLAN AND PREPARE FOR YOUR SALES CALL</a>
                                                    </h4>
                                                    <div class="entry-meta">
                                                        <i class="fa fa-user"></i>
                                                        <span class="entry-author"><a href="#">Unitelearning</a></span>
                                                        <i class="fa fa-folder-open"></i>
                                                        <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                        <i class="fa fa-comment"></i>
                                                        <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-cover">
                                                <a href="{{route('class-room-course1')}}">
                                                    <img src="{{asset('frontend/images/blog/b3.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->

                                            <div class="entry-content">
                                                <p>This week, I finally watched the movie “The Martian,” starring Matt Damon. Damon plays Mark Watney, an astronaut trained in botany who is left for dead on Mars. Watney must stretch his food rations to keep himself alive in case help arrives. Using all the tools in his mental toolbox, and with no way to communicate with NASA, he engineers methods to keep certain death at bay until the nex...</p>
                                                <div class="readmore"><a href="{{route('class-room-course1')}}" class="more-link">Read more</a></div>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                    <article class="blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-header">
                                                <h4 class="entry-time">
                                                    <span class="entry-day">13</span>
                                                    <span class="entry-month">Apr</span>
                                                    <span class="entry-year">2016</span>
                                                </h4>
                                                <div class="entry-header-content">
                                                    <h4 class="entry-title">
                                                        <a href="{{route('class-room-course1')}}">6 TIPS TO RETAIN YOUR TOP SALES TALENT</a>
                                                    </h4>
                                                    <div class="entry-meta">
                                                        <i class="fa fa-user"></i>
                                                        <span class="entry-author"><a href="#">Unitelearning</a></span>
                                                        <i class="fa fa-folder-open"></i>
                                                        <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                        <i class="fa fa-comment"></i>
                                                        <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-cover">
                                                <a href="{{route('class-room-course1')}}">
                                                    <img src="{{asset('frontend/images/blog/b4.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->

                                            <div class="entry-content">
                                                <p>This week, I finally watched the movie “The Martian,” starring Matt Damon. Damon plays Mark Watney, an astronaut trained in botany who is left for dead on Mars. Watney must stretch his food rations to keep himself alive in case help arrives. Using all the tools in his mental toolbox, and with no way to communicate with NASA, he engineers methods to keep certain death at bay until the nex...</p>
                                                <div class="readmore"><a href="{{route('class-room-course1')}}" class="more-link">Read more</a></div>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                    <article class="blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-header">
                                                <h4 class="entry-time">
                                                    <span class="entry-day">13</span>
                                                    <span class="entry-month">Apr</span>
                                                    <span class="entry-year">2016</span>
                                                </h4>
                                                <div class="entry-header-content">
                                                    <h4 class="entry-title">
                                                        <a href="{{route('class-room-course1')}}">WHY YOUR SALES FORECAST IS OFF</a>
                                                    </h4>
                                                    <div class="entry-meta">
                                                        <i class="fa fa-user"></i>
                                                        <span class="entry-author"><a href="#">Unitelearning</a></span>
                                                        <i class="fa fa-folder-open"></i>
                                                        <span class="entry-categories"><a href="#">Sales Enablement</a></span>
                                                        <i class="fa fa-comment"></i>
                                                        <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-cover">
                                                <a href="{{route('class-room-course1')}}">
                                                    <img src="{{asset('frontend/images/blog/b5.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->

                                            <div class="entry-content">
                                                <p>This week, I finally watched the movie “The Martian,” starring Matt Damon. Damon plays Mark Watney, an astronaut trained in botany who is left for dead on Mars. Watney must stretch his food rations to keep himself alive in case help arrives. Using all the tools in his mental toolbox, and with no way to communicate with NASA, he engineers methods to keep certain death at bay until the nex...</p>
                                                <div class="readmore"><a href="{{route('class-room-course1')}}" class="more-link">Read more</a></div>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                </div><!-- /.content-inner -->

                                <div class="navigation paging-navigation numeric">
                                    <div class="flat-pagination loop-pagination">
                                        <span class="page-numbers current">1</span>
                                        <a class="page-numbers" href="#">2</a>
                                    </div><!-- /.flat-pagination -->
                                </div><!-- /.navigation .paging-navigation .numeric -->
                            </div><!-- /.main-content-wrap -->
                        </div><!-- /.main-content -->

                        <div class="sidebars">
                            <div class="sidebars-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_recent_entries">
                                        <h4 class="widget-title">Recent News</h4>
                                        <ul>
                                            <li>
                                                <a href="#">What The Martian Can Teach Sales Professionals</a>
                                                <span class="post-date">April 13, 2016</span>
                                            </li>
                                            <li>
                                                <a href="#">How To Overcome B2B Price Objections</a>
                                                <span class="post-date">April 13, 2016</span>
                                            </li>
                                            <li>
                                                <a href="#">Plan and Prepare For Your Sales Call</a>
                                                <span class="post-date">April 13, 2016</span>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_recent_entries -->

                                    <div class="widget widget_categories">
                                        <h4 class="widget-title">CATEGORIES</h4>
                                        <ul>
                                            <li><a href="#">Sales Coaching</a></li>
                                            <li><a href="#">Sales Consulting</a></li>
                                            <li><a href="#">Sales Enablement</a></li>
                                            <li><a href="#">Sales Management</a></li>
                                            <li><a href="#">Sales Prospecting</a></li>
                                            <li><a href="#">Sales Training</a></li>
                                        </ul>
                                    </div><!-- /.widget_categories -->

                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="content-text">
                                                <h4 class="title">Take Your Sales To The Next Level</h4>
                                                <p>Contact us at 1 800 232 3485 send us an email, or fill out our contact form to speak with one of our experts and learn how we can help you increase your sales.</p>
                                                <p><a class="button" href="#">Contact us Today!</a></p>
                                            </div>
                                        </div><!-- /.textwidget -->
                                    </div><!-- /.widget_text -->

                                    <div class="widget widget_tag_cloud">
                                        <h4 class="widget-title">Tag clound</h4>
                                        <div class="tagcloud">
                                            <a href="#">B2B</a>
                                            <a href="#">Business</a>
                                            <a href="#">Coaching</a>
                                            <a href="#">Consulting</a>
                                            <a href="#">Management</a>
                                            <a href="#">Sales</a>
                                            <a href="#">Talent</a>
                                            <a href="#">Tips</a>
                                            <a href="#">Training</a>
                                        </div>
                                    </div><!-- /.widget_tag_cloud -->
                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebars-wrap -->
                        </div><!-- /.sidebars -->
                    </div><!-- /.content-wrap  -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.blog -->

        <!-- Footer -->
       @endsection
