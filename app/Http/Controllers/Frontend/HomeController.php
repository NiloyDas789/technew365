<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Event;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)->get();

        $events = Event::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)->get();

        $jobs = Job::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(4)->get();

        return view('frontend.index', compact('courses', 'events', 'jobs'));
    }

    public function courses()
    {
        $courses = Course::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('frontend.courses', compact('courses'));
    }
    public function viewCourse($slug)
    {
        $course = Course::query()
            ->where('slug', $slug)
            ->firstOrFail();
        return view('frontend.view_course', compact('course'));
    }
    public function jobs()
    {
        $jobs = Job::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('frontend.jobs', compact('jobs'));
    }
}
