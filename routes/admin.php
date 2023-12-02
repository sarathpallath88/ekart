<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
Route::name('admin.')->group(function(){
Route::get('admin/login', [LoginController::class, 'login']);
Route::post('admin/do-login', [LoginController::class, 'doLogin'])->name('do.login');
});
