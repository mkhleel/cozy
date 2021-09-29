<?php

Route::get('/', function () {
    return view('admin.home');
})->name('home');


Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login.submit');
Route::get('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout')->middleware('auth:staff');

Route::get('register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register'])->name('register.submit');

Route::get('password/reset', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

