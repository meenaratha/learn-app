@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Peak Performance Life Education</title>
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
                            <li class="trail-end">Peak Performance Life Education</li>
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
                    <img src="{{asset('frontend/images/corporate/life.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Peak Performance Life Education</h4>
                        <p><strong>examined and tested consequences lifestyles coaching</strong></p>
                        <p>you could have the edge, however do you've got what it takes to stay sharp?
                            Dr. Madhurima Reddy & Rajesh Prabhakar, result Coaches are hand-selected and educated with the aid of international Legends in training. they will empower you with the required focus, insights and responsibility, you need to attain for the consistent effects you demand.</p>
                        <p>each participant desires to participate in 250+ hours of education in the very equal strategies, equipment and strategies developed and utilized by l. a. Winspire to assist over Lakhs of human beings — in country wide and global level.</p>
                        <p>At l. a. Winspire, with extra than twenty years of mixed information within the areas of life education and psychology, NLP, advanced regulation of appeal techniques. We surely accept as true with that individuals need to accept the strength to help themselves. the usage of expert and professional techniques primarily based at the ideas of psychology and intuition, we empower individuals with equipment to self-discovery, triumph over demanding situations, ruin-through enhance the self assurance by means of identifying their strengths and natural capabilities leading to a fresh new view of lifestyles.</p>
                        <p>Your non-public coach will help you optimize your existence step by step. he or she is a professional, educated listener, and will be aware what you don’t say simply as tons as what you do say. This life education system will develop and increase, allowing you to get increasingly more from it over the years.
                        </p>
                        <h4 class="title">schedule a free session today and begin residing at the following stage:</h4>
                        <ul class="flat-list style1 style2">
                            <li>The Platinum peak performance coaching.</li>
                            <li>The Gold top overall performance coaching .</li>
                            <li>The Silver peak overall performance education .
                            </li>

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
