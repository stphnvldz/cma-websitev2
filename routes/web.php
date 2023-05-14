<?php

use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isTenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    Route::get('/dashboard', [App\Http\Controllers\Admin\DasboardController::class, 'index']);
    Route::get('/admin-accountsettings', function () {
        $admin = User::where([['users.email', '=', Auth::user()->email]])
            ->first();
        return view('admin.admin-accountsettings', compact('admin'));
    });
    Route::post('/admin-pass', function (Request $request) {

        if ($request->input('password') !== $request->input('confirmPassword')) {
            return redirect()->back()->with('error', 'Password does not match.');
        }
        $admin = User::where('email', '=', Auth::user()->email)->first();
        $admin->password = Hash::make($request->input('password'));
        $admin->save();
        return redirect()->back()->with('success', 'Admin password changed successfully!');
    });
    //Route::get('/admin-activitylog', function () {return view('admin.admin-activitylog');});

    //homepage
    Route::post('/announcementadd', [App\Http\Controllers\AnnouncementController::class, 'saveAnnouncement'])->name('saveAnnouncement');
    Route::get('/announcement', [App\Http\Controllers\AnnouncementController::class, 'listofannouncements'])->name('listofannouncements');
    Route::delete('/anns/{id}', [App\Http\Controllers\AnnouncementController::class, 'destroy'])->name('delete-ann');
    Route::get('/editRequirements', function () {return view('admin.homepage.editRequirements');});
    Route::post('/reqadd', [App\Http\Controllers\RequirementsController::class, 'req'])->name('req');
    Route::get('/editRequirements', [App\Http\Controllers\RequirementsController::class, 'listofreqs'])->name('listofreqs');
    Route::delete('/reqs/{id}', [App\Http\Controllers\RequirementsController::class, 'destroy'])->name('delete-row');
    //Route::get('/preview', function () {return view('admin.preview');});

    //stalls
    Route::get('/stalladd', [App\Http\Controllers\StallController::class, 'showForm'])->name('stalladd');
    Route::post('/stalladd', [App\Http\Controllers\StallController::class, 'saveStall'])->name('saveStall');
    Route::get('/stallview', [App\Http\Controllers\StallController::class, 'showStalls'])->name('stallview');

    //floor
    Route::get('/flooradd', function () {return view('admin.floor.flooradd'); });
    Route::post('/save-floor', [App\Http\Controllers\FloorController::class, 'saveFloor'])->name('saveFloor');
    Route::get('/floorview', [App\Http\Controllers\FloorController::class, 'showFloors'])->name('floorview');

    //rent
    Route::get('/rent', [App\Http\Controllers\RentController::class, 'getFloors'])->name('getFloors');
    Route::post('/rentadd', [App\Http\Controllers\RentController::class, 'renting'])->name('rent');
    Route::get('/rent', [App\Http\Controllers\RentController::class, 'getFloors'])->name('getFloors');
    Route::get('/show-tenant', [App\Http\Controllers\RentController::class, 'showTenant'])->name('showTenant');

    //lost and found
    Route::get('/lostfound', function () {return view('admin.lostfound');});
    Route::post('/lostfound/update', [App\Http\Controllers\LostFoundController::class, 'updateLostFound'])->name('updateLostFound');
    Route::post('/lost-add', [App\Http\Controllers\LostFoundController::class, 'addlost'])->name('addlost');
    Route::get('/lostfound', [App\Http\Controllers\LostFoundController::class, 'showLostFound'])->name('lostfound');
    Route::get('/viewlostfound', [App\Http\Controllers\LostFoundController::class, 'viewLostFound'])->name('viewLostFound');

    //tenants
    Route::post('/tenant/add', [App\Http\Controllers\TenantController::class, 'addtenant'])->name('addtenant');
    Route::get('/tenantlists', [App\Http\Controllers\TenantListController::class, 'index'])->name('tenantlists');
    Route::post('/tenantlists/postbill', [App\Http\Controllers\TenantListController::class, 'postBill'])->name('postBill');
    Route::post('/tenantlists/postallbill', [App\Http\Controllers\TenantListController::class, 'postAllBill'])->name('postAllBill');
    Route::post('/tenantlists/archive', [App\Http\Controllers\TenantListController::class, 'archiveTenant'])->name('archive-tenant');
    Route::get('/viewtenant', [App\Http\Controllers\TenantListController::class, 'viewTenantData'])->name('viewtenant');
    Route::post('/tenant/update', [App\Http\Controllers\TenantListController::class,'updateTenantData'])->name('updateTenantData');
    Route::get('/archivetenant', function () {
        $rent = DB::table('rentstall')->select('id','fullname','contact', 'emailadd', 'payment','totalamount','selectedStallTextbox')
                ->where('is_archived', '=', '1')
                ->get();
        return view('admin.tenant.archives', compact('rent'));
    });

    //reports
    Route::get('/paymentreports', [App\Http\Controllers\PaymentReportController::class, 'viewReports'])->name('viewReports');
    Route::post('/payment-status/update', [App\Http\Controllers\PaymentReportController::class, 'updatepaymentstatus'])->name('updatepaymentstatus');
    //Route::get('/paymentreports', [App\Http\Controllers\PaymentReportController::class, 'viewTenantPayment'])->name('viewTenantPayment');
    // Route::get('/billreports', function () { return view('admin.repors.billreports');});
    Route::get('/billreports', [App\Http\Controllers\TenantListController::class, 'billRep'])->name('billRep');
    Route::get('/paid_process', [App\Http\Controllers\TenantListController::class, 'paid_process'])->name('paid_process');
    Route::get('/unpaid_process', [App\Http\Controllers\TenantListController::class, 'unpaid_process'])->name('unpaid_process');

});



// tenant pages
Route::middleware([isTenant::class, 'auth'])->group(function () {

    //tenant side
    Route::get('/tenant-dashboard', function () {return view('admin.tenantside.tenant-dashboard');});
    Route::get('/tenant-accountsettings', function () {
        $info = User::leftJoin('rentstall', 'rentstall.emailadd', '=', 'users.email')
            ->where([['users.email', '=', Auth::user()->email]])
            ->first();
        return view('admin.tenantside.tenant-accountsettings', compact('info'));
    });
    Route::post('/update-password', function (Request $request) {

        if ($request->input('password') !== $request->input('confirmPassword')) {
            return redirect()->back()->with('error', 'Password does not match.');
        }
        $tenant = User::where('email', '=', Auth::user()->email)->first();
        $tenant->password = Hash::make($request->input('password'));
        $tenant->save();
        return redirect()->back()->with('success', 'Tenant information updated successfully!');
    });
    //Route::post('/tenant/update2', [App\Http\Controllers\TenantListController::class,'updateTenantData2'])->name('updateTenantData2');
    //Route::get('/tenant-activitylog', function () {return view('admin.tenantside.tenant-activitylog');});

    //paymemt
    Route::get('/payment', function () {return view('admin.tenantside.payment'); });
    Route::post('/payment-add', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::get('/paymenthistory', [App\Http\Controllers\PaymentController::class, 'viewPayment'])->name('viewPayment');
    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'billPay'])->name('billPay');


    //transaction
    Route::get('/payment', function () { return view('admin.tenantside.payment');});
    Route::post('/payment-add', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::get('/paymenthistory', [App\Http\Controllers\PaymentController::class, 'viewPayment'])->name('viewPayment');
    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'billPay'])->name('billPay');
    Route::get('/billsnotice', function () {
        // $results = DB::table('tenant_bills')->where([['status', '=', '0'],['rentstall_id', '=', '1'] ])->get();
        $results = DB::table('tenant_bills')
        ->leftJoin('rentstall', 'tenant_bills.rentstall_id', '=', 'rentstall.id')
        ->where('status', '=', 'pending' )
        ->where('emailadd', '=', Auth::user()->email)
        ->select('*', 'tenant_bills.id as tenant_bills_id')
        ->get();
        return view('admin.tenantside.billsnotice', compact(['results']));
    });

    //about
    Route::get('/cmainfo', function () {return view('admin.tenantside.about.cmainfo');});
    Route::get('/developer', function () {return view('admin.tenantside.about.developer');});

});
