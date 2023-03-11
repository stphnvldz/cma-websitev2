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
        
        return view('admin.viewtenant', ['data' => $db]);
    }

}
