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

        return view('index', compact('courses', 'events'));
    }
}
