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

// Registration & Login Route
Route::post('/app/registration', "UserController@registration");
Route::post('/app/login', "UserController@login");

// Products Route
Route::post('/app/add_product', "ProductController@storeProduct");
Route::post('/app/edit_product', "ProductController@updateProduct");
Route::post('/app/delete_product', "ProductController@delete_Product");
Route::get('/app/all_product', "ProductController@all_product");
Route::get('/app/product/{id}', "ProductController@show_product");

// Category Route
Route::get('/app/all_category', "CategoryController@allCategory");
Route::post('/app/add_category', "CategoryController@storeCategory");
Route::post('/app/edit_category', "CategoryController@updateCategory");
Route::post('/app/delete_category', "CategoryController@deleteCategory");

// Category Route
Route::get('/app/all_tag', "TagController@allTag");
Route::post('/app/add_tag', "TagController@storeTag");
Route::post('/app/edit_tag', "TagController@updateTag");
Route::post('/app/delete_tag', "TagController@deleteTag");



Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect("/");

});
Route::any('{slug}', 'HomeController@home')->where('slug', '([A-z\d-\/_.]+)?');