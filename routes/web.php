<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CommenCategory;
use App\Http\Controllers\ShowController;

Route::get('/',[ShowController::class,'index'])->name('index');
Route::get('/about-us',[ShowController::class,'about'])->name('about');
Route::get('/faq',[ShowController::class,'faq'])->name('faq');
Route::get('/contact',[ShowController::class,'contact'])->name('contact');

Route::get('/blogs',[ShowController::class,'blogCat'])->name('frontblog');
Route::get('/blog/{slug}',[ShowController::class,'blogs'])->name('frontblogs');

Route::post('/add-contact',[ShowController::class,'addcontact'])->name('contact.add');

Route::post('/add-inquiry',[ShowController::class,'addInquiry'])->name('inquiry.add');
Route::get('/register',[ShowController::class,'index'])->name('register');

Route::get('/products/{id}',[ShowController::class,'product'])->name('frontproduct');
Route::get('/product/{slug}',[ShowController::class,'productDetail'])->name('productdetail');

Route::get('/shop',[ShowController::class,'shop'])->name('shop');



Route::get('/blog',[ShowController::class,'blog'])->name('blog');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    
    Route::get('/',[adminController::class,'admin'])->name('admin');
    
    Route::resource('blogcategory',BlogCategoryController::class);
    Route::resource('blog',BlogController::class);
    Route::resource('page',PageController::class);
    Route::resource('faq',FaqController::class);
    Route::resource('slider',SliderController::class);
    Route::resource('gallery',GalleryController::class);
    Route::resource('social',SocialController::class);
   
    Route::resource('productcategory',ProductCategoryController::class);
    Route::resource('product',ProductController::class);

  
    Route::resource('contact',ContactController::class);
    Route::resource('product-inquiry',ProductInquiryController::class);
    Route::resource('aboutus',AboutusController::class);
    
    Route::get('/blogcategorybyid/{id}',[CommenCategory::class,'getblogcategoryById']);
    Route::get('/blogbyid/{id}',[CommenCategory::class,'getblogById']);
    Route::get('/pagebyid/{id}',[CommenCategory::class,'getpageById']);
    Route::get('/sliderbyid/{id}',[CommenCategory::class,'getsliderById']);
    Route::get('/faqbyid/{id}',[CommenCategory::class,'getfaqById']);
   

    Route::get('/productcategorybyid/{id}',[CommenCategory::class,'getProductCategoryById']);
    Route::get('/productbyid/{id}',[CommenCategory::class,'getProductById']);




    Route::get('/image/{id}/{modal}/{field}',[CommenCategory::class,'DeleteImage']);
    Route::post('change-status',[CommenCategory::class,'ChangeStatus'])->name('change-status');

});


Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('pohoh60458@hhmel.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});