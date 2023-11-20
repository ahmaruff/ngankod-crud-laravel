<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/category",[CategoryController::class,"index"]);
Route::get("/category/create",[CategoryController::class,"create"]);
Route::post("/category/create",[CategoryController::class,"store"])->name("category.store");
Route::get("/category/edit/{id}",[CategoryController::class,"edit"])->name("category.edit");
Route::put("/category/edit/{id}",[CategoryController::class,"update"])->name("category.update");
Route::get("/category/delete/{id}",[CategoryController::class,"destroy"])->name("category.destroy");
