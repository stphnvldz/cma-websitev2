<?php

namespace App\Http\Controllers;

use App\Models\tenant;
use App\Models\Stall;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function showFloor()
    {
        $floors = Stall::pluck('floornumber', 'id');
        return view('admin.rent', compact('floors'));
    }

    //public function showStall()
    //{
    //    $stalls = Stall::pluck('stallnumber', 'id');
    //    return view('admin.rent', compact('stalls'));
    //}

    public function addtenant(Request $request){
        $tenant = new tenant();
        $tenant->fullname = $request->input('fullname');
        $tenant->dateofbirth = $request->input('dateofbirth');
        $tenant->address = $request->input('address');
        $tenant->contact = $request->input('contact');
        $tenant->emailadd = $request->input('emailadd');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('public/img'), $filename);
            $tenant->image = $filename;
        }

        $tenant->save();

        return redirect('/rent');
    }
    //public function viewTenantTable()
    //{
    //    $tenants = Tenant::select('id', 'fullname', 'contact', 'emailadd')->get();
    //    return view('admin.rent', compact('tenants'));
    //}
    //public function selectTenant(Request $request){
    //    $id = $request->input('id');

    //    $db = DB::table('tenant')
    //    ->where('id', '=', $id)
    //   ->first();
        
    //   return view('admin.rent', ['data' => $db]);
    //}
}