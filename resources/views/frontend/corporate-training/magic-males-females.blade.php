@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Magic male and female </title>
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
                            <li class="trail-end">The Magic of Males and Females</li>
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
                    <img src="{{asset('frontend/images/corporate/male-female1.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Men and Women Magic</h4>
                        <p><strong>If all marriages are made in heaven, why is it that for
                             a few it is a bed of roses and for others it isn't? Is there a
                             layout difference among guys & ladies that reasons this? in this
                              maximum fantastic workshop l. a. Winspire affords a practical
                               know-how of what a person seeks in his wife & what a spouse seeks in her
                                husband. This workshop will convey in happiness, love and linked information
                                for your marriage.</strong></p>
                        <h4 class="title">The course consists of :</h4>
                        <ul class="flat-list style1 style2">
                            <li>In Marriage both want to have an understanding mindset</li>
                            <li>people usually love the way they recognize love</li>
                            <li>Marriage is a sacred dating</li>
                            <li>knowledge the spice of marriage</li>
                            <li>The splendor of togetherness</li>
                            <li>The compatibility of values</li>
                            <li>live to provide unconditionally</li>
                            <li>men & girls are differently made</li>
                            <li>Time is a question of mindset</li>
                            <li>What does a girl searching for in a wedding</li>
                            <li>The strength of love & relationship</li>
                            <li>Being a pleasant pal to every other</li>

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
