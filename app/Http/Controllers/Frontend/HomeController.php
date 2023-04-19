<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Event;
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

        return view('frontend.index', compact('courses', 'events'));
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
        return view ('frontend.view_course', compact('course'));
    }
}
