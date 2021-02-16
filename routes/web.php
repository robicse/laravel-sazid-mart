<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('/shopping-cart', 'Frontend\CartController@viewCart')->name('shopping-cart');
Route::get('/shop', 'Frontend\ShopController@shop')->name('shop');
Route::get('/about-us', 'Frontend\AboutController@About')->name('about-us');
Route::get('/contact', 'Frontend\AboutController@contact')->name('contact-us');
Route::get('/faqs', 'Frontend\AboutController@faqs')->name('faqs');
Route::get('/our-policy', 'Frontend\AboutController@policy')->name('policy');
Route::get('/terms-and-conditions', 'Frontend\AboutController@terms')->name('terms-condition');
Route::get('/shipping', 'Frontend\AboutController@shipping')->name('shipping');
Route::get('/order-returns', 'Frontend\AboutController@returns')->name('returns');
Route::get('/add/wishlist/{id}', 'Frontend\WishlistController@wishlistAdd' )->name('add.wishlist');
Route::get('/remove/wishlist/{id}', 'Frontend\WishlistController@wishlistRemove' )->name('remove.wishlist');

//Blog
Route::get('/blog', 'Frontend\BlogController@index')->name('blog-list');
Route::get('/blog-details', 'Frontend\BlogController@details')->name('blog-details');


//Search
Route::get('/search/product', 'Frontend\VendorController@search_product');
Route::get('/search/shop', 'Frontend\VendorController@search_shop');
Route::get('/product/filter/{data}/sellerId/{sellerId}', 'Frontend\VendorController@productFilter');
Route::get('/featured-product/subcategories/filter/{data}/sellerId/{id}/sub/{subId}', 'Frontend\VendorController@FeaturedSubFilter');
Route::get('/todays-deal/product/filter/{data}/sellerId/{sellerId}', 'Frontend\VendorController@todaysDealFilter');
Route::get('/todays-deal/subcategories/filter/{data}/sellerId/{id}/sub/{subId}', 'Frontend\VendorController@todaysDealSubFilter');
Route::get('/best-selling/product/filter/{data}/sellerId/{sellerId}', 'Frontend\VendorController@bestSellingFilter');
Route::get('/best-selling/subcategories/filter/{data}/sellerId/{id}/sub/{subId}', 'Frontend\VendorController@bestSellingSubFilter');
Route::get('/brand/product/filter/{data}/sellerId/{id}/brnd/{brndId}', 'Frontend\VendorController@brandFilter');



Route::post('/registration','Frontend\FrontendController@register')->name('user.register');
Route::get('/get-verification-code/{id}', 'Frontend\VerificationController@getVerificationCode')->name('get-verification-code');
Route::post('/get-verification-code-store', 'Frontend\VerificationController@verification')->name('get-verification-code.store');
Route::get('/check-verification-code', 'Frontend\VerificationController@CheckVerificationCode')->name('check-verification-code');

//product
Route::get('/products', 'Frontend\ProductController@productList')->name('all-product-list');
Route::get('/product-details', 'Frontend\ProductController@productDetails')->name('product-details');


//Cart
Route::get('/cart', 'Frontend\CartController@cartShow')->name('show.cart');
Route::get('/checkout', 'Frontend\CartController@checkout')->name('checkout');


//Route::get('/product/{slug}', 'Frontend\ProductController@ProductDetails')->name('product-details');
//Route::post('/products/get/variant/price', 'Frontend\ProductController@ProductVariantPrice')->name('product.variant.price');
//Route::get('/products/{slug}', 'Frontend\ProductController@productList')->name('product.list');
//Route::get('/products/{name}/{slug}/{sub}', 'Frontend\ProductController@productSubCategory')->name('product.by.subcategory');
//Route::get('/products/{name}/{slug}', 'Frontend\ProductController@productByBrand')->name('product.by.brand');
//Route::post('/products/ajax/addtocart', 'Frontend\CartController@ProductAddCart')->name('product.add.cart');
//Route::get('/product/clear/cart', 'Frontend\CartController@clearCart')->name('product.clear.cart');
//Route::get('/product/remove/cart/{id}', 'Frontend\CartController@cartRemove')->name('product.cart.remove');
//Route::post('/cart/quantity_update', 'Frontend\CartController@quantityUpdate')->name('qty.update');

Route::get('/flash-deals/{slug}', 'Frontend\VendorController@flashdeal')->name('flash-deals');
Route::get('/todays-deal/{slug}', 'Frontend\VendorController@todaysDeal')->name('todays-deal-products');
Route::get('/todays-deal/{name}/{slug}/{sub}', 'Frontend\VendorController@todaysDealSubCategory');
Route::get('/best-selling/{slug}', 'Frontend\VendorController@bestSelling')->name('best-selling-products');
Route::get('/best-selling/{name}/{slug}/{sub}', 'Frontend\VendorController@bestSellingSubCategory');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'user']], function () {
    //this route only for with out resource controller
    Route::get('/user/dashboard', 'User\DashboardController@index')->name('user.dashboard');
    Route::get('/user/edit-profile', 'User\ProfileController@editProfile')->name('user.edit-profile');
    Route::post('/user/profile/update', 'User\ProfileController@updateProfile')->name('user.profile-update');
    Route::get('/user/edit-password', 'User\ProfileController@editPassword')->name('user.edit-password');
    Route::post('/user/password/update', 'User\ProfileController@updatePassword')->name('user.password-update');
    Route::get('/user/invoices', 'User\DashboardController@invoices')->name('user.invoices');
    Route::get('/user/notifications', 'User\DashboardController@notification')->name('user.notification');
//    Route::get('/user/address', 'User\DashboardController@address')->name('user.address');
//    Route::post('/user/address/update', 'User\DashboardController@updateAddress')->name('user.address-update');
    Route::get('/user/order-history', 'User\OrderManagementController@orderHistory')->name('user.order.history');
    Route::post('/user/order/review', 'User\OrderManagementController@reviewStore')->name('user.order.review.store');
    Route::get('order-details/invoice/print/{id}','User\OrderManagementController@printInvoice')->name('invoice.print');
    Route::get('/user/wishlist', 'User\DashboardController@wishlist')->name('user.wishlist');
    Route::get('/checkout', 'Frontend\CartController@checkout')->name('checkout');
    Route::post('/checkout/order/submit', 'Frontend\CartController@orderSubmit')->name('checkout.order.submit');
    //this route only for resource controller
    Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User',], function () {
        Route::resource('address', 'AddressController');
    });
    Route::post('/user/address-status/update/{id}', 'User\AddressController@updateStatus')->name('user.update.status');

});
//Route::get('/vendor/dashboard', 'Vendor\DashboardController@index')->name('vendor.dashboard');

