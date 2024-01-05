@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Counselling Services</title>
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
                            <li class="trail-end">Counselling Services</li>
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
                    <img src="{{asset('frontend/images/corporate/adult.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Counselling Services</h4>
                        <p><strong>We offer a spectrum of services ranging from Psychological Counseling, Psychological Assessment and Career Counseling. Our services are rooted in the scientist –practitioner approach and we constantly seek continuing education to remain current in the field. We follow a combination of the American Psychological Association (APA) and the American Counseling Association’s (ACA) guidelines in practice of Counseling Psychology, adapting both to suit Indian culture and tradition. We firmly believe in the ethical practice of psychology and in maintaining the current highest international standards of the profession.</strong></p>

                        <h4 class="title">Our services include</h4>
                        <ul class="flat-list style1 style2">
                            <li>Individual / Personal Counselling</li>
                            <li>Marital / Couples Counselling
                                Family Counselling</li>
                            <li>Adolescent Counselling</li>
                            <li>Career counseling
                                Suicidal Counselling
                                Mentoring</li>


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
