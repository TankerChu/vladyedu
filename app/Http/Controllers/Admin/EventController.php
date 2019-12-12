<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::all();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->all());

        if ($request->input('event_cover', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_cover')))->toMediaCollection('event_cover');
        }

        foreach ($request->input('event_image', []) as $file) {
            $event->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('event_image');
        }

        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->all());

        if ($request->input('event_cover', false)) {
            if (!$event->event_cover || $request->input('event_cover') !== $event->event_cover->file_name) {
                $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_cover')))->toMediaCollection('event_cover');
            }
        } elseif ($event->event_cover) {
            $event->event_cover->delete();
        }

        if (count($event->event_image) > 0) {
            foreach ($event->event_image as $media) {
                if (!in_array($media->file_name, $request->input('event_image', []))) {
                    $media->delete();
                }
            }
        }

        $media = $event->event_image->pluck('file_name')->toArray();

        foreach ($request->input('event_image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $event->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('event_image');
            }
        }

        return redirect()->route('admin.events.index');
    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->load('eventsClients');

        return view('admin.events.show', compact('event'));
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
