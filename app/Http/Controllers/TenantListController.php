<?php

namespace App\Http\Controllers;

use App\Models\RentStall;
use Illuminate\Http\Request;
use App\Models\tenant;
use App\Models\TenantBills;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Laravel\Ui\Presets\React;

class TenantListController extends Controller
{//pag show ng lists
    public function index()
    {
        $rent = DB::table('rentstall')->select('id','fullname','contact', 'emailadd', 'payment','totalamount')
            ->where('is_archived', '=', '0')
            ->get();

        return view('admin.tenantlists', compact('rent'));
    }



    public function viewTenantData(Request $request){
        $id = $request->input('id');

        $db = DB::table('rentstall')
        ->where('id', '=', $id)
        ->first();

        return view('admin.viewtenant', ['data' => $db]);
    }

    public function updateTenantData(Request $request){
        $id = $request->input('id');

        $db = DB::table('rentstall')
        ->where('id', '=', $id)
        ->update([
            'fullname' => $request->input('fullname'),
            'dateofbirth' => $request->input('dateofbirth'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
            'emailadd' => $request->input('emailadd'),
            'stalltype' => $request->input('stalltype'),
            'stallname' => $request->input('stallname'),
            'payment' => $request->input('payment'),
            'amount' => $request->input('amount'),
            'selectedStallTextbox' => $request->input('selectedStallTextbox'),
            'totalamount' => $request->input('totalamount'),
        ]);

        if($request->hasFile('image')){
            $rent = DB::table('rentstall')->where('id', '=', $id)->first();

            File::delete('public/img/' . $rent->image);

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/img'), $filename);

            DB::table('rentstall')
            ->where('id', '=', $id)
            ->update(['image' => $filename,]);
        }

        return redirect()->back()->with('success', 'Tenant information updated successfully');
    }

    public function updateTenantData2(Request $request){
        $id = $request->input('id');

        $db = DB::table('rentstall')
        ->where('emailadd', '=', Auth::user()->email)
        ->update([
            'fullname' => $request->input('fullname'),
            'dateofbirth' => $request->input('dateofbirth'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
            'emailadd' => $request->input('emailadd'),
            'stalltype' => $request->input('stalltype'),
            'stallname' => $request->input('stallname'),
            'payment' => $request->input('payment'),
            'amount' => $request->input('amount'),
            'selectedStallTextbox' => $request->input('selectedStallTextbox'),
            'totalamount' => $request->input('totalamount'),
        ]);

        if($request->hasFile('image')){
            $rent = DB::table('rentstall')->where('emailadd', '=', Auth::user()->email)->first();

            // File::delete('public/img/' . $rent->image);

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/img'), $filename);

            DB::table('rentstall')
            ->where('emailadd', '=', Auth::user()->email)
            ->update(['image' => $filename,]);
        }

        return redirect()->back()->with('success', 'Tenant information updated successfully');
    }

    public function postBill(Request $request) {
        $model = new TenantBills();
        $model->rentstall_id = $request->input('rentstall_id');
        $model->notice =  $request->input('notice');
        $model->description =  $request->input('description');
        $model->date_from =  $request->input('datefrom');
        $model->date_to =  $request->input('dateto');
        $model->amount =  $request->input('amount');
        $model->status =  ("Pending"); // pending
        $model->save();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function postAllBill(Request $request) {


        try {
            DB::beginTransaction();
            $rent = DB::table('rentstall')->select('id','fullname','contact', 'emailadd', 'payment','totalamount')->get();

            foreach ($rent as $key => $value) {
                $model = new TenantBills();
                $model->notice =  $request->input('notice');
                $model->description =  $request->input('description');
                $model->date_from =  $request->input('datefrom');
                $model->date_to =  $request->input('dateto');
                $model->status =  ("Pending"); // pending
                $model->rentstall_id = $value->id;
                $model->amount =  $value->totalamount;
                $model->save();
            }

            DB::commit();
            return Redirect::back()->with('message','Operation Successful!');
        } catch (Exception $e) {
            DB::rollback();
            return Redirect::back()->with('message', $e->getMessage());

        }

    }

    public function archiveTenant(Request $request) {
        $id = $request->input('id');
        $result = RentStall::find($id);
        $result->is_archived = 1;
        $result->save();
        return Redirect::back()->with('message','Operation Successful !');
    }
    //paglagay ng laman sa bill reports
    public function billRep()
    {
        $bill = DB::table('tenant_bills')
        ->leftJoin('rentstall', 'tenant_bills.rentstall_id', '=', 'rentstall.id')
        ->get();
        return view('admin.repors.billreports', compact('bill'));

    }


    //pag update ng status

    public function paid_process(Request $request)
    {

    $id = $request->query('id');

    DB::table('tenant_bills')
        ->where('id', $id)
        ->update(['status' => 'Paid']);

        return redirect('/billreports');
    }

    public function unpaid_process(Request $request)
    {

    $id = $request->query('id');

    DB::table('tenant_bills')
        ->where('id', $id)
        ->update(['status' => 'Unpaid']);

        return redirect('/billreports');
    }

}
