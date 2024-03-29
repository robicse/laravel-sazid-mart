<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('be-a-seller', 'Seller\AuthController@ShowRegForm')->name('seller.registration');
Route::post('be-a-seller/store', 'Seller\AuthController@store')->name('seller.registration.store');
//Route::post('/admin/login', 'Admin\AuthController@LoginCheck')->name('admin.login.check');
Route::group(['as'=>'seller.','prefix' =>'seller', 'middleware' => ['auth', 'seller']], function(){
    Route::get('dashboard','Seller\DashboardController@index')->name('dashboard');

    Route::resource('products','Seller\ProductController');
    Route::resource('shop','Seller\ShopController');
    Route::resource('seller-info','Seller\SellerInfoController');
    Route::resource('flash_deals','Seller\FlashDealController');
    Route::post('/flash_deals/update_status', 'Seller\FlashDealController@update_status')->name('flash_deals.update_status');
    Route::post('/flash_deals/update_featured', 'Seller\FlashDealController@update_featured')->name('flash_deals.update_featured');
    Route::post('/flash_deals/product_discount', 'Seller\FlashDealController@product_discount')->name('flash_deals.product_discount');
    Route::post('/flash_deals/product_discount_edit', 'Seller\FlashDealController@product_discount_edit')->name('flash_deals.product_discount_edit');

    Route::get('shop/manage/{slug}','Seller\ShopController@dataUpdate')->name('shop.manage');

    //Seller Order Management
    Route::get('order/pending','Seller\OrderManagementController@pendingOrder')->name('order.pending');
    Route::get('order/on-reviewed','Seller\OrderManagementController@onReviewedOrder')->name('order.on-reviewed');
    Route::get('order/on-delivered','Seller\OrderManagementController@onDeliveredOrder')->name('order.on-delivered');
    Route::get('order/delivered','Seller\OrderManagementController@deliveredOrder')->name('order.delivered');
    Route::get('order/completed','Seller\OrderManagementController@completedOrder')->name('order.completed');
    Route::get('order/canceled','Seller\OrderManagementController@canceledOrder')->name('order.canceled');
    Route::get('order-product/status-change/{id}','Seller\OrderManagementController@OrderProductChangeStatus')->name('order-product.status');
    Route::get('order-details/{id}','Seller\OrderManagementController@orderDetails')->name('order-details');
    Route::get('order-details/invoice/print/{id}','Seller\OrderManagementController@printInvoice')->name('invoice.print');

    Route::get('profile','Seller\ProfileController@profile')->name('profile.show');
    Route::put('profile/update/{id}','Seller\ProfileController@profile_update')->name('profile.update');
    Route::get('password','Seller\ProfileController@password')->name('password.edit');
    Route::post('password/update','Seller\ProfileController@password_update')->name('password.update');
    Route::get('payment/settings','Seller\ProfileController@payment')->name('payment.settings');
    Route::post('payment/update','Seller\ProfileController@payment_update')->name('payment.update');
    Route::post('payment/cash_on_delivery_status', 'Seller\ProfileController@cashOnDelivery')->name('payment.cash_on_delivery_status');
    Route::post('payment/bank_payment_status', 'Seller\ProfileController@bankPayment')->name('payment.bank_payment_status');

    Route::get('payment/request','Seller\PaymentController@index')->name('payment.history');
    Route::get('money/withdraw','Seller\PaymentController@money')->name('money.withdraw');
    Route::post('money/withdraw/store','Seller\PaymentController@store')->name('withdraw-request.store');

    Route::post('products/update2/{id}','Seller\ProductController@update2')->name('products.update2');
    Route::get('products/slug/{name}','Seller\ProductController@ajaxSlugMake')->name('products.slug');
    Route::post('products/get-subcategories-by-category','Seller\ProductController@ajaxSubCat')->name('products.get_subcategories_by_category');
    Route::post('products/get-subsubcategories-by-subcategory','Seller\ProductController@ajaxSubSubCat')->name('products.get_subsubcategories_by_subcategory');
    Route::post('products/sku_combination','Seller\ProductController@sku_combination')->name('products.sku_combination');
    Route::post('products/sku_combination_edit','Seller\ProductController@sku_combination_edit')->name('products.sku_combination_edit');
    Route::post('products/todays_deal', 'Seller\ProductController@updateTodaysDeal')->name('products.todays_deal');
    Route::post('products/published/update', 'Seller\ProductController@updatePublished')->name('products.published');
    Route::post('products/featured/update', 'Seller\ProductController@updateFeatured')->name('products.featured');
    Route::get('get/admin/products', 'Seller\ProductController@getAdminProduct')->name('get.admin.products');
    Route::get('get/admin/products/ajax', 'Seller\ProductController@getAdminProductAjax')->name('get.admin.products.ajax');
    Route::post('admin/products/store', 'Seller\ProductController@getAdminProductStore')->name('admin.products.store');
    Route::post('ckeditor/upload', 'Seller\CkeditorController@upload')->name('ckeditor.upload');

    /*Route::resource('roles','RoleController');
    Route::post('/roles/permission','RoleController@create_permission');
    Route::resource('staffs','StaffController');
    Route::resource('brands','BrandController');
    Route::resource('categories','CategoryController');
    Route::resource('attributes','AttributeController');
    Route::resource('subcategories','SubcategoryController');
    Route::resource('sub-subcategories','SubSubcategoryController');

    Route::get('products/slug/{name}','ProductController@ajaxSlugMake')->name('products.slug');
    Route::post('products/get-subcategories-by-category','ProductController@ajaxSubCat')->name('products.get_subcategories_by_category');
    Route::post('products/get-subsubcategories-by-subcategory','ProductController@ajaxSubSubCat')->name('products.get_subsubcategories_by_subcategory');
    Route::post('products/sku_combination','ProductController@sku_combination')->name('products.sku_combination');
    Route::post('products/todays_deal', 'ProductController@updateTodaysDeal')->name('products.todays_deal');
    Route::post('products/published/update', 'ProductController@updatePublished')->name('products.published');
    Route::post('products/featured/update', 'ProductController@updateFeatured')->name('products.featured');
    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');*/


});
