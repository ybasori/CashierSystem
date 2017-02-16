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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/customer', "Customer_controller");
Route::resource('/employee', "Employee_controller");
Route::resource('/order', "Order_controller");
Route::resource('/buy', "Buy_controller");
Route::resource('/product', "Product_controller");
