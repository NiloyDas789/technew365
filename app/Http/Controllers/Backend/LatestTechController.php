<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLatestTechRequest;
use App\Http\Requests\UpdateLatestTechRequest;
use App\Models\LatestTech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LatestTechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('latestTech.access');
        $latestTechs = LatestTech::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $this->putSL($latestTechs);
        return view('backend.latestTech.index', compact('latestTechs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('latestTech.create');
        return view('backend.latestTech.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLatestTechRequest $request)
    {
        $this->checkPermission('latestTech.store');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;

        if ($request->hasFile('image')) {
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/latestTech/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        LatestTech::create($validated);

        return redirect()->route('latestTech.index')
                        ->with('success', 'LatestTech created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LatestTech $latestTech)
    {
        $this->checkPermission('latestTech.show');
        return view('backend.latestTech.show', compact('latestTech'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestTech $latestTech)
    {
        $this->checkPermission('latestTech.edit');
        return view('backend.latestTech.edit', compact('latestTech'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLatestTechRequest $request, LatestTech $latestTech)
    {
        $this->checkPermission('latestTech.update');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;
        if ($request->hasFile('image')) {
            if (File::exists('storage/' . $latestTech->image)) {
                File::delete('storage/' . $latestTech->image);
            }
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/latestTech/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        $latestTech->update($validated);

        return redirect()->route('latestTech.index')
                        ->with('success', 'LatestTech updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestTech $latestTech)
    {
        $this->checkPermission('latestTech.destroy');
        $latestTech->delete();
        return redirect()->route('latestTech.index')
                        ->with('success', 'LatestTech deleted successfully');
    }
}
