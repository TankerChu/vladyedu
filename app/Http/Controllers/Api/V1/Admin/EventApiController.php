<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Resources\Admin\EventResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventResource(Event::all());
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->all());

        if ($request->input('event_cover', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_cover')))->toMediaCollection('event_cover');
        }

        if ($request->input('event_image', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_image')))->toMediaCollection('event_image');
        }

        return (new EventResource($event))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventResource($event);
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

        if ($request->input('event_image', false)) {
            if (!$event->event_image || $request->input('event_image') !== $event->event_image->file_name) {
                $event->addMedia(storage_path('tmp/uploads/' . $request->input('event_image')))->toMediaCollection('event_image');
            }
        } elseif ($event->event_image) {
            $event->event_image->delete();
        }

        return (new EventResource($event))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
