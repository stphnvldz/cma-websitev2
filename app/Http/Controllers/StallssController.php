<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StallsController extends Controller
{
    public function tenants(Request $request) {
        if($request->isMethod('post')){
            // Retrieve selected stall value(s)
            $selectedStall1 = $request->input('stall-select1');
            $selectedStall2 = $request->input('stall-select2');
            $selectedStall3 = $request->input('stall-select3');

            // Concatenate all selected values into one string
            $selectedStalls = $selectedStall1 . ' ' . $selectedStall2 . ' ' . $selectedStall3;

            // Debug statement
            // comment ko muna dd($selectedStalls);

            // Pass the selected stall value(s) to the tenant view
            return redirect('/tenant?selectedStalls=' . urlencode($selectedStalls));
        }
        return view('layouts.stalls');
    }
}
