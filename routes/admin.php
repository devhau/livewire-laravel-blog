<?php
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::group(['middleware' => ['permission:manage_user'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', User\Index::class)->name('index');
});
Route::group(['middleware' => ['permission:manage_role'], 'prefix' => 'role', 'as' => 'role.'], function () {
    Route::get('/', Role\Index::class)->name('index');
});
Route::group(['middleware' => ['permission:manage_permission'], 'prefix' => 'permission', 'as' => 'permission.'], function () {
    Route::get('/', Permission\Index::class)->name('index');
});
