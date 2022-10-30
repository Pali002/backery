<?php

use App\Http\Controllers\BackeryController;
use App\Models\Backery;
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

Route::get("/beilleszt", [BackeryController::class, "insertAll"]);

Route::get("/new_products", [BackeryController::class, "newProducts"]);

Route::get("/submit-product", [BackeryController::class, "submitProduct"]);

Route::get("/outProduct", [BackeryController::class, "selectAll"]);

Route::get("/selectProduct", [BackeryController::class, "selectProduct"]);

Route::get("/listProduct", [BackeryController::class, "listProduct"]);