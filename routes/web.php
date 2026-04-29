<?php

use App\Http\Controllers\admin\DrugController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
 * ================================
 * Authentication Route
 * ================================
 */

Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');

Route::post('register/verify',[AuthController::class,'RegisterUser'])->name('register.verify');


Route::prefix('admin')->group(function(){
    /*
     * =====================================================
     * |Drug Controller
     * =====================================================
     */
   Route::controller(DrugController::class)->group(function(){
       Route::get('drugs','index')->name('drug');
       Route::get('generics','generic')->name('generic');
   });



});
