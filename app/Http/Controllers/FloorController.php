<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\Floor;
use Illuminate\Support\Facades\DB;

class FloorController extends Controller
{
    public function saveFloor(Request $request)
    {
        // retrieve data from input fields
        $floornumber = $request->input('floornumber');
        $floordes = $request->input('floordes');

        // save data to database
        $floor = new Floor;
        $floor->floornumber = $floornumber;
        $floor->floordes = $floordes;
        $floor->save();

        // redirect to a success page
        return redirect('/flooradd')->with('success', 'Floor added successfully!');
    }
    public function showFloors()
    {
        $floor = DB::table('floors')->select('id','floornumber','floordes')->get();
        return view('admin.floor.floorview', compact('floor'));
    }
}
