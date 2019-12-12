<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::all();

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.courses.create');
    }

    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->all());

        if ($request->input('course_thumbnail', false)) {
            $course->addMedia(storage_path('tmp/uploads/' . $request->input('course_thumbnail')))->toMediaCollection('course_thumbnail');
        }

        if ($request->input('course_cover', false)) {
            $course->addMedia(storage_path('tmp/uploads/' . $request->input('course_cover')))->toMediaCollection('course_cover');
        }

        foreach ($request->input('course_image', []) as $file) {
            $course->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('course_image');
        }

        return redirect()->route('admin.courses.index');
    }

    public function edit(Course $course)
    {
        abort_if(Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.courses.edit', compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());

        if ($request->input('course_thumbnail', false)) {
            if (!$course->course_thumbnail || $request->input('course_thumbnail') !== $course->course_thumbnail->file_name) {
                $course->addMedia(storage_path('tmp/uploads/' . $request->input('course_thumbnail')))->toMediaCollection('course_thumbnail');
            }
        } elseif ($course->course_thumbnail) {
            $course->course_thumbnail->delete();
        }

        if ($request->input('course_cover', false)) {
            if (!$course->course_cover || $request->input('course_cover') !== $course->course_cover->file_name) {
                $course->addMedia(storage_path('tmp/uploads/' . $request->input('course_cover')))->toMediaCollection('course_cover');
            }
        } elseif ($course->course_cover) {
            $course->course_cover->delete();
        }

        if (count($course->course_image) > 0) {
            foreach ($course->course_image as $media) {
                if (!in_array($media->file_name, $request->input('course_image', []))) {
                    $media->delete();
                }
            }
        }

        $media = $course->course_image->pluck('file_name')->toArray();

        foreach ($request->input('course_image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $course->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('course_image');
            }
        }

        return redirect()->route('admin.courses.index');
    }

    public function show(Course $course)
    {
        abort_if(Gate::denies('course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->load('courseClients');

        return view('admin.courses.show', compact('course'));
    }

    public function destroy(Course $course)
    {
        abort_if(Gate::denies('course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->delete();

        return back();
    }

    public function massDestroy(MassDestroyCourseRequest $request)
    {
        Course::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
