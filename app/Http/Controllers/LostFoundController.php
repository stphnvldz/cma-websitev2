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
        $lostfound = DB::table('lostandfound')->select('id','itemname','description','dateoflost')->get();
        return view('admin.lostfound', compact('lostfound'));
    }
}
