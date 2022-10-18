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
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/create/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Member routes
Route::resource('/member', MemberController::class);




// test for git command
// Route::view('/error', 'view.error');


// Auth Routes
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');









/*

 public function index()
    {
        $categories = MembershipCategory::all();
        return view('admin.member-category.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.member-category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_amount' =>  'required'
        ]);

        MembershipCategory::create([
            'name' => $request->category_name,
            'fees' => $request->category_amount,
        ]);

        return redirect()->route('member-category.index')->with('message', 'Member catgory created.');
    }
    */
