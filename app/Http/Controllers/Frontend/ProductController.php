<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        return view('frontend.pages.shop.product_list');
    }
    public function productDetails(){
        return view('frontend.pages.shop.product_details');
    }
}
