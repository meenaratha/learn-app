@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || shop</title>
@endsection
@section('body')
<!--shop body content start--->
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
                                    <li class="trail-end">Products</li>
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
                    <div class="flat-wrapper woocommerce woocommerce-page">
                        <p class="woocommerce-result-count">Showing 1–8 of 9 results</p>
                        <form class="woocommerce-ordering">
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>

                        <ul class="products">
                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}"><img src="{{asset('frontend/images/products/1.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Be A Better Sales Rep</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span>£</span>12.34</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}">
                                            <span class="onsale">Sale!</span>
                                            <img src="{{asset('frontend/images/products/2.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Employee Development</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <span class="price"><del><span class="amount"><span>£</span>12.34</span></del> <ins><span class="amount"><span>£</span>10.34</span></ins></span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}"><img src="{{asset('frontend/images/products/3.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Hypnotherapy Learning</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span>£</span>12.77</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}"><img src="{{asset('frontend/images/products/4.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Leadership Team Coaching</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span >£</span>19.28</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}"><img src="{{asset('frontend/images/products/5.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>New Action Selling</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span>£</span>4.28</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}">
                                            <img src="{{asset('frontend/images/products/6.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Resource Manual</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span>£</span>2.28</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}"><img src="{{asset('frontend/images/products/7.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Sales Training Tutorials</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span>£</span>21.44</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <a href="{{route('shop-details')}}"><img src="{{asset('frontend/images/products/8.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-info-wrap">
                                            <h3>Telling Ain’t Training</h3>
                                            <div class="star-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <span class="price">
                                                <span class="amount"><span >£</span>12.77</span>
                                            </span>
                                            <a class="button scheme2" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.products -->

                        <div class="woocommerce-pagination">
                            <ul class="page-numbers">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="next page-numbers" href="#">→</a></li>
                            </ul>
                        </div><!-- /.woocommerce-pagination -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
        <!-- Footer -->
       @endsection
