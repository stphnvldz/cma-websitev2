<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class PaymentReportController extends Controller
{
    public function viewReports(Request $request){
        $payment = DB::table('payment')->select('id','fullname','stallnumber','contact', 'type','amount','datefrom','dateto','payment','status')->get();
        return view('admin.repors.paymentreports', compact('payment'));
    }
    //public function viewTenantPayment(Request $request){
    //    $id = $request->input('id');

    //    $db = DB::table('payment')
    //    ->where('id', '=', $id)
    //    ->first();
        
    //    return view('admin.repors.paymentreports', ['data' => $db]);
    //}
}
