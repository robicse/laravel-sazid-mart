<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Product;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index(){
        $newProducts = Product::where('published',1)->latest()->take(8)->get();
        $featuredProducts = Product::where('published',1)->where('featured',1)->latest()->take(8)->get();
        $bestSellerProducts = Product::where('published',1)->where('num_of_sale','>',1)->latest()->take(8)->get();
        $latestBlogs = Blog::where('status',1)->latest()->take(8)->get();
        return view('frontend.index',compact('newProducts','featuredProducts','bestSellerProducts','latestBlogs'));
    }
    public function register(Request $request) {
        $this->validate($request, [
            'name' =>  'required',
            'email' =>  'required|email|unique:users,email',
            'phone' => 'required|regex:/(01)[0-9]{9}/|unique:users',
            'password' => 'required|min:6',
        ]);
        $phn1 = (int)$request->phone;
        $check = User::where('phone',$phn1)->first();
        if (!empty($check)){
            Toastr::error('This phone number already exist');
            return back();
        }
        $userReg = new User();
        $userReg->name = $request->name;
        $userReg->email = $request->email;
        $userReg->phone= $request->phone;
        $userReg->password = Hash::make($request->password);
        $userReg->user_type = 'customer';
        $userReg->save();
//        dd($userReg);

        Session::put('phone',$request->phone);
        Session::put('password',$request->password);
        Session::put('user_type','customer');

        Toastr::success('Your registration successfully done!');
//        return redirect()->route('get-verification-code',$userReg->id);
        return redirect()->route('user.dashboard');


    }
}
