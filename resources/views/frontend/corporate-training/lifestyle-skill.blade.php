@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Smooth Ability And Lifestyle Skill</title>
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
                            <li class="trail-end">Smooth Ability And Lifestyle Skill</li>
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
                    <img src="{{asset('frontend/images/corporate/lifestyle.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Smooth Ability And Lifestyle Skill</h4>
                        <p><strong>Tender talents are private attributes that they need and beautify an character's character and additionally manipulate one's self. they're very essential for process performance and career advancement.</strong></p>
                        <p>smooth abilities are frequently described by means of the usage of phrases related to persona tendencies, such as optimism, not unusual feel, duty,a sense of humor and EI. skills that can be practiced inclusive of empathy teamwork, management, conversation, Etiquette, negotiation, and the ability to encourage.</p>
                        <p>it is often said that, "You get employed for talents and fired for lack of smooth talents.". So the question is do you have these capabilities? if your answer is no, don't lose coronary heart due to the fact that's what we are right here for.</p>


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
