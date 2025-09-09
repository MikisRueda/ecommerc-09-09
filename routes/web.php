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

Route::get('/products', function () {
    return "PRODUCTS";
});

Route::get('/products/{id}/{category}', function ($id, $category = null) {
    if($category != null){
        return "Product ID: ".$id." Category: ".$category;
    }else{
        return "Product ID: ".$id;
    }

});


