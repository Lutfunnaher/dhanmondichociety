<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MemberCategoryController;
use App\Http\Controllers\HomeController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('website.index');
Route::get('/mission', [FrontendController::class, 'mission'])->name('website.mission');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('website.gallery');
Route::get('about', [FrontendController::class, 'about'])->name('website.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('website.contact');
Route::get('/complain', [FrontendController::class, 'complain'])->name('website.complain');
// Route::get('/executiveMember', [FrontendController::class, 'executiveMember'])->name('website.executiveMember');






// Backend Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/add_member', [DashboardController::class, 'add_member'])->name('addmember');
// Members Routes
Route::get('/add-mcategory', [MemberCategoryController::class, 'index'])->name('add-mcategory-index');
Route::post('/add-mcategory', [MemberCategoryController::class, 'store'])->name('add-mcategory-store');

// test for git command
// Route::view('/error', 'view.error');


// Auth Routes
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');






