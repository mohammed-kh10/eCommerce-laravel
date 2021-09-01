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
    return view('welcome');
});

Route::get('/about-me', function () {
    return view('about');
});

Route::view('contact-me', "contact" , [
    'pageName' => 'contact me page',
    'pageDescription' => 'This is Page Description',
]);

Route::get('/category/{id}', function ($id) {

    $cats = [
        '1' => 'games',
        '2' => 'Programming',
        '3' => 'Books',
    ];

    return view('category' , [
        'userId' => $cats[$id] ?? "this id is not found",
    ]);
});
