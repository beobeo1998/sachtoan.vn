<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'admin-oke'], function() {
    Route::get('/', [AdminHomeController::class,'index'])->name('admin.index');

    Route::group(['prefix' => 'category'], function() {
        Route::get('/',[AdminCategoryController::class,'index'])->name('admin.category.index');
        Route::get('create',[AdminCategoryController::class,'create'])->name('admin.category.create');
        Route::post('create',[AdminCategoryController::class,'store'])->name('admin.category.store');

        Route::get('update/{id}',[AdminCategoryController::class,'edit'])->name('admin.category.edit');
        Route::post('update/{id}',[AdminCategoryController::class,'update'])->name('admin.category.update');

        Route::get('delete/{id}',[AdminCategoryController::class,'delete'])->name('admin.category.delete');
        Route::get('active/{id}',[AdminCategoryController::class,'active'])->name('admin.category.active');
        Route::get('hot/{id}',[AdminCategoryController::class,'hot'])->name('admin.category.hot');
    });
});
