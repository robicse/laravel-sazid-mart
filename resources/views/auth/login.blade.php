@extends('frontend.layouts.master')
@section('title', 'Login')
@section('content')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content">
        <div class="container">
            <div class="sign-in-page" style="padding: 30px 300px 80px 300px; background: #f3f3f3;">
                <h4 class="">Login</h4>

                <form class="register-form outer-top-xs" role="form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="info-title" for="phone">Phone Number </label>
                                <input id="phone" type="text" class="form-control unicase-form-control text-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Password </label>
                                <input id="password" type="password" class="form-control unicase-form-control text-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="radio outer-xs">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                                </label>
                                <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection

