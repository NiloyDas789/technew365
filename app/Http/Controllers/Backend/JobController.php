<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('job.access');
        $jobs = Job::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $this->putSL($jobs);
        return view('backend.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('job.create');
        return view('backend.job.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $this->checkPermission('job.create');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;

        if ($request->hasFile('image')) {
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/job/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        Job::create($validated);

        return redirect()->route('job.index')
                        ->with('success', 'Job created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $this->checkPermission('job.show');
        return view('backend.job.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $this->checkPermission('job.edit');
        return view('backend.job.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $this->checkPermission('job.update');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;
        if ($request->hasFile('image')) {
            if (File::exists('storage/' . $job->image)) {
                File::delete('storage/' . $job->image);
            }
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/job/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        $job->update($validated);

        return redirect()->route('job.index')
                        ->with('success', 'Job updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $this->checkPermission('job.destroy');
        $job->delete();
        return redirect()->route('job.index')
                        ->with('success', 'Job deleted successfully');
    }
}
