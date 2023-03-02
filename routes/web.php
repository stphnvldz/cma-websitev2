<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
});
Route::get('/requirements', function () {
    return view('layouts.requirements');
});
Route::get('/location', function () {
    return view('layouts.location');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/stalls', function () {
    return view('layouts.stalls');
});
Route::get('/tenant', function () {
    return view('admin.tenant');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DasboardController::class, 'index']);
});

// Route::get('/tenant', function () {
//     return view('admin.tenant');
//     Route::post('/tenant', 'UserController@store');
 
// });

Route::post('/tenant/add', [App\Http\Controllers\TenantController::class, 'addtenant'])->name('addtenant');




