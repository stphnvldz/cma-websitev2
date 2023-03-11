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
        $tenant->stallnum = $request->input('stallnum');
        $tenant->stallname = $request->input('stallname');
        $tenant->stalltype = $request->input('stalltype');
        $tenant->payment = $request->input('payment');
        $tenant->stallprice = $request->input('stallprice');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
            $tenant->image = $filename;
        }

        $tenant->save();

        return redirect('/tenant');
    }
    //public function show(Product $product)
    //{
     //   return view('products.show',compact('product'));
   // }
    
}
