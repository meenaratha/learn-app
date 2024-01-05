@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||College Development Program</title>
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
                            <li class="trail-end">College Development Program</li>
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
                    <img src="{{asset('frontend/images/corporate/cdp.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">College Development Program</h4>
                        <p><strong>The converting instances of the present day technology needs school to be in song to the shifts from the traditional coaching techniques and adapt to the principal trends of nowadays. they will have to build on their current know-how, achievements & accomplishments of the
                            past and adapt to the evolving roles. academic vitality may be very a good deal dependent on the school members and college improvement has a totally critical function to play in selling academic excellence and innovation in changing instances in track to the Institutional structure.</strong></p>
                        <p>This CDP is designed to broaden the point of interest, foster collaboration and effectiveness in the study room with established coaching techniques to bring out creativity and innovation.</p>

                        <h4 class="title">CDP Trains and Developsm</h4>
                        <ul class="flat-list style1 style2">
                            <li>Institutional structure.</li>
                            <li>Economics of Authority and electricity</li>
                            <li>Passive teaching vs energetic coaching</li>
                            <li>group based learning, hassle primarily based gaining knowledge of
                                Creativity and Innovation inside the lecture room
                                Directed Attitudes</li>
                            <li>enhancing purposeful regions
                                student Engagement</li>
                                <li>techniques for handling tough students
                                    Time and strain management in a lecture room</li>


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
