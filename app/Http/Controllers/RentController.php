<?php

namespace App\Http\Controllers;

use App\Models\RentStall;
use App\Models\Stall;
use App\Models\Floor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RentController extends Controller
{
    // Controller function to fetch floors data
    public function getFloors()
    {
        // Fetch floors data from your floor table
        $floors = Floor::all();


        $rentedStalls = DB::table('rentstall')->select('selectedStallTextBox')
            ->where('is_archived', '=', '0')
            ->get();
        $implode = $rentedStalls->implode('selectedStallTextBox', ', ');
        $rentedStallsArray = explode(', ', $implode);
        $stallNumbers = Floor::leftJoin('stalls', 'floors.floornumber', '=', 'stalls.floornumber')
        ->select('stalls.stallnumber' , 'floors.id')
        ->whereNotIn('stalls.stallnumber', $rentedStallsArray)
        ->get();



        $formattedStallNumbers = [];
            foreach ($stallNumbers as $key => $value) {
                $formattedStallNumbers[$value['id']][] = $value['stallnumber'];
            }

        return view('admin.tenant.rent', ['floors' => $floors , 'stallNumbers' => $formattedStallNumbers]);
    }

    public function renting(Request $request){
        $rent = new RentStall();
        $rent->fullname = $request->input('fullname');
        $rent->dateofbirth = $request->input('dateofbirth');
        $rent->address = $request->input('address');
        $rent->contact = $request->input('contact');
        $rent->emailadd = $request->input('emailadd');

        $maxSize = 2 * 1024 * 1024;
        if($request->hasFile('image')){
            $size = $request->file('image')->getSize();
            if($size > $maxSize){
                return redirect('/rent');
                die();
            }
        }

        $rent->image = 'blank.jpg';
        if($request->hasFile('image')){
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = $rent->fullname . '.' . $extension;
            $path = $request->file('image')->storeAs($destinationPath, $filename);
            $rent->image = $filename;
        }

        $rent->stalltype = $request->input('stalltype');
        $rent->stallname = $request->input('stallname');
        $rent->payment = $request->input('payment');
        $rent->amount = $request->input('amount');
        $rent->selectedStallTextbox = $request->input('selectedStallTextbox');
        $rent->totalamount = $request->input('totalamount');

        $rent->save();

        return redirect('/rent');
    }

    //public function index()
    //{
    //    return view('admin.rent');
    //}

    //public function showTenant()
    //{
    //    $tenants = DB::table('tenant')->select('id', 'fullname', 'contact', 'emailadd')->get();
    //    return response()->json($tenants);
    //}
}
