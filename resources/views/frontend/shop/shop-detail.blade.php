
@extends('frontend.layout.master-layout')

@section('title')
<title>Unitelearning || shop details</title>
@endsection
@section('body')
<!--shop details body content start--->
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
                                    <li class="trail-item"><a href="{{route('shop')}}">Products</a></li>
                                    <li class="trail-end">Hypnotherapy Learning</li>
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
                    <div class="flat-wrapper single-products woocommerce-page">
                        <div class="images">
                            <a class="popup-gallery" href="{{asset('frontend/images/products/1.jpg')}}"><img src="{{asset('frontend/images/products/1.jpg')}}" alt="images"></a>
                        </div>
                        <div class="summary">
                            <h3 class="product_title">Hypnotherapy Learning</h3>
                            <div class="product-rating">
                                <div class="star-rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <a href="#reviews" class="review-link">(<span class="count">1</span> customer review)</a>
                            </div>
                            <div>
                                <p class="price">£12.77</p>
                            </div>
                            <div class="description">
                                <p>Jimmy Petruzzi is the best-selling author of Excel at Sports, and Excel at Business, world-renowned performance coach, and Director of The NLP Centre of Excellence. For more than 15 years he has worked with top level athletes, Premiership football clubs, senior company executives and people from all backgrounds, helping them to reach the peak of their chosen field.</p>
                            </div>
                            <form class="cart">
                                <div class="quantity">
                                    <input type="number" min="1" value="1" class="input-text qty text">
                                </div>
                                <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                            <div class="product_meta">
                                <span class="posted_in">
                                    Categories:
                                    <a href="#">Finance &amp; Law</a>,
                                    <a href="#">Human Resources</a>
                                </span>
                                <span class="tagged_as">
                                    Tags:
                                    <a href="#">Book</a>,
                                    <a href="#">Sales</a>,
                                    <a href="#">Traning</a>
                                </span>
                            </div>
                        </div><!-- /.summary -->

                        <div class="flat-tabs woocommerce-tabs">
                            <ul class="menu-tabs">
                                <li class="active"><a href="#">Description</a></li>
                                <li><a href="#">Reviews (1)</a></li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner">
                                    <p>This sales training e-manual written by Jimmy Petruzzi is designed for those who want to learn how to be successful salespeople, particularly within business to business sales. Successful salespeople who close the deal understand how challenging it can be to do so and understand the theory behind sales and decision-making. This manual will be structured into units to make it easier for you to master. Each unit focuses on a distinct subject that will help you to understand how sales work and how to improve your ability to sell. At the end of the manual there will be an opportunity for you to develop a personal action plan that will help you to build on what you have learned and increase your chances of closing a greater number of deals in the future.</p>
                                </div><!-- /.content-inner -->

                                <div class="content-inner">
                                    <div class="woocommerce-reviews">
                                        <div id="comments">
                                            <ul class="commentlist">
                                                <li>
                                                    <div class="comment_container">
                                                        <img src="{{asset('frontend/images/icon/author.png')}}" alt="images" class="avatar">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>themesflat</strong> – <span>April 25, 2016</span>:
                                                            </p>
                                                            <div class="description">
                                                                I found this book very useful for referencing and gaining a better understanding in different areas. I would recommend this book to anyone who is studying to gain a CIPD qualification.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- /#comments -->

                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div class="comment-respond">
                                                    <h3 id="reply-title">Add a review</h3>
                                                    <form id="commentform" class="comment-form">
                                                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                        <p class="comment-form-rating">
                                                            <label>Your Rating</label>

                                                        </p>
                                                        <p class="stars">
                                                                <span><i class="fa fa-star-o"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                            </p>
                                                        <p class="comment-form-comment">
                                                            <label>Your Review <span class="required">*</span></label>
                                                            <textarea id="comment"></textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name <span class="required">*</span></label>
                                                            <input id="author" name="author" type="text">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span class="required">*</span></label>
                                                            <input id="email" name="email" type="email">
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /#review_form_wrapper -->
                                    </div>
                                </div><!-- /.content-inner -->

                            </div><!-- /.content-tab -->
                        </div><!-- /.flat-tabs -->

                        <div class="related">
                            <h2>Related Products</h2>
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
                            </ul>
                        </div><!-- /.related -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-about -->

        <!-- Footer -->
        @endsection
