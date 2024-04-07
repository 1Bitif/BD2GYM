<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeProductsController;
use App\Http\Controllers\ProductsHomeController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get("/",[ProductsHomeController::class ,'index']);

Route::middleware(["auth","verified"])->group(function(){
    Route::get("/home",[HomeProductsController::class , "index"])->name("dashboard");
    Route::get("/home/show/{products}",[HomeProductsController::class , "show"])->name("showProduct");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/dashboard/admin/home', [AdminController::class , "index"])
//     ->middleware(["auth","admin"])
//     ->name("dashboard.home");
// Route::get('/dashboard/admin/user', [UserController::class , "index"])
//     ->middleware(["auth","admin"])
//     ->name("dashboard.user");

// Start Nav
Route::middleware(['auth','admin'])->group(function() {
    Route::get('/dashboard/admin/home', [AdminController::class , "index"])->name("dashboard.home");
    Route::get('/dashboard/admin/products', [ProductsController::class, "index"])->name("dashboard.products");
});
// End Nav

// Start Products
Route::middleware(["auth","admin"])->group(function (){
    Route::get("/dashboard/admin/AddProduct",[ProductsController::class , "create"])->name('dashboard.create');
    Route::post("/dashboard/admin/AddProduct",[ProductsController::class , "store"])->name('dashboard.store');
    Route::get("/dashboard/admin/edit/{products}",[ProductsController::class , "edit"])->name('dashboard.edit');
    Route::put("/dashboard/admin/update/{products}",[ProductsController::class , "update"])->name('dashboard.update');
    Route::delete("/dashboard/admin/{products}",[ProductsController::class , "destroy"])->name('dashboard.destroyProduct');
});
// End Products

// Start Users
Route::middleware(["auth","admin"])->group(function (){    
    Route::get('/dashboard/admin/user', [UserController::class , "index"])->name("dashboard.user");
    Route::delete('/dashboard/admin/user/{user}', [UserController::class , "destroy"])->name("dashboard.destroy");
});
// End Users

// Start Orders
Route::middleware(["auth","admin"])->group(function (){    
    Route::get('/dashboard/admin/orders', [OrdersController::class , "index"])->name("dashboard.orders");
});
// End Orders
