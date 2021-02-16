@extends('frontend.layouts.master')
@section('title', 'Order History')
@push('css')
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="">Home</a></li>
                    <li class='active'>Order History</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
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
                    <h1 class="text-center section-title" style="padding-top: 50px;">Order History</h1>

                                <div class="shopping-cart">
                                    <div class="shopping-cart-table ">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="cart-romove item">Remove</th>
                                                    <th class="cart-description item">Image</th>
                                                    <th class="cart-product-name item">Product Name</th>
                                                    <th class="cart-edit item">Edit</th>
                                                    <th class="cart-qty item">Quantity</th>
                                                    <th class="cart-sub-total item">Subtotal</th>
                                                    <th class="cart-total last-item">Grandtotal</th>
                                                </tr>
                                                </thead><!-- /thead -->
                                                <tfoot>
                                                <tr>
                                                    <td colspan="7">
                                                        <div class="shopping-cart-btn">
							<span class="">
								<a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
							</span>
                                                        </div><!-- /.shopping-cart-btn -->
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <tr>
                                                    <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="cart-image">
                                                        <a class="entry-thumbnail" href="detail.html">
                                                            <img src="assets/images/products/p1.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td class="cart-product-name-info">
                                                        <h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="rating rateit-small"></div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="reviews">
                                                                    (06 Reviews)
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                        <div class="cart-product-info">
                                                            <span class="product-color">COLOR:<span>Blue</span></span>
                                                        </div>
                                                    </td>
                                                    <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                                                    <td class="cart-product-quantity">
                                                        <div class="quant-input">
                                                            <div class="arrows">
                                                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                            </div>
                                                            <input type="text" value="1">
                                                        </div>
                                                    </td>
                                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="cart-image">
                                                        <a class="entry-thumbnail" href="detail.html">
                                                            <img src="assets/images/products/p2.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td class="cart-product-name-info">
                                                        <h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="rating rateit-small"></div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="reviews">
                                                                    (06 Reviews)
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                        <div class="cart-product-info">
                                                            <span class="product-color">COLOR:<span>Pink</span></span>
                                                        </div>
                                                    </td>
                                                    <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                                                    <td class="cart-product-quantity">
                                                        <div class="cart-quantity">
                                                            <div class="quant-input">
                                                                <div class="arrows">
                                                                    <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                                    <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                                </div>
                                                                <input type="text" value="1">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
                                                </tr>
                                                </tbody><!-- /tbody -->
                                            </table><!-- /table -->
                                        </div>
                                    </div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">
                                    </div><!-- /.estimate-ship-tax -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
