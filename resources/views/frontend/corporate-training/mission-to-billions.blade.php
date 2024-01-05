@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || Mission to Billons</title>
@endsection
@section('body')
<!--start body content-->
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
                            <li class="trail-end">Mission to Billions</li>
                        </ul>
                    </div>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

  <!-- Flat about -->
  <div class="flat-row flat-general sidebar-right">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="general about-content">
                    <div class="about-slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <a class="popup-gallery" href="{{asset('frontend/images/corporate/mission1.jpg')}}"><img src="{{asset('frontend/images/corporate/mission1.jpg')}}" alt="images"></a>
                                </li>
                                <li>
                                    <a class="popup-gallery" href="{{asset('frontend/images/corporate/mission2.jpg')}}"><img src="{{asset('frontend/images/corporate/mission2.jpg')}}" alt="images"></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.about-slider -->

                    <div class="about-content-text">
                        <h4 class="about-content-title" style="text-transform:uppercase;">technique to purpose</h4>
                        <p><strong>how to stay Your motive and Get rich</strong></p>
                        <p>transferring as much as the higher orbits of 1 self is a giant jump towards his internal global of excellence. The supply of positivity and unseen wealth that rises above bringing great exchange with in, main to huge and unmeasurable movements leading a existence you desire.
                        </p>
                        <p>This software addresses the needs of an man or woman through bringing approximately a change in outlook in the direction of one’s tasks and most importantly towards self. The give up result would be an person who as better manipulate and ownership on his selections, attitudes, results and nal out comes.</p>

                    </div><!-- /.about-content-text -->

                    <div class="about-content-text item-column">
                        <div class="item-two-column">
                            <h4 class="about-content-title" style="text-transform: uppercase;">The direction consists of :</h4>
                            <p></p>
                            <ul class="flat-list style1">
                                <li>Awakening of self actualization stage</li>
                                <li>knowledge and dealing with trade</li>
                                <li>Framework for non-stop development</li>
                                <li>system to purpose</li>
                                <li>leading others to lead themselves</li>
                                <li>discovering the essence of excellence</li>
                                <li>develop in your private electricity</li>
                                <li>Directed Attitudes thru inner calling</li>
                                <li>linked questioning to grasp braveness</li>
                                <li>undertaking to depart a legacy</li>
                            </ul>
                        </div>

                        <div class="item-two-column">
                            <div class="flat-video-fancybox">
                                <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                                    <img src="{{asset('frontend/images/corporate/missionvideo.jpg')}}" alt="images">
                                </a>
                            </div>
                        </div>
                    </div><!-- /.about-content-text -->

                    <div class="flat-accordion style">
                        <div class="flat-toggle">
                            <h6 class="toggle-title">Unitelearning Mission</h6>
                            <div class="toggle-content">
                                <p>Unitelearning is all about the client and our mission is to make you successful. We work with business and sales leaders to improve performance and deliver tangible results. Our belief is that we must do more than just deliver our capabilities and services – we must own results with our clients.</p>
                            </div>
                        </div><!-- /toggle -->

                        <div class="flat-toggle">
                            <h6 class="toggle-title active">Unitelearning Values</h6>
                            <div class="toggle-content">
                                <p>At Unitelearning, we value honesty and integrity
                                    above all else, and highly value customer and employee loyalty.
                                     We also believe in giving back to our communities, making them better
                                      places to live.</p>
                            </div>
                        </div><!-- /toggle -->
                    </div><!-- /.flat-accordion -->
                </div><!-- /.about-content -->
                 @include('frontend.corporate-training.right-sidebar')
                <!-- /.general-sidebar -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-about -->
<!--end body content-->
@endsection
