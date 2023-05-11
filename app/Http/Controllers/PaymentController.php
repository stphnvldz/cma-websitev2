<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{   //pagsave sa database
    public function payment(Request $request){
        $payment = new Payment();
        $payment->tenant_bills_id = $request->input('tenant_bills_id');
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
        $payment->email= Auth::user()->email;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/img'), $filename);
            $payment->image = $filename;
        }

        $payment->save();

        return redirect('/payment?id='.$request->input('tenant_bills_id'));
    }
    //para sa payment history pag show nung table
    public function viewPayment(Request $request){

        $payment = DB::table('payment')
            ->select('id','fullname','stallnumber','contact', 'type','amount','datefrom','dateto','payment','status')
            ->where([['email','=', Auth::user()->email]])
            ->get();

        return view('admin.tenantside.paymenthistory', compact('payment'));
    }
    //pagbayad ni tenant na hindi na pati fillable
    public function billPay(Request $request){

        $data = array();
        $query = $request->query();
        $data['id'] = $query['id'];

        $data['db'] = DB::table('tenant_bills')
        ->leftJoin('rentstall', 'tenant_bills.rentstall_id', '=', 'rentstall.id')
        ->first();

        return view('admin.tenantside.payment', $data);
    }
}
