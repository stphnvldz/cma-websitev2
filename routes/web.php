<?php

use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isTenant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

    // guest pages
    Route::get('/', function () {return view('main');});
    Route::get('/', [App\Http\Controllers\AnnouncementController::class, 'showAnnouncementForm'])->name('showAnnouncementForm');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/requirements', function () { return view('layouts.requirements');});
    Route::get('/requirements', [App\Http\Controllers\RequirementsController::class, 'showreq'])->name('showreq');
    Route::get('/location', function () {return view('layouts.location');});
    Route::get('/about', function () {return view('layouts.about');});
    //Route::get('/stalls', function () {return view('layouts.stalls');});

Auth::routes();

// admin pages
Route::middleware([isAdmin::class, 'auth'])->group(function () {

    //navbar
    Route::get('/admin-accountsettings', function () {
        return view('admin.admin-accountsettings');
    });
    Route::get('/admin-activitylog', function () {
        return view('admin.admin-activitylog');
    });

    //dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    //Route::get('/tenant', function () {return view('admin.tenant');})->name('tenant');

    //homepage
    Route::get('/announcement', function () {
        return view('admin.homepage.announcement');
    });
    Route::post('/announcementadd', [App\Http\Controllers\AnnouncementController::class, 'saveAnnouncement'])->name('saveAnnouncement');
    Route::get('/announcement', [App\Http\Controllers\AnnouncementController::class, 'listofannouncements'])->name('listofannouncements');
    Route::delete('/anns/{id}', [App\Http\Controllers\AnnouncementController::class, 'destroy'])->name('delete-ann');
    Route::get('/editRequirements', function () {
        return view('admin.homepage.editRequirements');
    });
    Route::post('/reqadd', [App\Http\Controllers\RequirementsController::class, 'req'])->name('req');
    Route::get('/editRequirements', [App\Http\Controllers\RequirementsController::class, 'listofreqs'])->name('listofreqs');
    Route::delete('/reqs/{id}', [App\Http\Controllers\RequirementsController::class, 'destroy'])->name('delete-row');

    //stalls
    Route::get('/stalladd', [App\Http\Controllers\StallController::class, 'showForm'])->name('stalladd');
    Route::post('/stalladd', [App\Http\Controllers\StallController::class, 'saveStall'])->name('saveStall');
    Route::get('/stallview', [App\Http\Controllers\StallController::class, 'showStalls'])->name('stallview');

    //floor 
    Route::get('/flooradd', function () {
        return view('admin.floor.flooradd');
    });
    Route::post('/save-floor', [App\Http\Controllers\FloorController::class, 'saveFloor'])->name('saveFloor');
    Route::get('/floorview', [App\Http\Controllers\FloorController::class, 'showFloors'])->name('floorview');

    //rent 
    Route::get('/rent', function () {return view('admin.rent');});
    Route::post('/rentadd', [App\Http\Controllers\RentController::class, 'renting'])->name('rent');
    Route::get('/rent', [App\Http\Controllers\RentController::class, 'getFloors'])->name('getFloors');
    Route::get('/show-tenant', [App\Http\Controllers\RentController::class, 'showTenant'])->name('showTenant');

    //lost and found
    Route::get('/lostfound', function () {
        return view('admin.lostfound');
    });
    Route::post('/lostfound/update', [App\Http\Controllers\LostFoundController::class, 'updateLostFound'])->name('updateLostFound');

    Route::prefix('admin')->middleware(['auth'])->group(function() {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DasboardController::class, 'index']);
    });

    //tenants
    Route::post('/tenant/add', [App\Http\Controllers\TenantController::class, 'addtenant'])->name('addtenant');
    Route::get('/tenantlists', [App\Http\Controllers\TenantListController::class, 'index'])->name('tenantlists');
    Route::post('/tenantlists/postbill', [App\Http\Controllers\TenantListController::class, 'postBill'])->name('postBill');
    Route::post('/tenantlists/postallbill', [App\Http\Controllers\TenantListController::class, 'postAllBill'])->name('postAllBill');
    Route::post('/tenantlists/archive', [App\Http\Controllers\TenantListController::class, 'archiveTenant'])->name('archive-tenant');
    Route::get('/viewtenant', [App\Http\Controllers\TenantListController::class, 'viewTenantData'])->name('viewtenant');
    Route::post('/tenant/update', [App\Http\Controllers\TenantListController::class,'updateTenantData'])->name('updateTenantData');
    Route::get('/archivetenant', function () {
        $rent = DB::table('rentstall')->select('id','fullname','contact', 'emailadd', 'payment','totalamount')
                ->where('is_archived', '=', '1')
                ->get();
        return view('admin.archives', compact('rent'));
    });

    //lost and found
    Route::post('/lost-add', [App\Http\Controllers\LostFoundController::class, 'addlost'])->name('addlost');
    Route::get('/lostfound', [App\Http\Controllers\LostFoundController::class, 'showLostFound'])->name('lostfound');
    Route::get('/viewlostfound', [App\Http\Controllers\LostFoundController::class, 'viewLostFound'])->name('viewLostFound');
    
    //reports
    Route::get('/paymentreports', [App\Http\Controllers\PaymentReportController::class, 'viewReports'])->name('viewReports');
    //Route::get('/paymentreports', [App\Http\Controllers\PaymentReportController::class, 'viewTenantPayment'])->name('viewTenantPayment');
    Route::get('/billreports', function () {
        return view('admin.repors.billreports');
    });
    Route::get('/billreports', [App\Http\Controllers\TenantListController::class, 'billRep'])->name('billRep');

    Route::get('/paid_process', [App\Http\Controllers\TenantListController::class, 'paid_process'])->name('paid_process');
    Route::get('/unpaid_process', [App\Http\Controllers\TenantListController::class, 'unpaid_process'])->name('unpaid_process');
});



// tenant pages
Route::middleware([isTenant::class, 'auth'])->group(function () {

    //dashboard
    Route::get('/tenant-dashboard', function () {
        return view('admin.tenantside.tenant-dashboard');
    });

    //navbar
    Route::get('/tenant-accountsettings', function () {
        return view('admin.tenantside.tenant-accountsettings');
    });
    Route::get('/tenant-activitylog', function () {
        return view('admin.tenantside.tenant-activitylog');
    });

    //transaction
    Route::get('/payment', function () {
        return view('admin.tenantside.payment');
    });
    Route::post('/payment-add', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::get('/paymenthistory', [App\Http\Controllers\PaymentController::class, 'viewPayment'])->name('viewPayment');
    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'billPay'])->name('billPay');
    Route::get('/billsnotice', function () {
        // $results = DB::table('tenant_bills')->where([['status', '=', '0'],['rentstall_id', '=', '1'] ])->get();
        $results = DB::table('tenant_bills')
        ->leftJoin('rentstall', 'tenant_bills.rentstall_id', '=', 'rentstall.id')
        ->where('status', '=', 'pending')
        ->where('emailadd', '=', Auth::user()->email)
        ->get();
        return view('admin.tenantside.billsnotice', compact(['results']));
    });

    //about
    Route::get('/cmainfo', function () {
        return view('admin.tenantside.about.cmainfo');
    });
    Route::get('/developer', function () {
        return view('admin.tenantside.about.developer');
    });

});
