<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Job;

class DashboardController extends Controller
{
    public function index()
    {
        $courseCount = Course::where('status', 1)->count();
        $placementCount = Job::where('status', 1)->count();
        $certificationCount = Certification::where('status', 1)->count();
        $imageCount = Gallery::where('status', 1)->count();
        $events = Event::orderBy('id', 'DESC')->take(5)->get();

        return view('backend.dashboard', compact('courseCount', 'placementCount', 'certificationCount', 'imageCount', 'events'));
    }
}
