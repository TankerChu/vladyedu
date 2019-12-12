@extends('layouts/master')

@section('name')
{{-- cover của event --}}
<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url( {{ $event->getFirstMediaUrl('event_cover') }} )"></div>
</section>
@endsection

@section('content')
{{-- phần giới thiệu của event --}}
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Khóa học trực tiếp tại trung tâm
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3"> {{ $event->name}} </h2>
                {{-- giới thiệu cề sự kiện --}}
                @php
                echo $event->introduction
                @endphp
                <a href="#dang-ki-event" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Đăng kí
                    học ngay</a>
            </div>
        </div>
    </div>
</section>

{{-- Nội dung của event --}}
<section class="ftco-about d-md-flex">
    {{-- ảnh (và video của khóa học) của khóa học --}}
    <div class="one-half-img" style="padding: 0;">
        {{-- <a href="https://www.youtube.com/watch?v=LG0FHYgMtAE"
                class="icon popup-youtube d-flex justify-content-center align-items-center">
                <span class="icon-play"></span>
            </a> --}}
        <div class="fs-carousel"
            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": false, "contain": true }'>
            @foreach ($event->getMedia('event_image') as $eventGallery)
            <div class="carousel-cell" style="background-image: url('{{ $eventGallery->getFullUrl() }}' );">
            </div>
            @endforeach
        </div>
    </div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">Nội Dung Chi Tiết</h2>
        </div>
        <div>
            {{-- phần nội dung khóa học ở đây --}}
            @php
            echo $event->content
            @endphp
            {{-- hết phần nội dung khóa học --}}
        </div>
    </div>
</section>
@endsection

@section('form')
{{-- phần địa chỉ và đăng kí tham dự --}}
<section class="ftco-section contact-section" id="dang-ki-event">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mx-auto text-center h2 font-weight-bold">Đăng Kí Tham Dự</h2>
                <div class="container mt-5">
                    <div class="row block-9">
                        <div class="col-md-4 text-md-left contact-info ftco-animate"
                            style="font-size:20px; line-height:25px">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <h2 class="h5 font-weight-bold"></h2>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <p><span class="fa-li"><i class="fa fa-clock-o"></i></span> {{ $event->time }}
                                    </p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <p><span class="fa-li"><i class="fa fa-map-marker"></i></span>
                                        {{ $event->location_name }} - {{ $event->address }} </p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <p><span class="fa-li"><i class="fa fa-money"></i></span>
                                        Giá Vé: {{ number_format($event->price) }} VNĐ </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6 ftco-animate">
                            @if(session('message'))
                            <div class='alert alert-success'>
                                {{ session('message') }}
                            </div>
                            @endif
                            @if ( ! session()->has('message'))
                            <form action="{{ route('event', [$event->slug, $event->id]) }}" method="post"
                                class="contact-form">
                                @include('events/event-form')
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
