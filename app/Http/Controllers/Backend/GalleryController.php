<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('gallery.access');
        $galleries = Gallery::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $this->putSL($galleries);
        return view('backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('gallery.create');
        return view('backend.gallery.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        $this->checkPermission('gallery.store');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;

        if ($request->hasFile('image')) {
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/gallery/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        Gallery::create($validated);

        return redirect()->route('gallery.index')
                        ->with('success', 'Gallery created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $this->checkPermission('gallery.show');
        return view('backend.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $this->checkPermission('gallery.edit');
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $this->checkPermission('gallery.update');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;
        if ($request->hasFile('image')) {
            if (File::exists('storage/' . $gallery->image)) {
                File::delete('storage/' . $gallery->image);
            }
            $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('images/gallery/image', $fileName, 'public');
            $validated['image'] = $image;
        }
        $gallery->update($validated);

        return redirect()->route('gallery.index')
                        ->with('success', 'Gallery updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $this->checkPermission('gallery.destroy');
        $gallery->delete();
        return redirect()->route('gallery.index')
                        ->with('success', 'Gallery deleted successfully');
    }
}
