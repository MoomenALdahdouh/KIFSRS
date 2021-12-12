<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventsController extends Controller
{
    public function index()
    {
        return view("event");
    }

    public function fetch()
    {
        $events = Event::query()->select('title', 'start', 'end')->get();
        //$events = Event::all();
        return response()->json($events);
    }

    public function create(Request $request)
    {
        $event = new Event();
        $event->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
        $event->description = $request->description;
        $event->category_id = $request->category_id;
        $event->start = $request->event_start;
        $event->end = $request->event_end;
        $event->created_at = Carbon::now();
        $event->updated_at = Carbon::now();
        $event->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return $event->title;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
