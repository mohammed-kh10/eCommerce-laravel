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

Route::get('/', function () {
    return view('frontend/welcome');
})->name("home");

Route::get('/about', function () {
    return view('frontend/about');
})->name("about");


Route::view('/contact', "frontend/contact" , [
    'pageName' => 'contact me page',
    'pageDescription' => 'This is Page Description',
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
})->name("category");
