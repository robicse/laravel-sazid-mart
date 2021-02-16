@extends('frontend.layouts.master')
@section('title', 'Register')
@push('css')
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Register</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in" style="padding-left: 70px">

                <form class="register-form outer-top-xs" role="form" action="{{ route('user.register') }}" method="POST">
                    @csrf
                    <h4 class="">Register</h4>
                    <div class="form-group">
                        <label class="info-title" for="name">Name </label>
                            <input class="form-control unicase-form-control text-input" type="text" name="name">
{{--                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >--}}
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="email">Email Address </label>
                        <input type="email" class="form-control unicase-form-control text-input" name="email">
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="phone">Phone Number </label>
                        <input type="text" class="form-control unicase-form-control text-input" name="phone" >
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="password">Password </label>
                        <input type="password" class="form-control unicase-form-control " name="password" >
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label class="info-title" for="password">Confirm Password </label>--}}
{{--                        <input type="password" class="form-control unicase-form-control text-input" id="password" >--}}
{{--                    </div>--}}
                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                </form>
                    </div>
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <img src="{{asset('frontend/register.jpg')}}" alt="" width="400" height="400">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
