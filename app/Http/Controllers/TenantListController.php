<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenant;
use App\Models\TenantBills;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Laravel\Ui\Presets\React;

class TenantListController extends Controller
{
    public function index()
    {
        $rent = DB::table('rentstall')->select('id','fullname','contact', 'emailadd', 'payment','totalamount')->get();
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

    public function postBill(Request $request) {
        $model = new TenantBills();
        $model->rentstall_id = $request->input('rentstall_id');
        $model->notice =  $request->input('notice');
        $model->description =  $request->input('description');
        $model->date_from =  $request->input('datefrom');
        $model->date_to =  $request->input('dateto');
        $model->amount =  $request->input('amount');
        $model->status =  0; // pending
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
                $model->status =  0; // pending
                $model->rentstall_id = $value->id;
                $model->amount =  $value->totalamount;
                $model->save();
            }

            DB::commit();
            return Redirect::back()->with('message','Operation Successful !');
        } catch (Exception $e) {
            DB::rollback();
            return Redirect::back()->with('message', $e->getMessage());

        }

    }
    //public function archiveTenant($id)
    //{
        // Get the tenant with the specified id
    //    $tenant = Tenant::find($id);

        // Set the is_archived field to true
    //    $tenant->is_archived = true;

        // Save the changes
    //    $tenant->save();

        // Redirect back to the tenant list page
    //    return redirect()->route('tenant.list');
    //}
}
