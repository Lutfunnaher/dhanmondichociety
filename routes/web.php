<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\HomeController;



// Route::get('/', function () {
//     return view('welcome');
// });



// test route
// Route::get('/demo', function(){
//     $data = ['name'=> 'sitename', 'url'=>'dhanmondisociety'];
//     return view('admin.test.test', compact('data'));
// });



Route::view('/test', 'test');



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

// Member Category Routes
Route::resource('/category', CategoryController::class);

// Member routes
Route::resource('/member', MemberController::class);




// test for git command
// Route::view('/error', 'view.error');


// Auth Routes
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');







// </div>
//     <div class="col-4">
//         <button id="trashButton" class="btn btn-danger btn-small"><i
//                 class="fa-solid fa-trash"></i></button>
//     </div>
