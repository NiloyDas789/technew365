<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('certification.access');
        $certifications = Certification::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $this->putSL($certifications);
        return view('backend.certification.index', compact('certifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('certification.create');
        return view('backend.certification.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificationRequest $request)
    {
        $this->checkPermission('certification.store');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;

        // if ($request->hasFile('image')) {
        //     $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
        //     $image = $request->file('image')->storeAs('images/certification/image', $fileName, 'public');
        //     $validated['image'] = $image;
        // }
        Certification::create($validated);

        return redirect()->route('certification.index')
                        ->with('success', 'Certification created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        $this->checkPermission('certification.show');
        return view('backend.certification.show', compact('certification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        $this->checkPermission('certification.edit');
        return view('backend.certification.edit', compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificationRequest $request, Certification $certification)
    {
        $this->checkPermission('certification.update');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;
        // if ($request->hasFile('image')) {
        //     if (File::exists('storage/' . $certification->image)) {
        //         File::delete('storage/' . $certification->image);
        //     }
        //     $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
        //     $image = $request->file('image')->storeAs('images/certification/image', $fileName, 'public');
        //     $validated['image'] = $image;
        // }
        $certification->update($validated);

        return redirect()->route('certification.index')
                        ->with('success', 'Certification updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        $this->checkPermission('certification.destroy');
        $certification->delete();
        return redirect()->route('certification.index')
                        ->with('success', 'Certification deleted successfully');
    }
}
