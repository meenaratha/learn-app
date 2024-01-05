@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Eagle enterprise</title>
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
                            <li class="trail-end">Eagle enterprise</li>
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
                    <img src="{{asset('frontend/images/corporate/enterprise.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Eagle enterprise extensive</h4>
                        <p><strong>EAGLE business in depth
                            a way to Create seasoned table commercial enterprise model in Any business You choose</strong></p>
                       <p>With shrinking markets and eroding seasoned ts, many corporate’s are suffering to live a oat. that is a not unusual case across the length and breath of the corporate landscape.</p>
                       <p>adding to that, the ever increasing severe opposition and the predatory moves to acquire bigger market proportion is growing to be an by no means finishing venture and threat to the survival of many companies.</p>
                       <p>This effective programme will permit you, use the established techniques that withstood the commercial enterprise pressures and competition over a time period.</p>
                       <p>you will see a bounce begin for your backside line by using 30% giving you extra degrees to play your business game. This programme will provide your insights into the prolonged markets you've got overlooked, which is untapped capacity neither you nor your competition aware.

                        This programme is for certain will trade the manner you use enterprise as this may carry agency extensive alternate increasing productivity to better tiers.</p>
                        <h4 class="title">This course covers</h4>
                        <ul class="flat-list style1 style2">
                            <li>Refabricated view of your commercial enterprise and the assisting eco machine</li>
                            <li>prolonged Markets</li>
                            <li>Stealth movement into wallets</li>
                            <li>ICP Codes in your goal Markets</li>
                            <li>BSB Coding to excessive Networth customers</li>
                            <li>Constructing multiple sales streams</li>
                            <li>street to Tactical Negotiations</li>
                            <li>Win-win income techniques that work in the real international.</li>
                            <li>examined and demonstrated ESBI version</li>


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
