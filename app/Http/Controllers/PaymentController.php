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
        $payment->status= ("Pending");
        $payment->email= Auth::user()->email;

        $maxSize = 2 * 1024 * 1024;
        if($request->hasFile('image')){
            $size = $request->file('image')->getSize();
            if($size > $maxSize){
                return redirect('/rent');
                die();
            }
        }
        
        $payment->image = 'blank.jpg';
        if($request->hasFile('image')){
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = $payment->id . '.' . $extension;
            $path = $request->file('image')->storeAs($destinationPath, $filename);
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
    //public function billPay(Request $request){

    //    $data = array();
    //    $query = $request->query();
    //    $id = $request->input('id');

    //    $data['db'] = DB::table('tenant_bills')
    //    ->leftJoin('rentstall', 'tenant_bills.rentstall_id', '=', 'rentstall.id')
    // /   ->select(
    //        'rentstall.id',
    //        'rentstall.fullname',
    //        'rentstall.selectedStallTextbox',
    //        'rentstall.contact',
    //        'rentstall.payment',
    //        'rentstall.amount',
    //        'tenant_bills.date_from',
     //       'tenant_bills.date_to',
    //        )
    //    ->first();
    //    return view('admin.tenantside.payment', $data);
    //}
    public function billPay(Request $request){
        $id = $request->input('id');

        $db = DB::table('tenant_bills')
        ->where('tenant_bills.id', '=', $id)
        ->leftJoin('rentstall', 'tenant_bills.rentstall_id', '=', 'rentstall.id')
        ->select(
            'tenant_bills.id',
            'rentstall.fullname',
            'rentstall.selectedStallTextbox',
            'rentstall.contact',
            'rentstall.payment',
            'rentstall.amount',
            'tenant_bills.date_from',
            'tenant_bills.date_to',
            )
        ->first();

        return view('admin.tenantside.payment', ['data' => $db]);
    }
}
