<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(6);

        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $latestEvents = Event::latest()
            ->where('id', '!=', $event->id)
            ->take(5)
            ->get();

        return view('events.show', compact(
            'event',
            'latestEvents'
        ));
    }
}
