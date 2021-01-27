<?php

use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'admin-oke'], function() {
    Route::get('/', [AdminHomeController::class,'index'])->name('admin.index');
});
