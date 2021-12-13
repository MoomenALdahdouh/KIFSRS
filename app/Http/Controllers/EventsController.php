<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

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
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'title_ar' => 'required|unique:events,title|max:255',
                // 'description' => 'required',
            ], [
                'title_ar.required' => "title_ar required",
                // 'description.required' => __('strings.description_required'),
            ]);
            if ($validator->passes()) {
                $event = new Event();
                //$event->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
                //$event->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
                $event->title = $request->title_en;
                $event->description = $request->description_en;
                $event->start = $request->event_start;
                $event->end = $request->event_end;
                $event->location = $request->location;
                $event->category_fk_id = $request->category;
                $event->type = $request->event_type;
                $event->url = $request->event_external_link;
                $event->sponsors_image = $request->sponsors_image;
                $event->details_image = $request->details_image;
                $event->photo_gallery = $request->photo_image;
                $event->video_gallery = $request->video_image;
                $event->created_at = Carbon::now();
                $event->updated_at = Carbon::now();
                $event->save();
                $event_fk_id = $event->id;
                return response()->json(['success' => 'Successfully create new event', 'event_fk_id' => $event_fk_id, 'event' => $event]);
            }

            return response()->json(['error' => $validator->errors()->toArray()]);
            //return response()->json(['error' => 'Failed to create event']);
        }

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
