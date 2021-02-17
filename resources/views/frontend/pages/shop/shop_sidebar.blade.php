<div class="sidebar-filter">
    <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
    @php
    $categories = \App\Model\Category::where('is_home',1)->get();
    @endphp
    <div class="sidebar-widget wow fadeInUp">
        <h3 class="section-title">shop by</h3>
        <div class="widget-header">
            <h4 class="widget-title">Category</h4>
        </div>
        <div class="sidebar-widget-body">
            <div class="accordion">
                @foreach($categories as $category)
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a href="#{{$category->id}}" data-toggle="collapse" class="accordion-toggle collapsed">
                            {{$category->name}}
                        </a>
                    </div><!-- /.accordion-heading -->
                    @php
                    $subcategories = \App\Model\Subcategory::where('category_id',$category->id)->get();
                    @endphp
                    <div class="accordion-body collapse" id="{{$category->id}}" style="height: 0px;">
                        <div class="accordion-inner">
                            <ul>
                                @foreach($subcategories as $subcategory)
                                <li><a href="{{route('products-by-subcategory',$subcategory->slug)}}">{{$subcategory->name}}</a></li>
                                @endforeach

                            </ul>
                        </div><!-- /.accordion-inner -->
                    </div><!-- /.accordion-body -->
                </div><!-- /.accordion-group -->
                @endforeach

{{--                <div class="accordion-group">--}}
{{--                    <div class="accordion-heading">--}}
{{--                        <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                            Desktops--}}
{{--                        </a>--}}
{{--                    </div><!-- /.accordion-heading -->--}}
{{--                    <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">--}}
{{--                        <div class="accordion-inner">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">gaming</a></li>--}}
{{--                                <li><a href="#">office</a></li>--}}
{{--                                <li><a href="#">kids</a></li>--}}
{{--                                <li><a href="#">for women</a></li>--}}
{{--                            </ul>--}}
{{--                        </div><!-- /.accordion-inner -->--}}
{{--                    </div><!-- /.accordion-body -->--}}
{{--                </div><!-- /.accordion-group -->--}}

{{--                <div class="accordion-group">--}}
{{--                    <div class="accordion-heading">--}}
{{--                        <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                            Pants--}}
{{--                        </a>--}}
{{--                    </div><!-- /.accordion-heading -->--}}
{{--                    <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">--}}
{{--                        <div class="accordion-inner">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">gaming</a></li>--}}
{{--                                <li><a href="#">office</a></li>--}}
{{--                                <li><a href="#">kids</a></li>--}}
{{--                                <li><a href="#">for women</a></li>--}}
{{--                            </ul>--}}
{{--                        </div><!-- /.accordion-inner -->--}}
{{--                    </div><!-- /.accordion-body -->--}}
{{--                </div><!-- /.accordion-group -->--}}

{{--                <div class="accordion-group">--}}
{{--                    <div class="accordion-heading">--}}
{{--                        <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                            Bags--}}
{{--                        </a>--}}
{{--                    </div><!-- /.accordion-heading -->--}}
{{--                    <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">--}}
{{--                        <div class="accordion-inner">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">gaming</a></li>--}}
{{--                                <li><a href="#">office</a></li>--}}
{{--                                <li><a href="#">kids</a></li>--}}
{{--                                <li><a href="#">for women</a></li>--}}
{{--                            </ul>--}}
{{--                        </div><!-- /.accordion-inner -->--}}
{{--                    </div><!-- /.accordion-body -->--}}
{{--                </div><!-- /.accordion-group -->--}}

{{--                <div class="accordion-group">--}}
{{--                    <div class="accordion-heading">--}}
{{--                        <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                            Hats--}}
{{--                        </a>--}}
{{--                    </div><!-- /.accordion-heading -->--}}
{{--                    <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">--}}
{{--                        <div class="accordion-inner">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">gaming</a></li>--}}
{{--                                <li><a href="#">office</a></li>--}}
{{--                                <li><a href="#">kids</a></li>--}}
{{--                                <li><a href="#">for women</a></li>--}}
{{--                            </ul>--}}
{{--                        </div><!-- /.accordion-inner -->--}}
{{--                    </div><!-- /.accordion-body -->--}}
{{--                </div><!-- /.accordion-group -->--}}

{{--                <div class="accordion-group">--}}
{{--                    <div class="accordion-heading">--}}
{{--                        <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                            Accessories--}}
{{--                        </a>--}}
{{--                    </div><!-- /.accordion-heading -->--}}
{{--                    <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">--}}
{{--                        <div class="accordion-inner">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">gaming</a></li>--}}
{{--                                <li><a href="#">office</a></li>--}}
{{--                                <li><a href="#">kids</a></li>--}}
{{--                                <li><a href="#">for women</a></li>--}}
{{--                            </ul>--}}
{{--                        </div><!-- /.accordion-inner -->--}}
{{--                    </div><!-- /.accordion-body -->--}}
{{--                </div><!-- /.accordion-group -->--}}

            </div><!-- /.accordion -->
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

    <!-- ============================================== PRICE SILDER============================================== -->
    <div class="sidebar-widget wow fadeInUp">
        <div class="widget-header">
            <h4 class="widget-title">Price Slider</h4>
        </div>
        <div class="sidebar-widget-body m-t-10">
            <div class="price-range-holder">
      	    <span class="min-max">
                 <span class="pull-left">$200.00</span>
                 <span class="pull-right">$800.00</span>
            </span>
                <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">

                <input type="text" class="price-slider" value="" >

            </div><!-- /.price-range-holder -->
            <a href="#" class="lnk btn btn-primary">Show Now</a>
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== PRICE SILDER : END ============================================== -->
    <!-- ============================================== MANUFACTURES============================================== -->
   @php
   $brands = \App\Model\Brand::all();
    @endphp
    <div class="sidebar-widget wow fadeInUp">
        <div class="widget-header">
            <h4 class="widget-title">Manufactures</h4>
        </div>
        <div class="sidebar-widget-body">
            <ul class="list">
                @foreach($brands as $brand)
                <li><a href="#">{{$brand->name}}</a></li>
                @endforeach
{{--                <li><a href="#">Nike</a></li>--}}
{{--                <li><a href="#">Dolce & Gabbana</a></li>--}}
{{--                <li><a href="#">Alluare</a></li>--}}
{{--                <li><a href="#">Chanel</a></li>--}}
{{--                <li><a href="#">Other Brand</a></li>--}}
            </ul>
            <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== MANUFACTURES: END ============================================== -->
    <!-- ============================================== COLOR============================================== -->
    <div class="sidebar-widget wow fadeInUp">
        <div class="widget-header">
            <h4 class="widget-title">Colors</h4>
        </div>
        <div class="sidebar-widget-body">
            <ul class="list">
                <li><a href="#">Red</a></li>
                <li><a href="#">Blue</a></li>
                <li><a href="#">Yellow</a></li>
                <li><a href="#">Pink</a></li>
                <li><a href="#">Brown</a></li>
                <li><a href="#">Teal</a></li>
            </ul>
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== COLOR: END ============================================== -->
    <!-- ============================================== COMPARE============================================== -->
    <div class="sidebar-widget wow fadeInUp outer-top-vs">
        <h3 class="section-title">Compare products</h3>
        <div class="sidebar-widget-body">
            <div class="compare-report">
                <p>You have no <span>item(s)</span> to compare</p>
            </div><!-- /.compare-report -->
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== COMPARE: END ============================================== -->
    <!-- ============================================== PRODUCT TAGS ============================================== -->
    <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
        <h3 class="section-title">Product tags</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                <a class="item" title="Phone" href="category.html">Phone</a>
                <a class="item active" title="Vest" href="category.html">Vest</a>
                <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                <a class="item" title="Furniture" href="category.html">Furniture</a>
                <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                <a class="item" title="Toys" href="category.html">Toys</a>
                <a class="item" title="Rose" href="category.html">Rose</a>
            </div><!-- /.tag-list -->
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== PRODUCT TAGS : END ============================================== -->		            	<!-- <!-- ============================================== Testimonials============================================== -->


    <!-- ============================================== Testimonials: END ============================================== -->

    <div class="home-banner">
        <img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image">
    </div>

</div><!-- /.sidebar-filter -->
