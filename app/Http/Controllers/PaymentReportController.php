<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class PaymentReportController extends Controller
{
    //payment reports
    public function viewReports(Request $request){
        $payment = DB::table('payment')
        ->leftJoin('tenant_bills', 'payment.tenant_bills_id', '=', 'tenant_bills.id')
        ->get();
        return view('admin.repors.paymentreports', compact('payment'));
    }
}
