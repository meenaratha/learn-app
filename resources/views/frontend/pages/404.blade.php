@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || 404 Error</title>
@endsection
@section('body')
<!--404 error body content start--->
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
                                    <li class="trail-end">404 Not Found</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <div class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper page-404">
                        <div class="heading-404">
                            <img src="{{asset('frontend/images/404.png')}}" alt="images">
                        </div>
                        <div class="content-404">
                            <h3>Looks Like Something Went Wrong!</h3>
                            <p>The page you were looking for is not here. Maybe you want to perform a search?</p>
                            <div class="widget widget_search">
                                <form class="search-form">
                                    <input type="search" class="search-field" placeholder="Search …">
                                    <input type="submit" class="search-submit">
                                </form>
                            </div>
                        </div><!-- /.content-404 -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.blog -->

        @endsection
