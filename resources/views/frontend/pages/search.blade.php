@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Searching....</title>
@endsection
@section('body')
<!--searching... body content start--->
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
                                    <li class="trail-end">Search results for “ji”</li>
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
                        <div class="general search">
                            <div class="widget widget_search">
                                <form class="search-form" action="{{route('search')}}" method="GET">
                                    <input type="search" name="search" class="search-field" placeholder="Search …">
                                    <input type="submit" class="search-submit">
                                </form>
                            </div>
                            <div class="search-results">
                                <article>
                                    <span class="counter">1</span>
                                    <h2 class="entry-title">
                                        <a href="#">Hypnotherapy Learning</a>
                                    </h2>
                                    <div class="entry-date">April 25, 2016</div>
                                    <div class="entry-excerpt">
                                        <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                                    </div>
                                </article>

                                <article>
                                    <span class="counter">2</span>
                                    <h2 class="entry-title">
                                        <a href="#">Hypnotherapy Learning</a>
                                    </h2>
                                    <div class="entry-date">April 25, 2016</div>
                                    <div class="entry-excerpt">
                                        <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                                    </div>
                                </article>

                                <article>
                                    <span class="counter">3</span>
                                    <h2 class="entry-title">
                                        <a href="#">Hypnotherapy Learning</a>
                                    </h2>
                                    <div class="entry-date">April 25, 2016</div>
                                    <div class="entry-excerpt">
                                        <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                                    </div>
                                </article>

                                <article>
                                    <span class="counter">4</span>
                                    <h2 class="entry-title">
                                        <a href="#">Hypnotherapy Learning</a>
                                    </h2>
                                    <div class="entry-date">April 25, 2016</div>
                                    <div class="entry-excerpt">
                                        <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                                    </div>
                                </article>

                                <article>
                                    <span class="counter">5</span>
                                    <h2 class="entry-title">
                                        <a href="#">Hypnotherapy Learning</a>
                                    </h2>
                                    <div class="entry-date">April 25, 2016</div>
                                    <div class="entry-excerpt">
                                        <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                                    </div>
                                </article>

                                <article>
                                    <span class="counter">6</span>
                                    <h2 class="entry-title">
                                        <a href="#">Hypnotherapy Learning</a>
                                    </h2>
                                    <div class="entry-date">April 25, 2016</div>
                                    <div class="entry-excerpt">
                                        <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                                    </div>
                                </article>
                            </div><!-- /.search-results -->
                            <div class="navigation paging-navigation numeric">
                                <div class="flat-pagination loop-pagination">
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                </div><!-- /.flat-pagination -->
                            </div>
                        </div><!-- /.search -->

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
