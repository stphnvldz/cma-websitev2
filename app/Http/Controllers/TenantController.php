<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tenant;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;


class TenantController extends Controller
{
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

        return redirect('/tenant');
    }
}
