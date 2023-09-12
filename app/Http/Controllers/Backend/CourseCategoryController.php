<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseCategoryRequest;
use App\Http\Requests\UpdateCourseCategoryRequest;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('course-category.access');
        $courseCategories = CourseCategory::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $this->putSL($courseCategories);
        return view('backend.courseCategory.index', compact('courseCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('course-category.create');
        return view('backend.courseCategory.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseCategoryRequest $request)
    {
        $this->checkPermission('course-category.create');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;

        if ($request->hasFile('image')) {
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/courseCategory/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        CourseCategory::create($validated);

        return redirect()->route('course-category.index')
                        ->with('success', 'CourseCategory created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CourseCategory $courseCategory)
    {
        $this->checkPermission('course-category.show');
        return view('backend.courseCategory.show', compact('courseCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCategory $courseCategory)
    {
        $this->checkPermission('course-category.edit');
        return view('backend.courseCategory.edit', compact('courseCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseCategoryRequest $request, CourseCategory $courseCategory)
    {
        $this->checkPermission('course-category.edit');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;
        if ($request->hasFile('image')) {
            if (File::exists('storage/' . $courseCategory->image)) {
                File::delete('storage/' . $courseCategory->image);
            }
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/courseCategory/image', $fileName, 'public');
            $validated['image'] = $image;
        }

        $courseCategory->update($validated);

        return redirect()->route('course-category.index')
                        ->with('success', 'CourseCategory updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseCategory $courseCategory)
    {
        $this->checkPermission('course-category.delete');
        $courseCategory->delete();
        return redirect()->route('course-category.index')
                        ->with('success', 'CourseCategory deleted successfully');
    }
}
