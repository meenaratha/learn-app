@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Our Clients</title>
@endsection
@section('body')
  <!-- Page header -->
  <div class="flat-page-header parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="page-header-title">
                    <h2 class="title">Company History</h2>
                </div>
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-header -->

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
                            <li class="trail-item"><a href="{{route('about')}}">Who we are</a></li>
                            <li class="trail-end">Company History</li>
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
                <div class="general company-history">
                    <div class="general-text">
                        <h4 class="title">LEADERS ALWAYS LOOK TOWARD THE FUTURE.</h4>
                        <p>More than 40 years ago, our company’s namesake, LineThemes, pioneered a revolutionary sales training program for businesses of every size. Today, our proven sales training program has made us a leader in sales and management training,
                             with hundreds of training centers throughout North America and across the globe.</p>
                        <p>While much has changed in the business world since then,Unitelearing Training has always
                            kept pace. Under the leadership of John Doe, President/CEO,
                            Unitelearing Training continues to innovate. In that spirit,
                            we recently launched online reinforcement tools that our franchisees
                            can use in addition to face-to-face training. And we will continue to
                             incorporate online reinforcement, online learning management and increased mobile availability.</p>
                        <p>With our unique reinforcement model, our Franchise Owners can give businesses a competitive advantage by helping create a
                            highly skilled sales force and inspiring management and leadership to excellence.</p>
                    </div><!-- /.general-text -->

                    <div class="flat-divider d40px"></div>

                    <ul class="history">
                        <li>
                            <div class="year-content">
                                <h3>1967</h3>
                                <p>John Doe developed the Cosine Selling System® methodology and created
                                    the concept of ‘reinforcement training’ to support it.</p>
                            </div>
                        </li>
                        <li>
                            <div class="year-content">
                                <h3>Early 1970s</h3>
                                <p>John Doe went on to create a series of proven sales training programs for small- and mid-sized companies as well as Fortune 500 corporations.</p>
                            </div>
                        </li>
                        <li>
                            <div class="year-content">
                                <h3>1983</h3>
                                <p>John Doe expanded the training into a Franchising operation known as the Unitelearing
                                     Sales Institute®.</p>
                            </div>
                        </li>
                        <li>
                            <div class="year-content">
                                <h3>2007</h3>
                                <p>The company’s name was changed to Unitelearing Training® to
                                    more accurately reflect the diversity of our training offerings,
                                     which have expanded beyond sales training to include management, leadership,
                                     negotiating skills, customer service, executive coaching and mentoring.</p>
                            </div>
                        </li>
                        <li>
                            <div class="year-content">
                                <h3>Today</h3>
                                <p>Unitelearing Training is an organization with a rich history
                                    that dominates the global training market. We have more than 50 offices
                                     worldwide, providing instruction in 27 languages.</p>
                            </div>
                        </li>
                    </ul><!-- /.history -->
                </div><!-- /.company-history -->

                <div class="general-sidebar">
                    <div class="sidebar-wrap">
                        <div class="sidebar">
                            <div class="widget widget_nav_menu">
                                <ul class="nav_menu">
                                    <li class="menu-item">
                                        <a  href="{{route('about')}}">Overview</a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="active" href="{{route('company-history')}}">Company history</a>
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
                                        <a href="{{route('faq')}}">FAQ</a>
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
        <!-- Footer -->
        @endsection
