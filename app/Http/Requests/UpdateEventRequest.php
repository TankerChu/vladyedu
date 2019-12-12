<?php

namespace App\Http\Requests;

use App\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateEventRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'          => [
                'required',
            ],
            'location_name' => [
                'required',
            ],
            'address'       => [
                'required',
            ],
            'city'          => [
                'required',
            ],
            'time'          => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'price'         => [
                'required',
            ],
            'introduction'  => [
                'required',
            ],
            'content'       => [
                'required',
            ],
            'slug'          => [
                'required',
            ],
        ];
    }
}
