<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function showEvents(Request $request)
    {
        $events = Event::all();
        return view('events.events', compact('events'));
    }

    public function showEvent($slug, $id)
    {
        $event = Event::where('slug', $slug)->where('id', $id)->firstOrFail();
        return view('events.event', compact('event'));
    }

    public function showHanoi(Request $request)
    {
        $hanoi_events = Event::where('city', 1)->get();
        return view('events.hanoi', compact('hanoi_events'));
    }

    public function showHcm(Request $request)
    {
        $hcm_events = Event::where('city', 2)->get();
        return view('events.hcm', compact('hcm_events'));
    }
}
