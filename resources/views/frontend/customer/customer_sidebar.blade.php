
<div class="avatar"><img src="{{url(Auth::User()->avatar_original)}}" alt="Image" style="border-radius:100%" width="80" height="80"></div>
<div class="clients_author" style="padding-bottom: 10px;">{{Auth::User()->name}} <span>{{Auth::User()->email}}</span>	</div>
<div class="side-menu animate-dropdown outer-bottom-xs">

    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <li class="dropdown menu-item">
{{--                <div class="dropdown-toggle"><i class="icon fa fa-align-justify fa-fw"></i> Dashboard</div>--}}
                <a href="{{route('user.dashboard')}}" class="{{Request::is('user/dashboard*') ? 'head' :''}}"><i class="icon fa fa-align-justify fa-fw" aria-hidden="true"></i>Dashboard</a>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="{{route('user.edit-profile')}}" class=" {{Request::is('user/edit-profile*') ? 'head' :''}}" ><i class="icon fa fa-user" aria-hidden="true"></i>Edit Profile</a>
            </li>

            <li class="dropdown menu-item">
                <a href="{{route('user.edit-password')}}" class="{{Request::is('user/edit-password*') ? 'head' :''}}" ><i class="icon fa fa-cog" aria-hidden="true"></i>Edit Password</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="{{route('user.order.history')}}" class="{{Request::is('user/order-history*') ? 'head' :''}}" ><i class="icon fa fa-cart-plus" aria-hidden="true"></i>Order History</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="{{route('user.wishlist')}}" class="{{Request::is('user/wishlist*') ? 'head' :''}}" ><i class="icon fa fa-heart"></i>Wishlist</a>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
            <a href="{{route('user.blogs.index')}}" class="{{Request::is('user/blogs*') ? 'head' :''}}" ><i class="icon fa fa-newspaper-o"></i>Write a Blog</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button href="#" class="dropdown-toggle side-menu" style="padding: 15px 185px 15px 20px; border: #fff;"><i class="icon fa fa-power-off"></i>  Logout</button>
                </form>
            </li><!-- /.menu-item -->

        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div>
