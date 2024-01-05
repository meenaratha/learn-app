@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Teach the Instructor</title>
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
                            <li class="trail-end">Teach the Instructor</li>
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
                    <img src="{{asset('frontend/images/corporate/teach.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Teach the Instructor</h4>
                        <p><strong>four Dimensional technique to schooling

                            To become a peak overall performance teacher</strong></p>
                        <p>40hrs in depth "teach the trainers" program- A must for all coaching &education specialists.</p>
                        <p>
                            Why do a little triners always create wonderful end result whilst others warfare to speak their ideas? Why is it that some trainer's lessons are understood and remembered and feature an enduring effect whilst others stress even to preserve the eye of their target market?</p>
                        <p>
                            schooling is a form of artwork; ne that requires craft,creativity,mastery of specific abilties and intelligence.Like any other professional hobby,education requires creative and cultivated ability.</p>
                       <p>
                        train the trainer is an intensive and annoying training software designed for instructors,lectures,professors and professional running shoes. The purpose is not just enchancing training skills but to bring about a qualitative shift within the wat one thinks, reflects,manages time and creates excellence in classroom.</p>
                        <p>blessings to the members encompass stepped forward outcomes in attaining gaining knowledge of objectives,advanced commitment and motivation, a greater superb and tasty classroom ecosystem and a more inner force for touching excellence.
                        </p>
                        <h4 class="title">Teach the instructor covers</h4>
                        <ul class="flat-list style1 style2">
                            <li>the way to design a effective application.</li>
                            <li>a way to manipulate the strength in the room.</li>
                            <li>the way to have interaction and enroll.</li>
                            <li>a way to use "multiplied studying" techniques so your participants analyze faster and rememeber more.
                                particular template format.</li>
                            <li>A verified blueprint to marketplace your seminars and your self as a speaker/trainer.</li>
                            <li>This software will alternate your existence- for my part , professionally and financially.</li>

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
