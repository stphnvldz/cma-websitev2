<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

class TenantListController extends Controller
{
    public function index()
    {
        $rent = DB::table('rentstall')->select('id','fullname','contact', 'emailadd')->get();
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