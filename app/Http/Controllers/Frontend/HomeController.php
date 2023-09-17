<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Certification;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\LatestTech;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courseCategories = CourseCategory::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)->get();

        $events = Event::query()
            ->where('status', 1)
            ->orderBy('date', 'asc')
            ->take(3)->get();

        $jobs = Job::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(4)->get();

        $books = Book::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)->get();

        $latestTechs = LatestTech::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)->get();
        $biggerItem = $latestTechs->splice(0, 1);
        $smallerItems = $latestTechs->all();

        return view('frontend.index', compact('courseCategories', 'events', 'jobs', 'biggerItem', 'smallerItems', 'books'));
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
    public function latestNews($slug)
    {
        $latestNews = LatestTech::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('frontend.viewNews', compact('latestNews'));
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
    public function certificate(Request $request)
    {
        // session()->flush();
        if ($request->has('id')) {
            $certification = Certification::where('student_id', $request->id)->first();
            if($certification == null) {
                return view('frontend.certificate')->with('error', 'Certificate not found!');
            }
            return view('frontend.certificate', compact('certification'));
        }
        return view('frontend.certificate');
    }
    public function getCertificate(Request $request)
    {
        // dd($request->all());

        // session()->put('certification', $certification);
        // if ($certification) {
        //     return view('frontend.certificate');
        // } else {
        //     return redirect()->back()->with('error', 'Certificate not found!');
        // }
    }
    public function gallery()
    {
        $galleries = Gallery::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('frontend.gallery', compact('galleries'));
    }
}
