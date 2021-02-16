@extends('frontend.layouts.master')
@section('title', 'Customer Edit Profile')
@push('css')
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Customer Edit Profile</li>
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
                    <h1 class="text-center section-title" style="padding-top: 50px;">Customer Edit Profiled</h1>
                    <form class="register-form outer-top-xs" role="form" action="{{ route('user.profile-update') }}" method="POST" enctype="multipart/form-data" style="padding-top: 20px;">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="info-title" for="name">Name </label>
                                    <input class="form-control unicase-form-control text-input" type="text" name="name" value="{{Auth::User()->name}}">
                                    {{--                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >--}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="info-title" for="email">Email Address </label>
                                    <input type="email" class="form-control unicase-form-control text-input" name="email" value="{{Auth::User()->email}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="info-title" for="phone">Phone Number </label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="phone" value="{{Auth::User()->phone}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Profile Image </label>
                                    <input type="file"  name="avatar_original" class="form-control"  >
                                    {{--  <input class="form-control" type="email" name="email" value="{{ Auth::User()->email }}" placeholder="Please enter your email...">--}}
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
