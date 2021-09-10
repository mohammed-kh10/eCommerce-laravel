<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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
