<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $image = $db->image; // replace "image" with the actual column name in your table
        
        return view('admin.viewtenant', ['data' => $db , 'image' => $image]);
    }

    public function editTenantData(Request $request){
        $id = $request->input('id');

        $db = DB::table('tenant')
        ->where('id', '=', $id)
        ->update([
            'contact' => $request->input('contact'),
        ]);
        
        return view('admin.viewtenant', ['data' => $db]);
    }
}