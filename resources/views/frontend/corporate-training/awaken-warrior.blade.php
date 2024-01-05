@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Awaken Warrior Inside You</title>
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
                            <li class="trail-end">Awaken Warrior Inside You</li>
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
                <div class="general">
                    <img src="{{asset('frontend/images/corporate/awaken.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Awaken Warrior Inside You</h4>
                        <p><strong>unleash the power inside is a stay three 1⁄2 day occasion with la Winspire designed to help you unencumber and unleash the forces inner that allow you to ruin thru any restriction and create the satisfactory of lifestyles you choice. learn the way you could surpass your personal barriers to reap your goals and take manipulate of your lifestyles.</strong></p>

                        <h4 class="title">You may discover : </h4>
                        <ul class="flat-list style1 style2">
                            <li>a way to release the core braveness with in you</li>
                            <li>wreck yourself restricting ideals via stay hearth walk</li>
                            <li>Get your way through and Get the existence you desire</li>
                            <li>the way to end up Un-compromised individual to gain your destined Glory</li>
                            <li>a way to emerge as the Un-not unusual inside the not unusual</li>
                            <li>find out how to conquer phobias, anxieties, fears and all the ones things that maintain you lower back.</li>
                            <li>the way to have the courage to do so despite worry, doubt and worry.</li>


                        </ul>

                        <div class="flat-divider d30px"></div>


                    </div>

                    <div class="flat-divider d35px"></div>
                </div><!-- /.general -->

                @include('frontend.corporate-training.right-sidebar')
                <!-- /.general-sidebar -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-about -->
<!--end body content-->

@endsection
