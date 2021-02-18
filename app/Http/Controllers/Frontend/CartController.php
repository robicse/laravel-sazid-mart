<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ProductStock;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartShow(){
        return view('frontend.pages.shop.shopping_cart');
    }
    public function checkout(){
        return view('frontend.pages.shop.checkout');
    }
    public function ProductAddCart(Request  $request) {
        $var=$request->variant;
        $product=Product::find($request->product_id);
//        if(Cart::count()!=0){
//            foreach (Cart::content() as $item){
//                if($product->user_id!=$item->options->shop_userid){
//                    Cart::destroy();
//                    break;
//                }
//            }
//        }

//        $shop=\App\Model\Shop::where('user_id',$product->user_id)->first();
        if($product->variant_product==null){
            $qty=$var[count($var)-1]['value'];
            $data = array();
            $data['id'] = $product->id;
            $data['name'] = $product->name;
            $data['qty'] = $qty;
            $data['price'] = $product->unit_price;
            $data['options']['image'] = $product->thumbnail_img;
            $data['options']['shipping_cost'] = 60;
            $data['options']['variant_id'] = null;
            $data['options']['variant'] = null;
            $data['options']['cart_type'] = "product";
//            if (!empty($flashSale) && $product->flash_sale == 1 && $flDateTime >= $currDateTime){
//                $data['price'] = $product->flash_sale_price;
//            }else {
//                $data['price'] = $product->sale_price;
//            }
            Cart::add($data);
            $data['countCart'] = Cart::count();
            //dd(Cart::content());
            return response()->json(['success'=> true, 'response'=>$data]);
        }else{
            $c=count($request->variant);
            $i=1;
            $v=[];
            for($i=1;$i<$c-1;$i++){
                array_push($v,$var[$i]['value']);
            }
            $implode=implode("-", $v);
            $variant=ProductStock::where('variant',$implode)->first();
            $qty=$var[count($var)-1]['value'];
            $data = array();
            $data['id'] = $product->id;
            $data['name'] = $product->name;
            $data['qty'] = $qty;
            $data['price'] = $variant->price;
            $data['options']['image'] = $product->thumbnail_img;
            $data['options']['shipping_cost'] = 60;
            $data['options']['variant_id'] = $variant->id;
            $data['options']['variant'] = $variant->variant;
            $data['options']['cart_type'] = "product";
//            if (!empty($flashSale) && $product->flash_sale == 1 && $flDateTime >= $currDateTime){
//                $data['price'] = $product->flash_sale_price;
//            }else {
//                $data['price'] = $product->sale_price;
//            }
            Cart::add($data);
            $data['countCart'] = Cart::count();
            $data['subtotal'] = Cart::subtotal();
//            $data['rowid'] = Cart::rowId;
//            dd(Cart::content());
            return response()->json(['success'=> true, 'response'=>$data]);
        }

    }
}
