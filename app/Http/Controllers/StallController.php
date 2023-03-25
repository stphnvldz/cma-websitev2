<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Stall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StallController extends Controller
{
    public function showForm()
    {
        $floors = Floor::pluck('floornumber', 'id');
        $lastStallNumber = '000'; // Example value
        return view('admin.stall.stalladd', compact('floors','lastStallNumber'));
    }
    public function saveStall(Request $request)
    {
        // validate input fields
        $validatedData = $request->validate([
        'floornumber' => 'required',
        'stallnumber' => 'required',
        ]);

        // retrieve data from input fields
        $floornumber = $request->input('floornumber');
        $stallnumber = $request->input('stallnumber');

        // retrieve the floor record using the selected floornumber
        $floors = DB::table('floors')->where('floornumber', '=', $floornumber)->first();

        // save data to database
        $stall = new stall;
        $stall->floornumber = $floornumber;
        $stall->floor_id = $floors->id; // set the floor_id using the retrieved floor record
        $stall->stallnumber = $stallnumber;
        $stall->save();

        // redirect to a success page
        return redirect('/stalladd')->with('success', 'Stall added successfully!');
    }
}
