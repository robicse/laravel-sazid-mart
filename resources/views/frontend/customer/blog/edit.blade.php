@extends('frontend.layouts.master')
@section('title', 'Edit Blogs')
@push('css')

@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="">Home</a></li>
                    <li class='active'>Customer Blog Edit</li>
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
                    <h1 class="text-center section-title" style="padding-top: 30px;">Blog Edit</h1>
                    <form class="register-form outer-top-xs" role="form" action="{{ route('user.blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data" style="padding-top: 20px;">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="info-title" for="title">Blog Title</label>
                                    <input class="form-control unicase-form-control text-input" type="text" name="title" placeholder="Enter Blog Title" value="{{$blog->title}}">
                                    {{--                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >--}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <img src="{{asset('uploads/blogs/'.$blog->image)}}" alt="" width="80" height="50">
                                    <label>Blog Image </label>
                                    <input type="file"  name="image" class="form-control"  >
                                    {{--  <input class="form-control" type="email" name="email" value="{{ Auth::User()->email }}" placeholder="Please enter your email...">--}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="description">Description</label>
                            <textarea id="description" name="description" class="form-control">{!! $blog->description !!}</textarea>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endpush
