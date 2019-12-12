@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.update", [$course->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.course.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title"
                    id="title" value="{{ old('title', $course->title) }}" required>
                @if($errors->has('title'))
                <div class="invalid-feedback">
                    {{ $errors->first('title') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_time">{{ trans('cruds.course.fields.date_time') }}</label>
                <input class="form-control datetime {{ $errors->has('date_time') ? 'is-invalid' : '' }}" type="text"
                    name="date_time" id="date_time" value="{{ old('date_time', $course->date_time) }}" required>
                @if($errors->has('date_time'))
                <div class="invalid-feedback">
                    {{ $errors->first('date_time') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.date_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.course.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address"
                    id="address" value="{{ old('address', $course->address) }}" required>
                @if($errors->has('address'))
                <div class="invalid-feedback">
                    {{ $errors->first('address') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="introduction">{{ trans('cruds.course.fields.introduction') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('introduction') ? 'is-invalid' : '' }}"
                    name="introduction" id="introduction">{!! old('introduction', $course->introduction) !!}</textarea>
                @if($errors->has('introduction'))
                <div class="invalid-feedback">
                    {{ $errors->first('introduction') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.introduction_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="info">{{ trans('cruds.course.fields.info') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('info') ? 'is-invalid' : '' }}" name="info"
                    id="info">{!! old('info', $course->info) !!}</textarea>
                @if($errors->has('info'))
                <div class="invalid-feedback">
                    {{ $errors->first('info') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="content">{{ trans('cruds.course.fields.content') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content"
                    id="content">{!! old('content', $course->content) !!}</textarea>
                @if($errors->has('content'))
                <div class="invalid-feedback">
                    {{ $errors->first('content') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.content_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="slug">{{ trans('cruds.course.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug"
                    id="slug" value="{{ old('slug', $course->slug) }}" onkeyup="ChangeToSlug();"
                    onclick="ChangeToSlug();" required>
                @if($errors->has('slug'))
                <div class="invalid-feedback">
                    {{ $errors->first('slug') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_featured') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_featured" value="0">
                    <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" value="1"
                        {{ $course->is_featured || old('is_featured', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label"
                        for="is_featured">{{ trans('cruds.course.fields.is_featured') }}</label>
                </div>
                @if($errors->has('is_featured'))
                <div class="invalid-feedback">
                    {{ $errors->first('is_featured') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.is_featured_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required"
                    for="course_thumbnail">{{ trans('cruds.course.fields.course_thumbnail') }}</label>
                <div class="needsclick dropzone {{ $errors->has('course_thumbnail') ? 'is-invalid' : '' }}"
                    id="course_thumbnail-dropzone">
                </div>
                @if($errors->has('course_thumbnail'))
                <div class="invalid-feedback">
                    {{ $errors->first('course_thumbnail') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_thumbnail_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_cover">{{ trans('cruds.course.fields.course_cover') }}</label>
                <div class="needsclick dropzone {{ $errors->has('course_cover') ? 'is-invalid' : '' }}"
                    id="course_cover-dropzone">
                </div>
                @if($errors->has('course_cover'))
                <div class="invalid-feedback">
                    {{ $errors->first('course_cover') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_cover_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="video_link">{{ trans('cruds.course.fields.video_link') }}</label>
                <input class="form-control {{ $errors->has('video_link') ? 'is-invalid' : '' }}" type="text"
                    name="video_link" id="video_link" value="{{ old('video_link', $course->video_link) }}">
                @if($errors->has('video_link'))
                <div class="invalid-feedback">
                    {{ $errors->first('video_link') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.video_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_image">{{ trans('cruds.course.fields.course_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('course_image') ? 'is-invalid' : '' }}"
                    id="course_image-dropzone">
                </div>
                @if($errors->has('course_image'))
                <div class="invalid-feedback">
                    {{ $errors->first('course_image') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_image_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    function ChangeToSlug(){
    var name, slug;

    //Lấy text từ thẻ input title
    title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, " - ");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>
<script>
    Dropzone.options.courseThumbnailDropzone = {
    url: '{{ route('admin.courses.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="course_thumbnail"]').remove()
      $('form').append('<input type="hidden" name="course_thumbnail" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="course_thumbnail"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($course) && $course->course_thumbnail)
      var file = {!! json_encode($course->course_thumbnail) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $course->course_thumbnail->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="course_thumbnail" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    Dropzone.options.courseCoverDropzone = {
    url: '{{ route('admin.courses.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="course_cover"]').remove()
      $('form').append('<input type="hidden" name="course_cover" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="course_cover"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($course) && $course->course_cover)
      var file = {!! json_encode($course->course_cover) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $course->course_cover->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="course_cover" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedCourseImageMap = {}
Dropzone.options.courseImageDropzone = {
    url: '{{ route('admin.courses.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="course_image[]" value="' + response.name + '">')
      uploadedCourseImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCourseImageMap[file.name]
      }
      $('form').find('input[name="course_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($course) && $course->course_image)
      var files =
        {!! json_encode($course->course_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="course_image[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
