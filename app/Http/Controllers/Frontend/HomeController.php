<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Event;
use App\Models\Job;
use App\Models\LatestTech;
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

        $latestTechs = LatestTech::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)->get();
        $biggerItem = $latestTechs->splice(0, 1);
        $smallerItems = $latestTechs->all();

        return view('frontend.index', compact('courses', 'events', 'jobs', 'biggerItem', 'smallerItems'));
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

        $extraCourses = Course::query()
            ->where('status', 1)
            ->whereNot('id', $course->id)
            ->orderBy('created_at', 'asc')
            ->take(3)->get();

        $relatedCourses = Course::query()
            ->where('status', 1)
            ->whereNot('id', $course->id)
            ->orderBy('created_at', 'asc')
            ->take(2)->get();

        return view('frontend.viewCourse', compact('course', 'relatedCourses', 'extraCourses'));
    }
    public function students()
    {
        $jobs = Job::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('frontend.jobs', compact('jobs'));
    }
    public function aboutUs()
    {
        return view('frontend.aboutus');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
