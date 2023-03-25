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
})->name('tenant');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
//stall folder
Route::get('/stalladd', function () {
    return view('admin.stall.stalladd');
});
//floor folder
Route::get('/flooradd', function () {
    return view('admin.floor.flooradd');
});
Route::get('/stallview', function () {
    return view('admin.stall.stallview');
});
//rent folder
Route::get('/rent', function () {
    return view('admin.rent');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DasboardController::class, 'index']);
});

Route::post('/tenant/add', [App\Http\Controllers\TenantController::class, 'addtenant'])->name('addtenant');

Route::get('/tenantlists', [App\Http\Controllers\TenantListController::class, 'index'])->name('tenantlists');

Route::post('/tenants', [App\Http\Controllers\StallsController::class, 'tenants'])->name('tenants');

Route::get('/viewtenant', [App\Http\Controllers\TenantListController::class, 'viewTenantData'])->name('viewtenant');

Route::post('/tenant/update', [App\Http\Controllers\TenantListController::class,'updateTenantData'])->name('updateTenantData');

Route::get('/archivetenant', function () {
    return view('admin.archives');
});

//floor
Route::post('/save-floor', [App\Http\Controllers\FloorController::class, 'saveFloor'])->name('saveFloor');
Route::get('/floorview', [App\Http\Controllers\FloorController::class, 'showFloors'])->name('floorview');

//stalls
Route::get('/stalladd', [App\Http\Controllers\StallController::class, 'showForm'])->name('stalladd');

