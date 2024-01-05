@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Regulation Attraction</title>
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
                            <li class="trail-end">Regulation Attraction</li>
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
                    <img src="{{asset('frontend/images/corporate/attraction.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Regulation Attraction</h4>
                        <p><strong>The regulation of attraction is a regulation of universe just like the regulation of gravity and it's miles a effective as every other time-honored law. In easy words, it method, something you "assume" will become a fact for your existence . We attract experiences and outcomes in our existence related to the thoughts in our thoughts. consequently, you could use this regulation to attract something you choice into your lifestyles.</strong></p>
                        <p>This 2 day software will train you inside the methods to attract what each you need on your lifestyles. Attend this workshop and learn how to use regulation of enchantment stay a fulfilling and contendedlife.</p>

                        <h4 class="title">It consists of
                        </h4>
                        <ul class="flat-list style1 style2">
                            <li>creation to regulation of A ttraction.</li>
                            <li>How mind affect & cause regulation of appeal sixty eight seconds pure concept idea.</li>
                            <li>Emotional steerage device - how to use your internal steerage gadget to guide you in everystep of your lifestyles.</li>
                            <li>money Blueprint- a way to appeal to cash in life.</li>
                            <li>mind levels -Deeper information of the way our minds works and how can we manage our thoughts.</li>
                            <li>how to avoid being a sufferer and take rate of your life.</li>
                            <li>how to expand an attitude of gratitude in the direction of the entirety/absolutely everyone.
                                learn how to visualize.</li>
                                <li>the way to forgive all people and the way it is able to enhance your ife.</li>
                             <li>The electricity of intention and a way to use it for your appropriate.</li>
                             <li>the way to create a vision board which draws the entirety you need in your existence know-how soul Blueprint basis&how to trade it unique Meditation Excercise to strenthen your Intution , Visualization & attraction.</li>

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
