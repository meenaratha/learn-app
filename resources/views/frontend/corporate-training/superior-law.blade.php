@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Superior law of Appeal Traines Education</title>
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
                            <li class="trail-end">Superior law of Appeal Traines Education</li>
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
                    <img src="{{asset('frontend/images/corporate/law.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Superior law of Appeal Traines Education</h4>
                        <p><strong>Do You accept as true with in LOA. Do you need become an envoy.
                            Then this workshop is for you. we are able to provide you with in-depth
                            understanding of law of enchantment and train you on "the way to train
                            law of appeal" in best manner.</strong></p>

                        <h4 class="title">instructor's schooling covers</h4>
                        <ul class="flat-list style1 style2">
                            <li>you may learn strengthen regulation of appeal</li>
                            <li>you'll dive deeper into the law of enchantment fabric and learn to supply it to others.</li>
                            <li>you may learn, the way to guide people through the grade by grade manner.</li>
                            <li>you will give live guided shows.</li>
                            <li>you'll study, a way to supply a seasoned table training & preserve long term income.</li>


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
