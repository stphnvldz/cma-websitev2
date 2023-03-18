<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenant;
use Illuminate\Support\Facades\DB;

class TenantListController extends Controller
{
    public function index()
    {
        $tenants = DB::table('tenant')->select('id','fullname','stallname' ,'stallnum', 'stalltype')->get();
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
            'image' => $request->input('image'),
        ]);

        return redirect()->back()->with('success', 'Tenant information updated successfully');
    }
}