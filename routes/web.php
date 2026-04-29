<?php

use App\Http\Controllers\admin\DrugController;
use Illuminate\Support\Facades\Route;

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
