@extends('layouts/master')

@section('banner')
<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url('{{ asset('images/banner.jpg') }} ');"
        data-stellar-background-ratio="1"></div>
</section>
@endsection

@section('content')
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mx-auto text-center h2 font-weight-bold">Liên Hệ Với Chúng Tôi</h2>
                <div class="container mt-5">
                    <div class="row block-9">
                        <div class="col-md-4 text-md-right contact-info ftco-animate">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <h2 class="h5 font-weight-bold">Liên Hệ</h2>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <p><span>Địa Chỉ:</span> 44/429, Thụy Khuê, Tây Hồ, Hà Nội.</p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <p><span>Số Điện Thoại:</span> <a href="tel:0946169779">094 616 9779</a> <br> <a
                                            href="tel:02433989999">024 33 98 9999</a></p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <p><span>Email:</span> <a href="mailto:hotro@vlady.vn">hotro@vlady.vn</a></p>
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
                            <form action="{{ route('contact-us') }}" method="post" class="contact-form">
                                @include('contact/contact-form')
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