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
        $tenants = DB::table('tenant')->select('id','fullname','contact', 'emailadd')->get();
        return view('admin.tenantlists', compact('tenants'));
    }

    public function viewTenantData(Request $request){
        $id = $request->input('id');

        $db = DB::table('tenant')
        ->where('id', '=', $id)
        ->first();
        
        return view('admin.viewtenant', ['data' => $db]);
    }

    public function updateTenantData(Request $request){
        $id = $request->input('id');

        $db = DB::table('tenant')
        ->where('id', '=', $id)
        ->update([
            'fullname' => $request->input('fullname'),
            'dateofbirth' => $request->input('dateofbirth'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
            'emailadd' => $request->input('emailadd'),
            'stallnum' => $request->input('stallnum'),
            'stallname' => $request->input('stallname'),
            'stalltype' => $request->input('stalltype'),
            'payment' => $request->input('payment'),
            'stallprice' => $request->input('stallprice'),
        ]);

        if($request->hasFile('image')){
            $tenant = DB::table('tenant')->where('id', '=', $id)->first();

            File::delete('public/img/' . $tenant->image);

            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('public/img'), $filename);

            DB::table('tenant')
            ->where('id', '=', $id)
            ->update(['image' => $filename,]);
        }

        return redirect()->back()->with('success', 'Tenant information updated successfully');
    }
}