<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'Home']);
Route::get('about', [HomeController::class,'about']);
Route::get('service', [HomeController::class,'service']);
Route::get('contact', [HomeController::class,'contact']);
Route::get('login', [HomeController::class,'login']);

Route::get('product', function(){
    return "product Page";
});
   

