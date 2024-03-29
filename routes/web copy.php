<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


//GUEST SIDE
Route::get('/', function () {
    return view('main');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/requirements', function () {
    return view('layouts.requirements');
});
Route::get('/location', function () {
    return view('layouts.location');
});
//Route::get('/stalls', function () {
    return view('layouts.stalls');
//});
//Route::get('/tenant', function () {
//    return view('admin.tenant');
//})->name('tenant');
Route::get('/about', function () {
    return view('layouts.about');
});

//---------------------------------------------------------------

//ADMIN SIDE
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/editRequirements', function () {
    return view('admin.homepage.editRequirements');
});
Route::post('/reqadd', [App\Http\Controllers\RequirementsController::class, 'req'])->name('req');
Route::get('/requirements', [App\Http\Controllers\RequirementsController::class, 'showreq'])->name('showreq');


Route::get('/preview', function () {
    return view('admin.preview');
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
Route::get('/announcement', function () {
    return view('admin.homepage.announcement');
});
//lost and found
Route::get('/lostfound', function () {
    return view('admin.lostfound');
});
Auth::routes();


Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DasboardController::class, 'index']);
});

Route::post('/tenant/add', [App\Http\Controllers\TenantController::class, 'addtenant'])->name('addtenant');

Route::get('/tenantlists', [App\Http\Controllers\TenantListController::class, 'index'])->name('tenantlists');
Route::post('/tenantlists/postbill', [App\Http\Controllers\TenantListController::class, 'postBill'])->name('postBill');
Route::post('/tenantlists/postallbill', [App\Http\Controllers\TenantListController::class, 'postAllBill'])->name('postAllBill');
//Route::post('/tenants', [App\Http\Controllers\StallsController::class, 'tenants'])->name('tenants');

Route::get('/viewtenant', [App\Http\Controllers\TenantListController::class, 'viewTenantData'])->name('viewtenant');
//oute::get('/tenantlists', [App\Http\Controllers\TenantListController::class, ' BillTenant'])->name(' BillTenant');
Route::post('/tenant/update', [App\Http\Controllers\TenantListController::class,'updateTenantData'])->name('updateTenantData');

Route::get('/archivetenant', function () {
    return view('admin.archives');
});

//Route::get('/archivetenant/{id}', 'TenantListController@archiveTenant')->name('tenant.archive');

//Route::post('/mark-as-unaccounted/{id}', 'TenantListController@markAsUnaccounted');

Route::get('/unaccounted', function () {
    return view('admin.unaccounted');
});

//annoucement
Route::post('/announcementadd', [App\Http\Controllers\AnnouncementController::class, 'saveAnnouncement'])->name('saveAnnouncement');
Route::get('/', [App\Http\Controllers\AnnouncementController::class, 'showAnnouncementForm'])->name('showAnnouncementForm');

//floor
Route::post('/save-floor', [App\Http\Controllers\FloorController::class, 'saveFloor'])->name('saveFloor');
Route::get('/floorview', [App\Http\Controllers\FloorController::class, 'showFloors'])->name('floorview');

//stalls
Route::get('/stalladd', [App\Http\Controllers\StallController::class, 'showForm'])->name('stalladd');
Route::post('/stalladd', [App\Http\Controllers\StallController::class, 'saveStall'])->name('saveStall');
Route::get('/stallview', [App\Http\Controllers\StallController::class, 'showStalls'])->name('stallview');

//rent
Route::post('/rentadd', [App\Http\Controllers\RentController::class, 'renting'])->name('rent');
Route::get('/rent', [App\Http\Controllers\RentController::class, 'getFloors'])->name('getFloors');

//select tenant modal -- rent parin
//sRoute::get('/rent', [App\Http\Controllers\RentController::class, 'index'])->name('index');
Route::get('/show-tenant', [App\Http\Controllers\RentController::class, 'showTenant'])->name('showTenant');

//lost and found
Route::post('/lost-add', [App\Http\Controllers\LostFoundController::class, 'addlost'])->name('addlost');
Route::get('/lostfound', [App\Http\Controllers\LostFoundController::class, 'showLostFound'])->name('lostfound');
Route::get('/viewlostfound', [App\Http\Controllers\LostFoundController::class, 'viewLostFound'])->name('viewLostFound');
//reports
Route::get('/paymentreports', [App\Http\Controllers\PaymentReportController::class, 'viewReports'])->name('viewReports');
//Route::get('/paymentreports', [App\Http\Controllers\PaymentReportController::class, 'viewTenantPayment'])->name('viewTenantPayment');

//--------------------------------------------------------------------------------------



//TENANT SIDE
Route::get('/tenant-dashboard', function () {
    return view('admin.tenantside.tenant-dashboard');
});
//payment
Route::get('/payment', function () {
    return view('admin.tenantside.payment');
});
Route::post('/payment-add', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
Route::get('/paymenthistory', [App\Http\Controllers\PaymentController::class, 'viewPayment'])->name('viewPayment');
//about-tenant side
Route::get('/cmainfo', function () {
    return view('admin.tenantside.about.cmainfo');
});
Route::get('/developer', function () {
    return view('admin.tenantside.about.developer');
});

//bills notice
Route::get('/billsnotice', function () {
    // SEEZA todo: WHERE from renstall.id
    // $results = DB::table('tenant_bills')->where([['status', '=', '0'],['rentstall_id', '=', '1'] ])->get();
    $results = DB::table('tenant_bills')->where('status', '=', '0')->get();

    return view('admin.tenantside.billsnotice', compact(['results']));
});
