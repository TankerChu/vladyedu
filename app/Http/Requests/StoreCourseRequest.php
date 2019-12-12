<?php

namespace App\Http\Requests;

use App\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'            => [
                'required',
            ],
            'date_time'        => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'address'          => [
                'required',
            ],
            'introduction'     => [
                'required',
            ],
            'info'             => [
                'required',
            ],
            'content'          => [
                'required',
            ],
            'slug'             => [
                'required',
            ],
            'course_thumbnail' => [
                'required',
            ],
            'course_cover'     => [
                'required',
            ],
            'course_image.*'   => [
                'required',
            ],
        ];
    }
}
