<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        $allProducts = Product::where('published',1)->latest()->paginate(36);
        return view('frontend.pages.shop.product_list',compact('allProducts'));
    }
    public function productDetails($slug){
        $productDetails = Product::where('slug',$slug)->first();
        $photos=json_decode($productDetails->photos);
        return view('frontend.pages.shop.product_details',compact('productDetails','photos'));
    }
    public function productBySubcategory($slug){
        $subcategory = Subcategory::where('slug',$slug)->first();
        $SubCatProducts = Product::where('subcategory_id',$subcategory->id)->where('published',1)->latest()->paginate(36);
        return view('frontend.pages.shop.products_by_subcategory',compact('subcategory','SubCatProducts'));
    }
}
