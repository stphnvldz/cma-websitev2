<?php

namespace App\Http\Controllers;

use App\Models\LostFound;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LostFoundController extends Controller
{
    public function addlost(Request $request){
        $lostfound = new lostfound();
        $lostfound->itemname = $request->input('itemname');
        $lostfound->dateoflost = $request->input('dateoflost');
        $lostfound->description = $request->input('description');
        $lostfound->status = $request->input('status');
        
        $maxSize = 2 * 1024 * 1024;
        if($request->hasFile('image')){
            $size = $request->file('image')->getSize();
            if($size > $maxSize){
                return redirect('/rent');
                die();
            }
        }
        
        $lostfound->image = 'blank.jpg';
        if($request->hasFile('image')){
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = $lostfound->itemname . '.' . $extension;
            $path = $request->file('image')->storeAs($destinationPath, $filename);
            $lostfound->image = $filename;
        }

        $lostfound->save();

        return redirect('/lostfound');
    }
    public function showLostFound()
    {
        $lostfound = DB::table('lostandfound')->select('id','itemname','description','dateoflost', 'status')->get();
        return view('admin.lostfound', compact('lostfound'));
    }

    public function viewLostFound(Request $request){
        $id = $request->input('id');

        $db = DB::table('lostandfound')
        ->where('id', '=', $id)
        ->first();
        
        return view('admin.viewlostfound', ['data' => $db]);
    }

    public function updateLostFound(Request $request){
        $id = $request->input('id');

        $db = DB::table('lostandfound')
        ->where('id', '=', $id)
        ->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Item information updated successfully');
    }
}

