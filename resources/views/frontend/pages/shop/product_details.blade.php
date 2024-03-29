@extends('frontend.layouts.master')
@section('title',$productDetails->name)
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li class='active'>{{$productDetails->name}}</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n">
                            <img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image">
                        </div>



                        <!-- ============================================== HOT DEALS ============================================== -->
                        <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                            <h3 class="section-title">hot deals</h3>
                            <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">

                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image">
                                                <img src="{{asset('frontend/assets/images/hot-deals/p5.jpg')}}" alt="">
                                            </div>
                                            <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                            <div class="timing-wrapper">
                                                <div class="box-wrapper">
                                                    <div class="date box">
                                                        <span class="key">120</span>
                                                        <span class="value">Days</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper">
                                                    <div class="hour box">
                                                        <span class="key">20</span>
                                                        <span class="value">HRS</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper">
                                                    <div class="minutes box">
                                                        <span class="key">36</span>
                                                        <span class="value">MINS</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper hidden-md">
                                                    <div class="seconds box">
                                                        <span class="key">60</span>
                                                        <span class="value">SEC</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.hot-deal-wrapper -->

                                        <div class="product-info text-left m-t-20">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>

                                            <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                                <span class="price-before-discount">$800.00</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->

                                        <div class="cart clearfix animate-effect">
                                            <div class="action">

                                                <div class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </div>

                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image">
                                                <img src="{{asset('frontend/assets/images/products/p6.jpg')}}" alt="">
                                            </div>
                                            <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                            <div class="timing-wrapper">
                                                <div class="box-wrapper">
                                                    <div class="date box">
                                                        <span class="key">120</span>
                                                        <span class="value">Days</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper">
                                                    <div class="hour box">
                                                        <span class="key">20</span>
                                                        <span class="value">HRS</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper">
                                                    <div class="minutes box">
                                                        <span class="key">36</span>
                                                        <span class="value">MINS</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper hidden-md">
                                                    <div class="seconds box">
                                                        <span class="key">60</span>
                                                        <span class="value">SEC</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.hot-deal-wrapper -->

                                        <div class="product-info text-left m-t-20">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>

                                            <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                                <span class="price-before-discount">$800.00</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->

                                        <div class="cart clearfix animate-effect">
                                            <div class="action">

                                                <div class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </div>

                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image">
                                                <img src="{{asset('frontend/assets/images/products/p7.jpg')}}" alt="">
                                            </div>
                                            <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                            <div class="timing-wrapper">
                                                <div class="box-wrapper">
                                                    <div class="date box">
                                                        <span class="key">120</span>
                                                        <span class="value">Days</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper">
                                                    <div class="hour box">
                                                        <span class="key">20</span>
                                                        <span class="value">HRS</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper">
                                                    <div class="minutes box">
                                                        <span class="key">36</span>
                                                        <span class="value">MINS</span>
                                                    </div>
                                                </div>

                                                <div class="box-wrapper hidden-md">
                                                    <div class="seconds box">
                                                        <span class="key">60</span>
                                                        <span class="value">SEC</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.hot-deal-wrapper -->

                                        <div class="product-info text-left m-t-20">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>

                                            <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                                <span class="price-before-discount">$800.00</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->

                                        <div class="cart clearfix animate-effect">
                                            <div class="action">

                                                <div class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </div>

                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div>
                                </div>


                            </div><!-- /.sidebar-widget -->
                        </div>
                        <!-- ============================================== HOT DEALS: END ============================================== -->					<!-- ==============================================

<!-- ============================================== NEWSLETTER ============================================== -->
                        <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
                            <h3 class="section-title">Newsletters</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <p>Sign Up for Our Newsletter!</p>
                                <form role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                                    </div>
                                    <button class="btn btn-primary">Subscribe</button>
                                </form>
                            </div><!-- /.sidebar-widget-body -->
                        </div><!-- /.sidebar-widget -->
                        <!-- ============================================== NEWSLETTER: END ============================================== -->

                        <!-- ============================================== Testimonials============================================== -->
                        <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                            <div id="advertisement" class="advertisement">
                                <div class="item">
                                    <div class="avatar"><img src="{{asset('frontend/assets/images/testimonials/member1.png')}}" alt="Image"></div>
                                    <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                    <div class="clients_author">John Doe	<span>Abc Company</span>	</div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                                <div class="item">
                                    <div class="avatar"><img src="{{asset('frontend/assets/images/testimonials/member3.png')}}" alt="Image"></div>
                                    <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                    <div class="clients_author">Stephen Doe	<span>Xperia Designs</span>	</div>
                                </div><!-- /.item -->

                                <div class="item">
                                    <div class="avatar"><img src="{{asset('frontend/assets/images/testimonials/member2.png')}}" alt="Image"></div>
                                    <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                    <div class="clients_author">Saraha Smith	<span>Datsun &amp; Co</span>	</div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                            </div><!-- /.owl-carousel -->
                        </div>

                        <!-- ============================================== Testimonials: END ============================================== -->



                    </div>
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">

                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">

                                    <div id="owl-single-product">
                                        @foreach($photos as $photo)
                                        <div class="single-product-gallery-item" id="{{$photo}}">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{{url($photo)}}">
                                                <img class="img-responsive" alt="" src="{{url($photo)}}" data-echo="{{url($photo)}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        @endforeach

{{--                                        <div class="single-product-gallery-item" id="slide2">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p9.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p9.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide3">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p10.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p10.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide4">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p11.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p11.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide5">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p12.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p12.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide6">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p13.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p13.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide7">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p14.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p14.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide8">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p15.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p15.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

{{--                                        <div class="single-product-gallery-item" id="slide9">--}}
{{--                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('frontend/assets/images/products/p16.jpg')}}">--}}
{{--                                                <img class="img-responsive" alt="" src="{{asset('frontend/assets/images/blank.gif')}}" data-echo="{{asset('frontend/assets/images/products/p16.jpg')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.single-product-gallery-item -->--}}

                                    </div><!-- /.single-product-slider -->


                                    <div class="single-product-gallery-thumbs gallery-thumbs">

                                        <div id="owl-single-product-thumbnails">
                                            @foreach($photos as $photo)
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#{{$photo}}">
                                                    <img class="img-responsive" width="85" alt="" src="{{url($photo)}}" data-echo="{{url($photo)}}" />
                                                </a>
                                            </div>
                                            @endforeach
                                        </div><!-- /#owl-single-product-thumbnails -->



                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name">{{$productDetails->name}}</h1>

                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="rating rateit-small"></div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(13 Reviews)</a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value">In Stock</span>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-20">
                                        <div class="row">


                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    <span class="price">৳ {{$productDetails->purchase_price}}</span>
                                                    <span class="price-strike">৳ {{$productDetails->unit_price}}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="favorite-button m-t-10">
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <span class="label">Qty :</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                            <div class="arrow plus gradient up"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient down"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input type="text" value="1" class="qtty">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <a href="#" class="btn btn-primary" id="add_to_cart"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->






                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">{!! $productDetails->description !!}</p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Customer Reviews</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                                    </div>

                                                </div><!-- /.reviews -->
                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="cell-label">&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="cell-label">Quality</td>
                                                                <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Price</td>
                                                                <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Value</td>
                                                                <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form role="form" class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                    </div><!-- /.form-group -->
                                                                </div>
                                                            </div><!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                            </div><!-- /.action -->

                                                        </form><!-- /.cnt-form -->
                                                    </div><!-- /.form-container -->
                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                                </div><!-- /.form-container -->
                                            </form><!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                </div>
                                            </form><!-- /.form-cnt -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">upsell products</h3>
                        <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p1.jpg')}}" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p2.jpg')}}" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p3.jpg')}}" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img  src="{{asset('frontend/assets/images/products/p4.jpg')}}" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div><!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div>
@endsection
@push('js')
    <script>
        $('.qtty').val(1);
        $('#option-choice-form input').on('change', function(){
            getVariantPrice($('#option-choice-form').serializeArray());
            console.log($('#option-choice-form').serializeArray());
        });
        $('#add_to_cart').on('click', function(e){
            e.preventDefault();
            //getVariantPrice($('#option-choice-form').serializeArray());
            addtocart($('#option-choice-form').serializeArray());
        });
        $('.up').on('click', function(event){
            event.preventDefault();
            var val=$('.qtty').val();
            var price=$('.price').html();
            var base_price=$('.base_price').val();
            var base_qty=$('.base_qty').val();
            // console.log(typeof base_qty);
            // console.log(typeof val);
            if(parseInt(val)<parseInt(base_qty)){
                $('.qtty').val(parseInt(val)+1);
                $('.price').html(parseInt(base_price)*(parseInt(val)+1));
            }
        });
        $('.down').on('click', function(event){
            event.preventDefault();
            var val=$('.qtty').val();
            var price=$('.price').html();
            var base_price=$('.base_price').val();
            if(parseInt(val)>1){
                $('.qtty').val(parseInt(val)-1);
                $('.price').html(parseInt(price)-parseInt(base_price));
            }
        });
        function getVariantPrice(array){
            console.log(array);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('product.variant.price')}}",
                method: "post",
                data:{
                    variant:array,
                },
                success: function(data){
                    console.log(data.response.price)
                    $('.price').html(data.response.price);
                    $('.base_price').val(data.response.price);
                    $('.aval').html(data.response.qty+" available");
                    $('.qtty').val(1);
                    $('.base_qty').val(data.response.qty);
                    //toastr.success('Lab Test added in your cart <span style="font-size: 25px;">&#10084;&#65039;</span>');
                }
            });
        }

        function addtocart(array){
            //console.log(array);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('product.add.cart')}}",
                method: "post",
                data:{
                    variant:array,
                    product_id: "{{$productDetails->id}}",
                    product_name:"{{$productDetails->name}}",
                    product_price:"{{$productDetails->unit_price}}",
                },
                success: function(data){
                    console.log(data.response)
                    $('.cart_count').html(data.response.countCart);
                    $('.cart_item').append(`<div class="ps-product--cart-mobile">
                                            <div class="ps-product__thumbnail"><a href="#"><img src="/${data.response['options'].image}" alt=""></a></div>
                                            <div class="ps-product__content"><a class="ps-product__remove" href=""><i class="icon-cross"></i></a><a href="#">${data.response.name}</a>
                                                <p><small>${data.response.qty} x ${data.response.price}</small>
                                            </div>
                                        </div>`);
                    $('.subTotal').html(data.response.subtotal);
                    // $('.base_price').val(data.response.price);
                    // $('.aval').html(data.response.qty+" available");
                    // $('.qtty').val(1);
                    // $('.base_qty').val(data.response.qty);
                    //toastr.success('Lab Test added in your cart <span style="font-size: 25px;">&#10084;&#65039;</span>');
                }
            });
        }
    </script>
@endpush
