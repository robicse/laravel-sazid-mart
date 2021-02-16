@extends('frontend.layouts.master')
@section('title', 'Customer Edit Password')
@push('css')
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Customer Edit Password</li>
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
                    <h1 class="text-center section-title" style="padding-top: 50px;">Customer Edit Password</h1>
                    <form class="register-form outer-top-xs" role="form" action="{{ route('user.password-update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="info-title" for="old_password">Old Password</label>
                                    <input class="form-control unicase-form-control text-input" type="password" name="old_password" placeholder="Enter Current Password">
                                    {{--                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >--}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="info-title" for="password">New Password</label>
                                    <input type="password" class="form-control unicase-form-control text-input" name="password" placeholder="Enter New Password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
