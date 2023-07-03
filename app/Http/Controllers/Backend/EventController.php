<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('event.access');
        $events = Event::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $this->putSL($events);
        return view('backend.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('event.create');
        return view('backend.event.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $this->checkPermission('event.create');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;

        // if ($request->hasFile('image')) {
        //     $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
        //     $image = $request->file('image')->storeAs('images/event/image', $fileName, 'public');
        //     $validated['image'] = $image;
        // }
        Event::create($validated);

        return redirect()->route('event.index')
                        ->with('success', 'Event created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $this->checkPermission('event.show');
        return view('backend.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $this->checkPermission('event.edit');
        return view('backend.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $this->checkPermission('event.edit');
        $validated = $request->all();
        $validated['status'] = !($request->has('status')) ? 0 : 1;
        // if ($request->hasFile('image')) {
        //     if (File::exists('storage/' . $event->image)) {
        //         File::delete('storage/' . $event->image);
        //     }
        //     $fileName = Rand() . '.' . $request->file('image')->getClientOriginalExtension();
        //     $image = $request->file('image')->storeAs('images/event/image', $fileName, 'public');
        //     $validated['image'] = $image;
        // }
        $event->update($validated);

        return redirect()->route('event.index')
                        ->with('success', 'Event updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $this->checkPermission('event.delete');
        $event->delete();
        return redirect()->route('event.index')
                        ->with('success', 'Event deleted successfully');
    }
}
