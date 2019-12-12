@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.events.update", [$event->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.event.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                    id="name" value="{{ old('name', $event->name) }}" required>
                @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location_name">{{ trans('cruds.event.fields.location_name') }}</label>
                <input class="form-control {{ $errors->has('location_name') ? 'is-invalid' : '' }}" type="text"
                    name="location_name" id="location_name" value="{{ old('location_name', $event->location_name) }}"
                    required>
                @if($errors->has('location_name'))
                <div class="invalid-feedback">
                    {{ $errors->first('location_name') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.location_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.event.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address"
                    id="address" value="{{ old('address', $event->address) }}" required>
                @if($errors->has('address'))
                <div class="invalid-feedback">
                    {{ $errors->first('address') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city">{{ trans('cruds.event.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city"
                    id="city" value="{{ old('city', $event->city) }}" required>
                @if($errors->has('city'))
                <div class="invalid-feedback">
                    {{ $errors->first('city') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="time">{{ trans('cruds.event.fields.time') }}</label>
                <input class="form-control datetime {{ $errors->has('time') ? 'is-invalid' : '' }}" type="text"
                    name="time" id="time" value="{{ old('time', $event->time) }}" required>
                @if($errors->has('time'))
                <div class="invalid-feedback">
                    {{ $errors->first('time') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.event.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price"
                    id="price" value="{{ old('price', $event->price) }}" step="0.01" required>
                @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{ $errors->first('price') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="introduction">{{ trans('cruds.event.fields.introduction') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('introduction') ? 'is-invalid' : '' }}"
                    name="introduction" id="introduction">{!! old('introduction', $event->introduction) !!}</textarea>
                @if($errors->has('introduction'))
                <div class="invalid-feedback">
                    {{ $errors->first('introduction') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.introduction_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="content">{{ trans('cruds.event.fields.content') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content"
                    id="content">{!! old('content', $event->content) !!}</textarea>
                @if($errors->has('content'))
                <div class="invalid-feedback">
                    {{ $errors->first('content') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.content_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="slug">{{ trans('cruds.event.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug"
                    id="slug" value="{{ old('slug', $event->slug) }}" onkeyup="ChangeToSlug();"
                    onclick="ChangeToSlug();" required>
                @if($errors->has('slug'))
                <div class="invalid-feedback">
                    {{ $errors->first('slug') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="event_cover">{{ trans('cruds.event.fields.event_cover') }}</label>
                <div class="needsclick dropzone {{ $errors->has('event_cover') ? 'is-invalid' : '' }}"
                    id="event_cover-dropzone">
                </div>
                @if($errors->has('event_cover'))
                <div class="invalid-feedback">
                    {{ $errors->first('event_cover') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_cover_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link_video">{{ trans('cruds.event.fields.link_video') }}</label>
                <input class="form-control {{ $errors->has('link_video') ? 'is-invalid' : '' }}" type="text"
                    name="link_video" id="link_video" value="{{ old('link_video', $event->link_video) }}">
                @if($errors->has('link_video'))
                <div class="invalid-feedback">
                    {{ $errors->first('link_video') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.link_video_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_image">{{ trans('cruds.event.fields.event_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('event_image') ? 'is-invalid' : '' }}"
                    id="event_image-dropzone">
                </div>
                @if($errors->has('event_image'))
                <div class="invalid-feedback">
                    {{ $errors->first('event_image') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_image_helper') }}</span>
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
    Dropzone.options.eventCoverDropzone = {
    url: '{{ route('admin.events.storeMedia') }}',
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
      $('form').find('input[name="event_cover"]').remove()
      $('form').append('<input type="hidden" name="event_cover" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="event_cover"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($event) && $event->event_cover)
      var file = {!! json_encode($event->event_cover) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $event->event_cover->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="event_cover" value="' + file.file_name + '">')
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
    var uploadedEventImageMap = {}
Dropzone.options.eventImageDropzone = {
    url: '{{ route('admin.events.storeMedia') }}',
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
      $('form').append('<input type="hidden" name="event_image[]" value="' + response.name + '">')
      uploadedEventImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedEventImageMap[file.name]
      }
      $('form').find('input[name="event_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($event) && $event->event_image)
      var files =
        {!! json_encode($event->event_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="event_image[]" value="' + file.file_name + '">')
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
