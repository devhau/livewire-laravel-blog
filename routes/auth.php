<?php

Route::get('/login',Login::class)->name('login');
Route::get('/forgot-password',ForgotPassword::class)->name('forgot-password');
Route::get('/verify',Verification::class)->name('verify');
Route::get('/register',Register::class)->name('register');
Route::get('/reset-password',ResetPassword::class)->name('reset-password');
