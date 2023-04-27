<?php

namespace App\Http\Controllers;

use App\Models\tenant;
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
    
        $stallNumbers = Floor::leftJoin('stalls', 'floors.floornumber', '=', 'stalls.floornumber')
        ->select('stalls.stallnumber' , 'floors.id')->get();
        $formattedStallNumbers = [];
            foreach ($stallNumbers as $key => $value) {
                $formattedStallNumbers[$value['id']][] = $value['stallnumber'];
            }
        
        return view('admin.rent', ['floors' => $floors , 'stallNumbers' => $formattedStallNumbers]);
    }

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

        return redirect('/rent');
    }
    //public function showTenant()
    //{
    //    $tenants = DB::table('tenant')->select('id','fullname','contact', 'emailadd')->get();
    //    return view('admin.rent', compact('tenants'));
    //}

    public function index()
    {
        return view('admin.rent');
    }

    public function showTenant()
    {
        $tenants = DB::table('tenant')->select('id', 'fullname', 'contact', 'emailadd')->get();
        return response()->json($tenants);
    }
}