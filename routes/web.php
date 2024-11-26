<?php

use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\FollowSellerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductQueryController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\MyWorkController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\Seller\OrderController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\LecturesController;

use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\CommentController;
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

use App\Http\Controllers\ChallengeController;

//  Route::get('/challenge', [ChallengeController::class, 'generateChallenge']);
//  Route::post('/challenge/submit', [ChallengeController::class, 'submitCode']);
//  Route::get('/challenge/view', function () {
//     return view('challenge');
// });




Route::resource('sections', SectionsController::class);
    
// Define a custom route to fetch sections by product ID
Route::get('/sections', [SectionsController::class, 'index'])->name('sections.index');

Route::post('/sections/reorder', [SectionsController::class, 'reorder'])->name('sections.reorder');


Route::resource('lectures', LecturesController::class);

Route::get('/lectures/show_image/{id}', [LecturesController::class, 'show_image'])->name('lectures.show_image');
    // Event Routes



    Route::resource('quize', QuizController::class);



Route::get('/challenge', [ChallengeController::class, 'index'])->name('challenge.index');

Route::post('/challenge/generateChallenge', [ChallengeController::class, 'generateChallenge'])->name('generateChallenge');
Route::post('/challenge/executeCode', [ChallengeController::class, 'executeCode']);


Route::post('/challenge/generate_bug_hunter_challenge', [ChallengeController::class, 'generate_bug_hunter_challenge'])->name('challenge.generate_bug_hunter');
Route::post('/challenge/executeCode_bug_hunter', [ChallengeController::class, 'executeCode_bug_hunter'])->name('challenge.execute_bug_hunter');



Route::get('/challenge/view/{lange}/{type}/{level}', [ChallengeController::class, 'view'])->name('game.view');

Route::group(['middleware' => ['user', 'verified', 'unbanned']], function () {



    // Support Ticket
    Route::resource('support_ticket', SupportTicketController::class);
    Route::post('support_ticket/reply', [SupportTicketController::class, 'seller_store'])->name('support_ticket.seller_store');





    Route::middleware(['auth'])->group(function () {
        Route::get('lectures/{lectureId}/comments', [CommentController::class, 'index'])->name('comments.index');
        Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


        Route::delete('comments/{commentId}', [CommentController::class, 'destroy'])->name('comments.destroy');
    });





    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware(['prevent-back-history']);
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/new-user-verification', 'new_verify')->name('user.new.verify');
        Route::post('/new-user-email', 'update_email')->name('user.change.email');
        Route::post('/user/update-profile', 'userProfileUpdate')->name('user.profile.update');
    });










    Route::controller(NotificationController::class)->group(function () {
        Route::get('/all-notifications', 'customerIndex')->name('customer.all-notifications');
        Route::post('/notifications/bulk-delete', 'bulkDeleteCustomer')->name('notifications.bulk_delete');
        Route::get('/notification/read-and-redirect/{id}', 'readAndRedirect')->name('notification.read-and-redirect');
        Route::get('/non-linkable-notification-read', 'nonLinkableNotificationRead')->name('non-linkable-notification-read');
    });
});







Route::group(['middleware' => ['devloper', 'verified', 'unbanned']], function () {
    Route::post('/my-work', [MyWorkController::class, 'store'])->name('my-work.store');
    Route::get('/Mywork', [MyWorkController::class, 'Mywork'])->name('Mywork');
    // Devloper Route
    Route::resource('my-work', MyWorkController::class);



    //Shop
    Route::controller(AboutMeController::class)->group(function () {
        Route::get('/about_me', 'index')->name('about_me');
        Route::post('/about_me/update', 'update')->name('about_me.update');
        Route::get('/shop/apply-for-verification', 'verify_form')->name('shop.verify');
        Route::post('/shop/verification_info_store', 'verify_form_store')->name('shop.verify.store');
    });




    Route::resource('orders', OrderController::class);
    Route::controller(OrderController::class)->group(function () {
        Route::post('/orders/update_delivery_status', 'update_delivery_status')->name('orders.update_delivery_status');
        Route::post('/orders/update_payment_status', 'update_payment_status')->name('orders.update_payment_status');

        // Order bulk export
        Route::get('/order-bulk-export', 'orderBulkExport')->name('order-bulk-export');
    });
});











Route::group(['middleware' => ['teacher', 'verified', 'unbanned']], function () {



    // courses
    Route::controller(ProductController::class)->group(function () {
        Route::get('/my-courses', 'my_courses')->name('my-courses');
        Route::get('/product/create', 'create')->name('teacher.products.create');
        Route::post('/products/store/', 'store')->name('teacher.products.store');
        Route::get('/product/{id}/edit', 'edit')->name('teacher.products.edit');
        Route::post('/products/update/{product}', 'update')->name('teacher.products.update');
        Route::get('/products/destroy/{id}', 'destroy')->name('teacher.products.destroy');
    }
);









    Route::post('/my-work', [MyWorkController::class, 'store'])->name('my-work.store');
    Route::get('/Mywork', [MyWorkController::class, 'Mywork'])->name('Mywork');
    // Devloper Route
    Route::resource('my-work', MyWorkController::class);



    //Shop
    Route::controller(AboutMeController::class)->group(function () {
        Route::get('/about_me', 'index')->name('about_me');
        Route::post('/about_me/update', 'update')->name('about_me.update');
        Route::get('/shop/apply-for-verification', 'verify_form')->name('shop.verify');
        Route::post('/shop/verification_info_store', 'verify_form_store')->name('shop.verify.store');
    });




    Route::resource('orders', OrderController::class);
    Route::controller(OrderController::class)->group(function () {
        Route::post('/orders/update_delivery_status', 'update_delivery_status')->name('orders.update_delivery_status');
        Route::post('/orders/update_payment_status', 'update_payment_status')->name('orders.update_payment_status');

        // Order bulk export
        Route::get('/order-bulk-export', 'orderBulkExport')->name('order-bulk-export');
    });
});























// Publicly accessible routes for viewing events
Route::get('/events', [EventController::class, 'userIndex'])->name('events.user_index');
Route::get('/events/{event}', [EventController::class, 'userShow'])->name('events.user_show');


Route::get('/courses/{courseId}', [CourseController::class, 'show'])->name('courses.show');
Route::post('/courses/{courseId}/next-lecture', [CourseController::class, 'nextLecture'])->name('courses.nextLecture');
Route::post('/courses/{courseId}/previous-lecture', [CourseController::class, 'previousLecture'])->name('courses.previousLecture');

// AIZ Uploader
Route::controller(AizUploadController::class)->group(function () {
    Route::post('/aiz-uploader', 'show_uploader');
    Route::post('/aiz-uploader/upload', 'upload');
    Route::get('/aiz-uploader/get-uploaded-files', 'get_uploaded_files');
    Route::post('/aiz-uploader/get_file_by_ids', 'get_preview_files');
    Route::get('/aiz-uploader/download/{id}', 'attachment_download')->name('download_attachment');
});

Route::group(['middleware' => ['prevent-back-history', 'handle-demo-login']], function () {
    Auth::routes(['verify' => true]);
});

// Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/logout', 'logout');
    Route::get('/social-login/redirect/{provider}', 'redirectToProvider')->name('social.login');
    Route::get('/social-login/{provider}/callback', 'handleProviderCallback')->name('social.callback');
    //Apple Callback
    Route::post('/apple-callback', 'handleAppleCallback');
    Route::get('/account-deletion', 'account_deletion')->name('account_delete');
    Route::get('/handle-demo-login', 'handle_demo_login')->name('handleDemoLogin');
});

Route::controller(VerificationController::class)->group(function () {
    Route::get('/email/resend', 'resend')->name('verification.resend');
    Route::get('/verification-confirmation/{code}', 'verification_confirmation')->name('email.verification.confirmation');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/all_devloper', 'all_devloper')->name('all_devloper');
    Route::get('/devloper/{slug}', 'devloper')->name('devloper.visit');



    Route::get('/email-change/callback', 'email_change_callback')->name('email_change.callback');
    Route::post('/password/reset/email/submit', 'reset_password_with_code')->name('password.update');

    Route::get('/users/login', 'login')->name('user.login')->middleware('handle-demo-login');
    Route::get('/seller/login', 'login')->name('seller.login')->middleware('handle-demo-login');
    Route::get('/deliveryboy/login', 'login')->name('deliveryboy.login')->middleware('handle-demo-login');
    Route::get('/users/registration', 'registration')->name('user.registration')->middleware('handle-demo-login');
    Route::post('/users/login/cart', 'cart_login')->name('cart.login.submit')->middleware('handle-demo-login');
    Route::post('/import-data', 'import_data');
    //Home Page
    Route::get('/', 'index')->name('home');
    Route::post('/home/section/featured', 'load_featured_section')->name('home.section.featured');
    Route::post('/home/section/todays-deal', 'load_todays_deal_section')->name('home.section.todays_deal');
    Route::post('/home/section/best-selling', 'load_best_selling_section')->name('home.section.best_selling');
    Route::post('/home/section/newest-products', 'load_newest_product_section')->name('home.section.newest_products');
    Route::post('/home/section/home-categories', 'load_home_categories_section')->name('home.section.home_categories');
    Route::post('/home/section/best-sellers', 'load_best_sellers_section')->name('home.section.best_sellers');
    //category dropdown menu ajax call
    Route::post('/category/nav-element-list', 'get_category_items')->name('category.elements');
    //Flash Deal Details Page
    Route::get('/flash-deals', 'all_flash_deals')->name('flash-deals');
    Route::get('/flash-deal/{slug}', 'flash_deal_details')->name('flash-deal-details');
    //Todays Deal Details Page
    Route::get('/todays-deal', 'todays_deal')->name('todays-deal');

    Route::get('/product/{slug}', 'product')->name('product');
    ///////////////////////////

    Route::get('/student_Course/{slug}', 'student_Course')->name('student_Course');
    Route::post('/startCourse/{id}', 'startCourse')->name('startCourse');
    Route::post('/nextLecture/{id}', 'nextLecture')->name('nextLecture');



    ///////////////



    Route::post('/product/variant-price', 'variant_price')->name('products.variant_price');
    Route::get('/shop/{slug}', 'shop')->name('shop.visit');
    Route::get('/shop/{slug}/{type}', 'filter_shop')->name('shop.visit.type');

    Route::get('/customer-packages', 'premium_package_index')->name('customer_packages_list_show');

    Route::get('/brands', 'all_brands')->name('brands.all');
    Route::get('/categories', 'all_categories')->name('categories.all');
    Route::get('/sellers', 'all_seller')->name('sellers');
    Route::get('/coupons', 'all_coupons')->name('coupons.all');
    Route::get('/inhouse', 'inhouse_products')->name('inhouse.all');


    // Policies
    Route::get('/seller-policy', 'sellerpolicy')->name('sellerpolicy');
    Route::get('/return-policy', 'returnpolicy')->name('returnpolicy');
    Route::get('/support-policy', 'supportpolicy')->name('supportpolicy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/privacy-policy', 'privacypolicy')->name('privacypolicy');

    Route::get('/track-your-order', 'trackOrder')->name('orders.track');
});

// Language Switch
Route::post('/language', [LanguageController::class, 'changeLanguage'])->name('language.change');

// Currency Switch



// Search
Route::controller(SearchController::class)->group(function () {
    Route::get('/search', 'index')->name('search');
    Route::get('/search?keyword={search}', 'index')->name('suggestion.search');
    Route::post('/ajax-search', 'ajax_search')->name('search.ajax');
    Route::get('/category/{category_slug}', 'listingByCategory')->name('products.category');
    Route::get('/brand/{brand_slug}', 'listingByBrand')->name('products.brand');
});

// Cart
Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart');
    Route::post('/cart/show-cart-modal', 'showCartModal')->name('cart.showCartModal');
    Route::post('/cart/addtocart', 'addToCart')->name('cart.addToCart');
    Route::post('/cart/removeFromCart', 'removeFromCart')->name('cart.removeFromCart');
    Route::post('/cart/updateQuantity', 'updateQuantity')->name('cart.updateQuantity');
    Route::post('/cart/updateCartStatus', 'updateCartStatus')->name('cart.updateCartStatus');
});



// Subscribe
Route::resource('subscribers', SubscriberController::class);



// Checkout Routs
Route::group(['prefix' => 'checkout'], function () {
    Route::controller(CheckoutController::class)->group(function () {
        // Route::get('/', 'get_shipping_info')->name('checkout.shipping_info');
        Route::get('/', 'index')->name('checkout');
        Route::any('/delivery-info', 'store_shipping_info')->name('checkout.store_shipping_infostore');
        Route::post('/payment-select', 'store_delivery_info')->name('checkout.store_delivery_info');
        Route::post('/payment', 'checkout')->name('payment.checkout');
        Route::get('/order-confirmed', 'order_confirmed')->name('order_confirmed');
        Route::post('/apply-coupon-code', 'apply_coupon_code')->name('checkout.apply_coupon_code');
        Route::post('/remove-coupon-code', 'remove_coupon_code')->name('checkout.remove_coupon_code');
        Route::post('/guest-customer-info-check', 'guestCustomerInfoCheck')->name('guest_customer_info_check');
        Route::post('/updateDeliveryAddress', 'updateDeliveryAddress')->name('checkout.updateDeliveryAddress');
        Route::post('/updateDeliveryInfo', 'updateDeliveryInfo')->name('checkout.updateDeliveryInfo');
    });
});

Route::group(['middleware' => ['customer', 'verified', 'unbanned']], function () {

    // Purchase History
    Route::resource('purchase_history', PurchaseHistoryController::class);
    Route::controller(PurchaseHistoryController::class)->group(function () {
        Route::get('/purchase_history/details/{id}', 'purchase_history_details')->name('purchase_history.details');
        Route::get('/purchase_history/destroy/{id}', 'order_cancel')->name('purchase_history.destroy');
        Route::get('digital-purchase-history', 'digital_index')->name('digital_purchase_history.index');
        Route::get('/digital-products/download/{id}', 'download')->name('digital-products.download');

        Route::get('/re-order/{id}', 're_order')->name('re_order');
    });

    // Wishlist
    Route::resource('wishlists', WishlistController::class);
    Route::post('/wishlists/remove', [WishlistController::class, 'remove'])->name('wishlists.remove');

    //Follow
    Route::controller(FollowSellerController::class)->group(function () {
        Route::get('/followed-seller', 'index')->name('followed_seller');
        Route::get('/followed-seller/store', 'store')->name('followed_seller.store');
        Route::get('/followed-seller/remove', 'remove')->name('followed_seller.remove');
    });





    // Product Review
    Route::post('/product-review-modal', [ReviewController::class, 'product_review_modal'])->name('product_review_modal');

    Route::post('/order/re-payment', [CheckoutController::class, 'orderRePayment'])->name('order.re_payment');
});


Route::get('translation-check/{check}', [LanguageController::class, 'get_translation']);


Route::group(['middleware' => ['auth']], function () {



    // Reviews
    Route::resource('/reviews', ReviewController::class);

    // Product Conversation
    Route::resource('conversations', ConversationController::class);
    Route::controller(ConversationController::class)->group(function () {
        Route::get('/conversations/destroy/{id}', 'destroy')->name('conversations.destroy');
        Route::post('conversations/refresh', 'refresh')->name('conversations.refresh');
    });

    // Product Query
    Route::resource('product-queries', ProductQueryController::class);

    Route::resource('messages', MessageController::class);
});

Route::resource('shops', ShopController::class)->middleware('handle-demo-login');





Route::controller(PageController::class)->group(function () {
    //mobile app balnk page for webview
    Route::get('/mobile-page/{slug}', 'mobile_custom_page')->name('mobile.custom-pages');

    //Custom page
    Route::get('/{slug}', 'show_custom_page')->name('custom-pages.show_custom_page');
});
Route::controller(ContactController::class)->group(function () {
    Route::post('/contact', 'contact')->name('contact');
});
