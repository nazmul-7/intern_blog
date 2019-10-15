<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('welcome');
// });

// Products Route
Route::post('/app/add_product', "ProductController@storeProduct");
Route::post('/app/edit_product', "ProductController@updateProduct");
Route::post('/app/delete_product', "ProductController@delete_Product");
Route::get('/app/all_product', "ProductController@all_product");
Route::get('/app/product/{id}', "ProductController@show_product");

// Category Route
Route::post('/app/add_category', "CategoryController@storeCategory");
Route::post('/app/edit_category', "CategoryController@updateCategory");
Route::post('/app/delete_category', "CategoryController@deleteCategory");
Route::get('/app/all_category', "CategoryController@allCategory");

Route::any('{slug}', 'HomeController@home')->where('slug', '([A-z\d-\/_.]+)?');