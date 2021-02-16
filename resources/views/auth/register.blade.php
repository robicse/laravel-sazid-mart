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
            <div class="sign-in-page" style="padding: 30px 300px 80px 300px; background: #f3f3f3;">
                <h4 class="">Register</h4>
                <form class="register-form outer-top-xs" role="form" action="{{ route('user.register') }}" method="POST">
                    @csrf

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
        </div>
    </div>
@endsection
@push('js')
@endpush
