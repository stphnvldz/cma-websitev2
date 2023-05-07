<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    public function payment(Request $request){
        $payment = new Payment();
        $payment->fullname = $request->input('fullname');
        $payment->stallnumber = $request->input('stallnumber');
        $payment->contact = $request->input('contact');
        $payment->type = $request->input('type');
        $payment->amount = $request->input('amount');
        $payment->datefrom = $request->input('datefrom');
        $payment->dateto = $request->input('dateto');
        $payment->payment = $request->input('payment');
        $payment->refnumber = $request->input('refnumber');
        $payment->status= $request->input('status');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/img'), $filename);
            $payment->image = $filename;
        }

        $payment->save();

        return redirect('/payment');
    }
    public function viewPayment(Request $request){
        $payment = DB::table('payment')->select('id','fullname','stallnumber','contact', 'type','amount','datefrom','dateto','payment','status')->get();
        return view('admin.tenantside.paymenthistory', compact('payment'));
    }
    
}
