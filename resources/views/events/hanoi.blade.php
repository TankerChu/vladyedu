@extends('layouts/master')

@section('banner')
<!-- {{-- banner --}} -->
<section class="hero-wrap js-fullheight">
    <div class="overlay"
        style="background-image: url('{{ asset('images/banner-1.jpg') }} '); background-repeat: no-repeat;"
        data-stellar-background-ratio="1"></div>
</section>
<!-- {{-- hết banner --}} -->
@endsection


@section('content')
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Sự Kiện
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Sự Kiện Tại Hà Nội</h2>
            </div>
        </div>
        <div class="container event">
            @foreach ($hanoi_events as $hanoi_events)
            <div class="row event-row justify-content-center"">
                    <a class=" col-sm-3 event-left"
                style="background-image:url({{ $hanoi_events->getFirstMediaUrl('event_cover') }})" href="
                    {{ route('event', [$hanoi_events->slug, $hanoi_events->id]) }} ">
                </a>
                <div class="col-sm-7 event-center">
                    <a href="{{ route('event', [$hanoi_events->slug, $hanoi_events->id]) }}">
                        <h3 class="mb-3 event-heading"> {{ $hanoi_events->name}} </h3>
                    </a>
                    <ul class="fa-ul" style="padding-left:20px">
                        <li><span class="fa-li"><i class="fa fa-clock-o"></i></span>
                            {{ $hanoi_events->time }}
                        </li>
                        <li><span class="fa-li"><i class="fa fa-map-marker"></i></span>
                            {{ $hanoi_events->location_name }}
                        </li>
                        <li><span class="fa-li"><i class="fa fa-location-arrow"></i></span>
                            {{ $hanoi_events->address }}
                        </li>
                        <li><span class="fa-li"><i class="fa fa-money"></i></span>
                            {{ number_format($hanoi_events->price) }} VNĐ
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 event-right">
                    <small> {{ Carbon\Carbon::parse($hanoi_events->time)->format('H:i') }} </small>
                    <strong> {{ Carbon\Carbon::parse($hanoi_events->time)->format('j') }} </strong>
                    <span> {{ Carbon\Carbon::parse($hanoi_events->time)->format('F') }} </span>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection