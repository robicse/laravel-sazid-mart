@extends('frontend.layouts.master')
@section('title',$blog->title)
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Blog Details</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-9">
                        <div class="blog-post wow fadeInUp">
                            <img class="img-responsive" src="{{asset('uploads/blogs/'.$blog->image)}}" alt="">
                            <h1>{{$blog->title}}</h1>
                            <span class="author">{{$blog->author}}</span>
                            <span class="date-time">{{date('jS M Y',strtotime($blog->created_at))}}</span>
                            <p class="text-justify">{!! $blog->description !!}</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar">
                        <div class="sidebar-module-container">
                            <div class="home-banner outer-top-n outer-bottom-xs">
                                <img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image">
                            </div>

                            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">Latest Blog</h3>
                                <div class="tab-content" style="padding-left:0">
                                    <div class="tab-pane active m-t-20" >
                                        @foreach($latestBlogs as $latestBlog)
                                        <div class="blog-post inner-bottom-30 ">
                                            <img class="img-responsive" src="{{asset('uploads/blogs/'.$latestBlog->image)}}" alt="">
                                            <h4><a href="{{route('blog-details',$latestBlog->slug)}}">{{$latestBlog->title}}</a></h4>
                                            <span class="date-time">{{date('jS M Y',strtotime($latestBlog->created_at))}}</span>
                                            <p class="text-justify">{!! Str::limit($blog->short_description, 70) !!}</p>

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
