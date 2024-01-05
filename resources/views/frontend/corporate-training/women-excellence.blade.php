@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Women Excellence</title>
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
                            <li class="trail-end">Women Excellence</li>
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
                    <img src="{{asset('frontend/images/corporate/women.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Women Excellence</h4>
                        <p><strong>"A female is a full circle, inside her is the power to create,nature and rework",said Dianne Marie infant.
                        </strong></p>
                        <p>With this notion we present to you this at some point workshop for Excellence.The objective of this program is that will help you locate ways of re-discovering that powerful being that is living with in and offer equipment to rouse the empowered women in you.</p>
                        <p>love it or now not-ladies are herbal leaders!We lead with the aid of example at home, at paintings,in the network.if you want some thing completed- simply ask a hectic woman!</p>
                        <p>los angeles Winspire helps you to increase your capability via inspiring training that will task you and offer you with the competencies to attain your unlimited potential.</p>
                        <h4 class="title">This program covers</h4>
                        <ul class="flat-list style1 style2">
                            <li>figuring out the beleifs which can be restricting you from achieving matters in life.</li>
                            <li>goal placing and main a purposeful life.</li>
                            <li>work lifestyles balance.</li>
                            <li>expertise the law of enchantment.</li>
                            <li>manipulate strain.</li>
                            <li>communicate with confidence.</li>
                            <li>the usage of wonderful self-affirmations.</li>
                            <li>Come have a good time being a girl</li>


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
