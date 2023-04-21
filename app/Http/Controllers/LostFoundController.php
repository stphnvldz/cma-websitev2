<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostFound;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LostFoundController extends Controller
{
    public function lostandfound(Request $request){
        $lostandfound = new lostandfound();
        $lostandfound->itemName = $request->input('itemName');
        $lostandfound->dateoflost = $request->input('dateoflost');
        $lostandfound->description = $request->input('description');
        
        if ($request->hasFile('lostfoundimage')) {
            $image = $request->file('lostfoundimage');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('public/img'), $filename);
            $lostandfound->image = $filename;
        }

        $lostandfound->save();

        return redirect('/lostfound');
    }
}
