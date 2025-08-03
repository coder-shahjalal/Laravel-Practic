<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\test;
use App\Http\Controllers\FormController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\UserController;

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


//contact form
Route::get('/contact',[ContactController::class,'show'])->name('contact-show');
Route::post('/contact',[ContactController::class,'submit'])->name('contact.submit');

Route::get('/thunder',function(){
    return view('thunder');
});

Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contacts',[PageController::class,'contacts'])->name('contact');
Route::get('/service/{id}',[PageController::class,'service'])->name('service.details');

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return "This is admin test route";
    })->name('admin.test');
});


//groupe route

Route::controller(UserController::class)->prefix("admin/users")->group(function(){
    Route::get('/','index')->name('admin.users.index');
    Route::get('/create','create')->name('admin.users.create');
    Route::post('/store','store')->name('admin.users.store');
});
