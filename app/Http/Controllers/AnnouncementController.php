<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function saveAnnouncement(Request $request)
    {
        // retrieve data from input fields
        $eventname = $request->input('eventname');
        $description = $request->input('description');

        // save data to database
        $announcement = new announcement;
        $announcement->eventname = $eventname;
        $announcement->description = $description;
        $announcement->save();

        // redirect to a success page
        return redirect('/announcement')->with('success', 'Announcement uploaded successfully!');
    }
    public function showAnnouncementForm(Request $request)
    {
        //$announcements = Announcement::latest()->take(10)->get(); // Fetch the latest 10 announcements
        $announcements = Announcement::all();
        return view('main', compact('announcements'));
    }
}