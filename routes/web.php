<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class,"index"]);
Route::get('/product/{id}', [ProductController::class,"get"]);
Route::get('/products', [ProductController::class,"get_all"]);

Route::get('/login', [UserController::class,"login_get"]);
Route::post('/login', [UserController::class,"login_post"]);

Route::get('/register', [UserController::class,"register_get"]);
Route::post('/register', [UserController::class,"register_post"]);

Route::get('/logout', [UserController::class,"logout"]);

Route::get('/profile', [UserController::class,"profile"])->middleware("auth");


Route::get('/admin/login', [AdminController::class,"login_get"]);
Route::post('/admin/login', [AdminController::class,"login_post"]);
Route::get('/admin/logout', [AdminController::class,"logout"]);


Route::get('/admin', [AdminController::class,"index"])->middleware("auth");;
Route::get('/admin/cities', [CityController::class,"get_all"])->middleware("auth");;

Route::get('/admin/cities/add', [CityController::class,"add_get"])->middleware("auth");;
Route::post('/admin/cities/add', [CityController::class,"add_post"])->middleware("auth");;

Route::get('/admin/cities/edit/{id}', [CityController::class,"edit_get"])->middleware("auth");;
Route::post('/admin/cities/edit', [CityController::class,"edit_post"])->middleware("auth");;

Route::get('/admin/cities/delete/{id}', [CityController::class,"delete"])->middleware("auth");;

Route::get('/admin/productsList', [ProductController::class,"get_all_admin"])->middleware("auth");;

Route::get('/admin/product/add', [ProductController::class,"add_get"])->middleware("auth");;
Route::post('/admin/product/add', [ProductController::class,"add_post"])->middleware("auth");;

Route::get('/admin/product/edit/{id}', [ProductController::class,"edit_get"])->middleware("auth");;
Route::post('/admin/product/edit', [ProductController::class,"edit_post"])->middleware("auth");;

Route::get('/admin/product/delete/{id}', [ProductController::class,"delete"])->middleware("auth");;


Route::get('/admin/orderList', [OrderController::class,"get_all"])->middleware("auth");;
Route::get('/admin/order/delete/{id}', [OrderController::class,"delete"])->middleware("auth");;
