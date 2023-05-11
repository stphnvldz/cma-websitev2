<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class RequirementsController extends Controller
{
    public function req(Request $request){
        $req = new Requirements();
        $req->requirements = $request->input('requirements');
        $req->notes = $request->input('notes');

        $req->save();

        return redirect('/editRequirements')->with('success', 'Requirements uploaded successfully!');
    }
    public function showreq(Request $request)
    {
        $req = Requirements::all();
        return view('layouts.requirements', compact('req'));
    }
    public function listofreqs()
    {
        $req = DB::table('requirements')->select('id','requirements','notes')->get();
        return view('admin.homepage.editRequirements', compact('req'));
    }
}
