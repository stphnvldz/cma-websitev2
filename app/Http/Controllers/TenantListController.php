<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantListController extends Controller
{
    public function index()
    {
        $tenants = DB::table('tenant')->select('fullname','stallname' ,'stallnum', 'stalltype')->get();
        return view('admin.tenantlists', compact('tenants'));
    }
}
