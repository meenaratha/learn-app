@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning ||Artwork of Paranting</title>
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
                            <li class="trail-end">Artwork of Paranting</li>
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
                    <img src="{{asset('frontend/images/corporate/artwork.jpg')}}" alt="images">

                    <div class="flat-divider d40px"></div>

                    <div class="general-text">
                        <h4 class="title">Artwork of Paranting</h4>
                        <p><strong>Parenting is ready bringing up anew generation, and the selection whether to make it a blissful technique or a daunting project lies with dad and mom themselves.</strong></p>
                        <p>Todya's kids are better informed due to publicity to diverse modes of communication and information like net,cell telephones,playstations, computer games and so on.Parenting therefore is no baby'splay.it's far a gentle and yet a completely hard activity.</p>
                        <p>Being a high minister is a tough job but not anything's extra hard than being a parent;British high Ministers Tony Blair as soon as stated. parents these days face fundamental challenges considering the fact that colleges demand excessive tiers of overall performance.Parenting therefore isn't just about citing your toddler,it's also about inspiring your child , making them passionate people and developing in them the triumphing to end up fantastic achievers in lifestyles.</p>
                        <p>for this reason our at some point workshop focuses on supporting mother and father to provide the exceptional to their infant and also assist support the determine toddler-relationship. The purpose is to help you create loving and supportive relationships you actually need together with your youngsters.</p>
                        <h4 class="title">via this program, dad and mom</h4>
                        <ul class="flat-list style1 style2">
                            <li>learn 21 realistic,clean- to-use secrets to effective parenting.</li>
                            <li>come to be extra privy to how they have an effect on their children and learn to relate to them in another way.</li>
                            <li>change restricting styles of questioning, feeling and behaving that restrict relationships with their children.</li>
                            <li>learn the significance of each study and lifestyles abilities.</li>
                            <li>learn how to respond as opposed to react to their kids.</li>


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
