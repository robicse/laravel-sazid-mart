@extends('frontend.layouts.master')
@section('title', 'Customer Dashboard')
@push('css')
<style>
    .shadow_effect{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.41);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.41);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.41);
    }
</style>
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Customer Dashboard</li>
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
                    <h1 class="text-center section-title" style="padding-top: 50px;">Customer Dashboard</h1>
                    <div class="row" style="padding-top: 50px;">
                        <div class="col-md-4 col-sm-12">
                            <div class="card text-white bg-primary mb-3 shadow_effect" style="max-width: 18rem; background: #D53343;">
                                <div class="card-header text-center" style="height: 10px; padding-top: 5px">Total Cart</div>
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="height: 100px; padding-top: 30px; font-size: 20px;">0</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card text-white bg-primary mb-3 shadow_effect" style="max-width: 18rem; background: #27A243;">
                                <div class="card-header text-center" style="height: 10px; padding-top: 5px">Total Order</div>
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="height: 100px; padding-top: 30px; font-size: 20px;">0</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card text-white bg-primary mb-3 shadow_effect" style="max-width: 18rem; background: #169DB2;">
                                <div class="card-header text-center" style="height: 10px; padding-top: 5px">Total Wishlist</div>
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="height: 100px; padding-top: 30px; font-size: 20px;">0</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
