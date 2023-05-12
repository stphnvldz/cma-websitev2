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
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('public/img'), $filename);
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
            'itemname' => $request->input('itemname'),
            'dateoflost' => $request->input('dateoflost'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);

        if($request->hasFile('image')){
            $lostfound = DB::table('lostandfound')->where('id', '=', $id)->first();

            File::delete('public/img/' . $lostfound->image);

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/img'), $filename);

            DB::table('lostandfound')
            ->where('id', '=', $id)
            ->update(['image' => $filename,]);
        }

        return redirect()->back()->with('success', 'Item information updated successfully');
    }
}

