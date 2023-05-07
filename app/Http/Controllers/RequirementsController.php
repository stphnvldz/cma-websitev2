<?php

namespace App\Http\Controllers;

use App\Models\Requirements;
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
}
