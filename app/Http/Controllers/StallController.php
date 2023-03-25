<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;

class StallController extends Controller
{
    public function showForm()
    {
        $floors = Floor::pluck('floornumber', 'id');
        $lastStallNumber = '000'; // Example value
        return view('admin.stall.stalladd', compact('floors','lastStallNumber'));
    }
}
