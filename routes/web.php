<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;


// admin routes
// admin routes
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;


use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
// admin routes
// admin routes


// user routes
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Routing\Route as RoutingRoute;
// user routes


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

Route::get('/', HomeComponent::class)->name('home');

Route::get('/shop', ShopComponent::class)->name('shop');

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');

// for details product page
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

// for products by category page
Route::get('/product.category/{category_slug}', CategoryComponent::class)->name('product.category');

// for search page
Route::get('/search', SearchComponent::class)->name('product.search');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// for admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard' , UserDashboardComponent::class)->name('user.dashboard');
});

// for user or customer
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->group(function () {
    Route::get('/admin/dashboard' , AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');

    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');

    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');

    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');

    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');


    // === sliders routes part ===
    //     sliders routes part
    // === sliders routes part ===

    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');

    Route::get('/admin/slider/add' , AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');

    Route::get('/admin/slider/edit/{slide_id}' , AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

});

/* Route::get('/', function () {
    return view('frontend/welcome');
})->name("home");

Route::get('/about', function () {
    return view('frontend/about');
})->name("about");

Route::view('/contact', "frontend/contact" , [
    'pageName' => 'contact me page',
    'pageDescription' => 'Contact Us',
])->name("contact");

Route::get('/category/{id}', function ($id) {
    $cats = [
        '1' => 'games',
        '2' => 'Programming',
        '3' => 'Books',
    ];

    return view('frontend/category' , [
        'userId' => $cats[$id] ?? "this id is not found",
    ]);
})->name("category"); */
