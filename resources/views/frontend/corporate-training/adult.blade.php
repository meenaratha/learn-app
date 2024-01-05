@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Brilliant Young Adult</title>
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
                            <li class="trail-end">Brilliant Young Adult</li>
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
                        <h4 class="title">Brilliant Young Adult</h4>
                        <p><strong>Designed for student success in faculty and within the existence</strong></p>
                        <p>change has emerge as extreme in modern society. simplest the fittest amongst all can live on nowadays.And so each toddler wishes special guidance to perceive and utilize his potentials and end up the fittest.</p>

                        <h4 class="title"></h4>
                        <ul class="flat-list style1 style2">
                            <li>Is your infant a few of the fittest?</li>
                            <li>Is your infant struggling in studies?</li>
                            <li>Is your infant equipped to stand life successfully?</li>
                            <li>Is your baby equipped to stand the opposition in this global bodily, mentally and emotionally?</li>
                            <li>what's restricting your child from the usage of her or his skills?</li>
                            <li>what's being carried out to help them to build a strong self -esteem and the capacity to from superb patterns of resilience?</li>
                            <li>Does your baby know how to excel in exams and outperform?


                                exceptional children/fantastic teensis a non-public excellence schooling software crafted to reap extremely good outcomes in numerous factors of your baby's life.It generates a nice attitude and fabricates excellence in youngsters. thru this application your infant can end up Champion of champions.</li>


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
