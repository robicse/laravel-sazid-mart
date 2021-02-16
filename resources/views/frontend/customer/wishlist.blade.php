@extends('frontend.layouts.master')
@section('title', 'Wishlist')
@push('css')
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="">Home</a></li>
                    <li class='active'>Wishlist</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu" >
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    @include('frontend.customer.customer_sidebar')
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder" >
                    <!-- ========================================== SECTION – HERO ========================================= -->
                    <h1 class="text-center section-title" style="padding-top: 50px;">Wishlist</h1>


                    <div class="row">
                        <div class="col-md-12 my-wishlist">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="4" class="heading-title">My Wishlist</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="col-md-2"><img src="{{asset('frontend/assets/images/products/p1.jpg')}}" alt="imga" width="124" height="135"></td>
                                        <td class="col-md-3">
                                            <div class="product-name"><a href="#">Floral Print Buttoned</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star non-rate"></i>
                                                <span class="review">( 06 Reviews )</span>
                                            </div>
                                            <div class="price">
                                                $400.00
                                                <span>$900.00</span>
                                            </div>
                                        </td>
                                        <td class="col-md-6">
                                            <a href="#" class="btn-upper btn btn-primary">Add to cart</a>
                                        </td>
                                        <td class="col-md-1 close-btn">
                                            <a href="#" class=""><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2"><img src="{{asset('frontend/assets/images/products/p2.jpg')}}" alt="phoro" width="124" height="135"></td>
                                        <td class="col-md-7">
                                            <div class="product-name"><a href="#">Floral Print Buttoned</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star non-rate"></i>
                                                <span class="review">( 06 Reviews )</span>
                                            </div>
                                            <div class="price">
                                                $450.00
                                                <span>$900.00</span>
                                            </div>
                                        </td>
                                        <td class="col-md-2">
                                            <a href="#" class="btn-upper btn btn-default">Add to cart</a>
                                        </td>
                                        <td class="col-md-1 close-btn">
                                            <a href="#" class=""><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- /.sigin-in-->
            </div>
@endsection
@push('js')

@endpush
