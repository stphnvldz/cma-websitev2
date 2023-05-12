<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Payment;
use App\Models\RentStall;
use App\Models\Stall;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DasboardController extends Controller
{
    public function index()
    {

        $totalRegisteredTenants = User::where([['role_as', '=', 0]])->get()->count();
        $totalStalls = Stall::all()->count();


        $rentedStalls = DB::table('rentstall')->select('selectedStallTextBox')
        ->where('is_archived', '=', '0')
        ->get();
        $implode = $rentedStalls->implode('selectedStallTextBox', ', ');
        $rentedStallsArray = explode(', ', $implode);
        $stallNumbers = Floor::leftJoin('stalls', 'floors.floornumber', '=', 'stalls.floornumber')
        ->select('stalls.stallnumber' , 'floors.id')
        ->whereNotIn('stalls.stallnumber', $rentedStallsArray)
        ->get();


        $totalAvailableStalls = $stallNumbers->count();
        $totalOccupiedStalls = count($rentedStallsArray);
        $dailySales = Payment::whereBetween('created_at',
            [
                Carbon::now()->format('Y-m-d 00:00:00'),
                Carbon::now()->format('Y-m-d 23:59:59')
            ]
        )
        ->get()->sum('amount');

        $weeklySales = Payment::whereBetween('created_at',
            [
                Carbon::now()->startOfWeek()->format('Y-m-d 00:00:00'),
                Carbon::now()->endOfWeek()->format('Y-m-d 23:59:59')
            ]
        )
        ->get()->sum('amount');

        $monthlySales = Payment::whereBetween('created_at',
            [
                Carbon::now()->format('Y-m-01 00:00:00'),
                Carbon::now()->format('Y-m-31 23:59:59')
            ]
        )
        ->get()->sum('amount');

        $yearlySales = Payment::whereBetween('created_at',
            [
                Carbon::now()->format('Y-01-01 00:00:00'),
                Carbon::now()->format('Y-12-31 23:59:59')
            ]
        )
        ->get()->sum('amount');

        $dashboardInfo = [
            'totalRegisteredTenants' => $totalRegisteredTenants,
            'totalStalls' => $totalStalls,
            'totalAvailableStalls' => $totalAvailableStalls,
            'totalOccupiedStalls' => $totalOccupiedStalls,
            'dailySales' => $dailySales,
            'weeklySales' => $weeklySales,
            'monthlySales' => $monthlySales,
            'yearlySales' => $yearlySales,
        ];

        return view('admin.dashboard', compact('dashboardInfo'));
    }

}
