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
        ->select('payment.id',
        'payment.fullname',
        'payment.stallnumber',
        'payment.type',
        'payment.amount',
        'payment.datefrom',
        'payment.payment',
        'payment.dateto',
        'payment.refnumber',
        'payment.status',
        'payment.image')
        ->get();
        return view('admin.repors.paymentreports', compact('payment'));
    }

    public function updatepaymentstatus(Request $request){
        $id = $request->input('id');

        $db = DB::table('payment')
        ->where('id', '=', $id)
        ->update([
            'status' => $request->input('status'),
        ]);
        
        return redirect()->back()->with('success', 'Payment status updated successfully');
    }
    
}
