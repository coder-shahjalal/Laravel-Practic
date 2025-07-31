<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\test;
use App\Http\Controllers\FormController;
use App\Http\Controllers\OrderController;

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/test',[test::class,'test']);
Route::get('/',[test::class,'test']);
// card
Route::get("/card",function(){
    return view("card");
});
// form 
Route::get('/form',[FormController::class,'show']);
Route::post('/submit-form',[FormController::class,'submit'])->name('form.submit');
//form with validation 

Route::get('/order',[OrderController::class,'show']);
Route::post('/order-summit',[OrderController::class,'submit'])->name('order.submit');