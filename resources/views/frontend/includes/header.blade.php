<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown" style="background: #83B735;">
        <div class="container">
            <div class="header-top-inner">
                <div class="" style="color: white; font-size: 14px;">
                    <span><strong>WELCOME TO SAZID MART| YOUR TRUSTED ONLINE SHOPPING MALL</strong></span>
                </div>
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                        <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header" style="background: #f3f3f3;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{url('/')}}">

                            <img src="{{asset('frontend/logo_sazidmart.png')}}" alt="">

                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">

                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">

                                        <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

                                        <ul class="dropdown-menu" role="menu" >
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>

                                        </ul>
                                    </li>
                                </ul>

                                <input class="search-field" placeholder="Search here..." />

                                <a class="search-button" href="#" ></a>

                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
{{--                    <span>Login</span>--}}
                    <div class="dropdown dropdown-cart">
                        @if(Auth::guest())
                            <a href="{{route('login')}}" class="dropdown-toggle lnk-cart">
                                <div class="items-cart-inner">
                                    <div class="basket" style="color:#000;">
                                        <span>Login</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('register')}}" class="dropdown-toggle lnk-cart">
                                <div class="items-cart-inner">
                                    <div class="basket" style="color:#000;">
                                        <span>Register</span>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{route('login')}}" class="dropdown-toggle lnk-cart">
                                <div class="items-cart-inner">
                                    <div class="basket" style="color:#000;">
                                        <span>{{Auth::User()->name}}</span>
                                    </div>
                                </div>
                            </a>
                            <form class="dropdown-toggle lnk-cart" action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-success" style="margin-top: -35px;">Logout</button>
                            </form>
                        @endif

                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket" style="color:#000;">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                            </div>
                        </a>
{{--                                <div class="basket" style="color:#000;">--}}
{{--                                    <span> Register</span>--}}
{{--                                </div>--}}
{{--                                <div class="basket" style="color:#000;">--}}
{{--                                    <i class="glyphicon glyphicon-shopping-cart"></i>--}}
{{--                                </div>--}}
{{--                                --}}{{--                                <div class="basket-item-count"><span class="count">2</span></div>--}}

{{--                                <div class="total-price-basket">--}}
{{--                                    --}}{{--                                    <span class="lbl">cart -</span>--}}
{{--                                    --}}{{--                                    <span class="total-price">--}}
{{--                                    --}}{{--						<span class="sign">$</span><span class="value">600.00</span>--}}
{{--                                    --}}{{--					</span>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </a>--}}
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html"><img src="{{asset('frontend/assets/images/cart.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>

                                <div class="clearfix cart-total">
                                    <div class="pull-right">

                                        <span class="text">Sub Total :</span><span class='price'>$600.00</span>

                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div><!-- /.cart-total-->


                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="dropdown yamm-fw {{Request::is('/') ? 'active' :''}}">
                                    <a href="{{url('/')}}" data-hover="dropdown" >Home</a>

                                </li>
                                <li class="dropdown yamm mega-menu {{Request::is('about-us*') ? 'active' :''}}">
                                    <a href="{{route('about-us')}}" data-hover="dropdown" >About Us</a>

                                </li>

                                <li class="dropdown mega-menu {{Request::is('products*') ? 'active' :''}}">
                                    <a href="{{route('all-product-list')}}"  data-hover="dropdown" >Shop
                                    </a>
                                </li>
                                <li class="dropdown mega-menu {{Request::is('blog*') ? 'active' :''}}">
                                    <a href="{{route('blog-list')}}"  data-hover="dropdown" >Blog
                                    </a>
                                </li>
                                <li class="dropdown mega-menu {{Request::is('contact*') ? 'active' :''}}">
                                    <a href="{{route('contact-us')}}"  data-hover="dropdown" >Contact Us
                                    </a>
                                </li>

                                <li class="dropdown  navbar-right special-menu">
                                    <a href="#">Special offer</a>
                                </li>


                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->

    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>
