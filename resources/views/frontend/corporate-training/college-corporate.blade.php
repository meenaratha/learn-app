@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||College to Corporate</title>
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
                            <li class="trail-end">College to Corporate</li>
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
                    <img src="{{asset('frontend/images/corporate/college.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">College to Corporate</h4>
                        <p><strong>Our college to corporate software prepares university college students now not just for Interviews and recruitment process but also for a long term achievement in personal and expert lifestyles by using instilling a robust feel of confifence and "can-do" attitude in them.</strong></p>
                        <p>company firms do not look for academic crendentials and technical recognize -how alone. They look for self belief/short getting to know/interpersonal abilties/talent. they look for adeptness in communication skills, hassle fixing capabilities and versatility to the converting desires of the corporate..</p>
                        <p>
                            the program helps the students to shake off their selfdoubts,inhibitions,procrastination and self- defeating concept styles.</p>

                        <h4 class="title">College to corporate software covers</h4>
                        <ul class="flat-list style1 style2">
                            <li>influence with out authority.</li>
                            <li>company Etiquette.</li>
                             <li>information company verbal exchange styles.</li>
                             <li>Reflective time shifting.</li>
                             <li>powerful Mirroring and Anchoring strategies.</li>
                             <li>Breaking the blocks of inhibition.</li>
                             <li>Quadrant of productivity.</li>
                             <li>Proactiveness and its superb energy</li>
                             <li>Self leadership to leadership Roles.</li>
                             <li>Interpersonal Relationships</li>
                             <li>Directed Attitudes</li>


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
