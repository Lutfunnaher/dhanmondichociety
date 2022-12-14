<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\HomeController;

// Route::view('/test', 'test');


// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('website.index');
Route::get('/mission', [FrontendController::class, 'mission'])->name('website.mission');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('website.gallery');
Route::get('about', [FrontendController::class, 'about'])->name('website.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('website.contact');
Route::get('/complain', [FrontendController::class, 'complain'])->name('website.complain');
// Route::get('/executiveMember', [FrontendController::class, 'executiveMember'])->name('website.executiveMember');


// Backend Routes
Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Member Category Routes
    Route::resource('/category', CategoryController::class);
    Route::get('/ajax/{id}', [CategoryController::class, 'getCategory']);

    // Member routes
    Route::resource('/member', MemberController::class);
    Route::get('/members/executive', [MemberController::class, 'executive'])->name('member.executive');
    Route::get('/members/general', [MemberController::class, 'general']);
    Route::get('/members/life', [MemberController::class, 'life']);
    Route::get('/members/donor', [MemberController::class, 'donor']);
    Route::get('/members/honorable', [MemberController::class, 'honorable']);
    Route::get('/members/corporate', [MemberController::class, 'corporate']);
    Route::get('/refer/{member_id}', [MemberController::class, 'introduce']);
});




// Auth Routes
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// test
// route type
/**
 * get - get
 * post - post
 * put - single data update
 * patch - multiple data update
 * delete - delete
 */
