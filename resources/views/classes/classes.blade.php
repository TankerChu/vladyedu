@extends('layouts/master')

@section('banner')
<section class="hero-wrap js-fullheight">
	<div class="overlay" style="background-image: url('{{ asset('images/banner-1.jpg') }} ');"
		data-stellar-background-ratio="1"></div>
</section>
@endsection

@section('content')
<section class="ftco-section" style="font-family: Roboto;">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<span class="subheading">
					<i class="db-left"></i>
					Khóa Học Trực Tiếp
					<i class="db-right"></i>
				</span>
				<h2 class="mb-3">Các khóa học Trực Tiếp Sắp Khai Giảng</h2>
				<p></p>
			</div>
		</div>
		<div class="row justify-content-center">
			@forelse ($courses as $courses)
			<div class="col-md-4">
				<div class="pricing-wrap ftco-animate img"
					style="background-image: url( {{ $courses->getFirstMediaUrl('courses_cover') }} );">
					<div class="title p-4">
						<h3> {{ $courses->name }} </h3>
						<span> {{ $courses->date_time }} </span>
					</div>
					<div class="text p-4 d-flex align-items-end">
						<a href="{{ route('course', [$courses->slug, $courses->id]) }}"
							class="btn-custom px-4 py-2">Tham
							Gia
							Ngay</a>
						<div>
							<span class="price"> Liên Hệ </span>
							<h3><a href="#"> {{ $courses->address }} </a></h3>
							@php
							echo $courses->introduction
							@endphp
						</div>
					</div>
				</div>
			</div>
			@empty
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-10 heading-section text-center ftco-animate">
						<h2 class="mb-3" style="color:coral">Xin lỗi!!! Hiện tại chưa có khóa học nào. Xin hãy quay lại
							sau!!!
						</h2>
					</div>
				</div>
				@endforelse
			</div>
		</div>
</section>
<!-- hết phần khóa học trực tiếp -->
@endsection