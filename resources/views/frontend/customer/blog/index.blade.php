@extends('frontend.layouts.master')
@section('title', 'Customer Blogs')
@push('css')
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.css')}}">
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="">Home</a></li>
                    <li class='active'>Customer Blog List</li>
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
                    <h1 class="text-center section-title" style="padding-top: 30px;">Blog List</h1>
                    <div class="float-right" style="margin-left: 700px; padding-bottom: 10px;">
                        <a href="{{route('user.blogs.create')}}">
                            <button class="btn btn-success">
                                <i class="fa fa-plus-circle"></i>
                                Add
                            </button>
                        </a>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $key => $blog)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->author}}</td>
                                    <td>
                                        <img src="{{asset('uploads/blogs/'.$blog->image)}}" width="80" height="40" alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-info waves-effect" href="{{route('user.blogs.edit',$blog->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger waves-effect" type="button"
                                                onclick="deleteCategory({{$blog->id}})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{$blog->id}}" action="{{route('user.blogs.destroy',$blog->id)}}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#Id</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

{{--                    <div class="shopping-cart">--}}
{{--                        <div class="shopping-cart-table ">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="cart-romove item">Id</th>--}}
{{--                                        <th class="cart-product-name item">Title</th>--}}
{{--                                        <th class="cart-description item">Author</th>--}}
{{--                                        <th class="cart-product-name item">Image</th>--}}
{{--                                        <th class="cart-edit item">Action</th>--}}
{{--                                        <th class="cart-qty item">Quantity</th>--}}
{{--                                        <th class="cart-sub-total item">Subtotal</th>--}}
{{--                                        <th class="cart-total last-item">Grandtotal</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead><!-- /thead -->--}}
{{--                                    <tfoot>--}}
{{--                                    <tr>--}}
{{--                                        <td colspan="7">--}}
{{--                                            <div class="shopping-cart-btn">--}}
{{--							<span class="">--}}
{{--								<a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>--}}
{{--								<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>--}}
{{--							</span>--}}
{{--                                            </div><!-- /.shopping-cart-btn -->--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>--}}
{{--                                        <td class="cart-image">--}}
{{--                                            <a class="entry-thumbnail" href="detail.html">--}}
{{--                                                <img src="assets/images/products/p1.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td class="cart-product-name-info">--}}
{{--                                            <h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-4">--}}
{{--                                                    <div class="rating rateit-small"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-sm-8">--}}
{{--                                                    <div class="reviews">--}}
{{--                                                        (06 Reviews)--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.row -->--}}
{{--                                            <div class="cart-product-info">--}}
{{--                                                <span class="product-color">COLOR:<span>Blue</span></span>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>--}}
{{--                                        <td class="cart-product-quantity">--}}
{{--                                            <div class="quant-input">--}}
{{--                                                <div class="arrows">--}}
{{--                                                    <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>--}}
{{--                                                    <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>--}}
{{--                                                </div>--}}
{{--                                                <input type="text" value="1">--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>--}}
{{--                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>--}}
{{--                                        <td class="cart-image">--}}
{{--                                            <a class="entry-thumbnail" href="detail.html">--}}
{{--                                                <img src="assets/images/products/p2.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td class="cart-product-name-info">--}}
{{--                                            <h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-4">--}}
{{--                                                    <div class="rating rateit-small"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-sm-8">--}}
{{--                                                    <div class="reviews">--}}
{{--                                                        (06 Reviews)--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.row -->--}}
{{--                                            <div class="cart-product-info">--}}
{{--                                                <span class="product-color">COLOR:<span>Pink</span></span>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>--}}
{{--                                        <td class="cart-product-quantity">--}}
{{--                                            <div class="cart-quantity">--}}
{{--                                                <div class="quant-input">--}}
{{--                                                    <div class="arrows">--}}
{{--                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>--}}
{{--                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>--}}
{{--                                                    </div>--}}
{{--                                                    <input type="text" value="1">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>--}}
{{--                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody><!-- /tbody -->--}}
{{--                                </table><!-- /table -->--}}
{{--                            </div>--}}
{{--                        </div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">--}}
{{--                        </div><!-- /.estimate-ship-tax -->--}}
{{--                    </div>--}}

            </div>
        </div>
@endsection
@push('js')
            <script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}"></script>
            <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
            <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
            <script>
                $(function () {
                    $("#example1").DataTable();
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false
                    });
                });

                //sweet alert
                function deleteCategory(id) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger',
                        buttonsStyling: false,
                        reverseButtons: true
                    }).then((result) => {
                        if (result.value) {
                            document.getElementById('delete-form-'+id).submit();
                        } else if (
                            // Read more about handling dismissals
                            result.dismiss === swal.DismissReason.cancel
                        ) {
                            swal(
                                'Cancelled',
                                'Your Data is save :)',
                                'error'
                            )
                        }
                    })
                }
            </script>
@endpush
