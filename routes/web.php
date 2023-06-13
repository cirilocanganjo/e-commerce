<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
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

Route::controller(HomeController::class)->group(function() {
    Route::get("/" , "home")->name("website.index");
});

Route::controller(AdminController::class)->group(function() {
    Route::get("/index" , "index")->name("admin.index");
});

Route::controller(AuthenticationController::class)->group(function() {
    Route::get("/login" , "userLogin")->name("user.login");
        Route::post("/entrar" , "signIn")->name("user.signin");
});

Route::get("/hash" , function() {
    $pass = \Hash::make("12345");
    return $pass;
});

