@extends('layouts.master')
@section('banner')
<section class="hero-wrap js-fullheight">
    <div class="overlay">
        <div class="fs-carousel"
            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": false, "contain": true, "bgLazyLoad": true }'>
            <div class="carousel-cell">
                <div class="video-texture" style="background-image:url({{asset('images/texture.png')}}); ">
                </div>
                <video autoplay loop>
                    <source src="images/trang-chu/Sexy-Dancer-Slowly-Touching-2.webmsd.webm" type="video/webm">
                    <source src="images/trang-chu/Sexy-Dancer-Slowly-Touching-2.mp4.mp4" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video
                </video>
                <div class="chat_vol2_center carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" align="center">
                                <h2 class="title">VLADY</h2>
                                <h3>Nâng Tầm Hạnh Phúc</h3>
                                <a class="view" href="#why">Bắt Đầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/trang-chu/về nhunglady.jpg">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Về Vlady</h2>
                                <p>.....</p>
                                <a class="view" href="{{route('about-vlady')}}">Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/1546591445513.jpg">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Các khóa học kỹ năng độc quyền</h2>
                                <p>.....</p>
                                <a class="view" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/phu-nu-a-dung-xem-dan-ong-la-tat-ca.jpg">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Khóa Coaching 1:1</h2>
                                <p>Cùng với chuyên gia về tâm lý - kỹ thuật tình dục học</p>
                                <a class="view" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/phu-nu-a-dung-xem-dan-ong-la-tat-ca.jpg">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Coaching Trị Liêu Khoái Cảm</h2>
                                <p>Trị liệu cực khoái</p>
                                <a class="view" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- phần thông tin về công ti -->
<section class="ftco-section" id="why">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Giới Thiệu
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Tại sao cần học kỹ năng phòng the ngay hôm nay?</h2>
                <p>Không thể phủ nhận “chuyên phòng the" ngày càng chiếm vị trí quan trọng trong đời sống hôn nhân, là
                    tác nhân không thể
                    thiếu giúp giữ lửa hôn nhân hạnh phúc viên mãn.
                    Người phụ nữ hiện đại dần gạt bỏ “quan niệm cũ" khắt khe về tình dục; tìm đến các lớp học kỹ năng
                    phòng the, là để bản
                    thân tự tin hơn, quyến rũ hơn, để "hút hồn" người bạn đời khiến anh ấy chỉ muốn "dính" lấy bạn như
                    keo, không bị lay
                    động trước bất kỳ “bóng hồng” nào khác.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Về Chúng Tôi</h4>
                    <p>
                        Học viện yêu Vlady trực thuộc Trung tâm UNESCO hạnh phúc phụ nữ Việt là đơn vị đầu tiên và duy
                        nhất thuộc Liên hiệp các
                        hội UNESCO Việt Nam hoạt động trong lĩnh vực phụ nữ và tình dục học tại Việt Nam. Với hơn
                        100.000 học viên trong và
                        ngoài nước trong suốt 6 năm hoạt động, chúng tôi tự hào là đơn vị tiên phong trong tư vấn, giảng
                        dạy về lĩnh vực Tâm lý
                        - Kỹ thuật tình dục học tại Việt Nam, nâng tầm hạnh phúc Phụ nữ Việt.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4>Video Về Chúng Tôi</h4>
                    <div class='embed-container'><iframe title="YoutubeVid" width="100%" height="315"
                            src="https://www.youtube.com/embed/LG0FHYgMtAE" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- phần thông số -->
<section class="ftco-counter ftco-bg-dark img" id="section-counter"
    style="background-image: url('images/trang-chu/background-thong-so.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Lựa chọn chúng tôi
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Tại Sao bạn lựa chọn chúng tôi?</h2>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="padding-left: 30px">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images\icon\info\icons8_trophy_filled_100px.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <span style="font-size: 30px; line-height: 1.7em"><strong>Kỹ Thuật Đỉnh Cao</strong></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 30px">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images\icon\info\icons8_classroom_100px.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <span style="font-size: 30px; line-height: 1.7em"><strong>Giảng Viên Tận Tâm</strong></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 30px">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images\icon\info\icons8_light_on_100px.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <span style="font-size: 30px; line-height: 1.7em"><strong>Học Linh Hoạt</strong></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 30px">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images\icon\info\icons8_lightning_bolt_100px.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <span style="font-size: 30px; line-height: 1.7em"><strong>Hiệu Quả Ngay</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top:60px">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images\icon\info\icons8_courses_50px.png">
                            <div class="text">
                                <strong class="number" data-number="30" style="font-size: 70px;">0</strong><strong
                                    class="number">+</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Khóa Học</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images\icon\info\icons8_student_50px.png">
                            <div class="text">
                                <strong class="number" data-number="30000" style="font-size: 70px;">0</strong><strong
                                    class="number">+</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Học Viên Toàn
                                        Quốc</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images\icon\info\icons8_date_50px.png">
                            <div class="text">
                                <strong class="number" data-number="5000" style="font-size: 70px;">0</strong><strong
                                    class="number">+</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Tổ Ấm Được Hàn
                                        Gắn</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images\icon\info\icons8_classroom_filled_50px.png">
                            <div class="text">
                                <strong class="number" data-number="75" style="font-size: 70px;">0</strong><strong
                                    class="number">%</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Học viên quay lại để học
                                        chuyên sâu</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hết phần thông số -->
<!-- phần khóa học trực tiếp -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Khóa Học Trực Tiếp
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Các khóa học Trực Tiếp tiêu biểu</h2>
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($featured as $featured)
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{$featured->getFirstMediaUrl('course_thumbnail')}})">
                    <div class="title p-4">
                        <h3> {{$featured->title}} </h3>
                        <span>{{$featured->date_time}}</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="{{ route('course', [$featured->slug, $featured->id]) }}"
                            class="btn-custom px-4 py-2">Tham Gia
                            Ngay</a>
                        <div>
                            <span class="price">Liên Hệ</span>
                            <h3>{{$featured->address}}</h3>
                            @php
                            echo $featured->introduction
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
                            sau
                        </h2>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
</section>
<!-- hết phần khóa học trực tiếp -->
<!-- phần khóa học online -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Khóa Học Online
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Các khóa học Online tiêu biểu</h2>
                <p><a href="https://vlady.edu.vn/p/danh-sach-khoa-hoc/" class="btn btn-warning btn-lg active"
                        role="button" aria-pressed="true">Học Ngay</a></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/khoa-hoc-online/trinh-nu-hoan-tan.jpg');">
                    <div class="title p-4">
                        <h3>Trinh nữ hoàn tân</h3>
                        <span>Hướng dẫn tập kegel từ A-Z</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/kegel-tazama#payment" class="btn-custom px-4 py-2">Học
                            Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/kegel-tazama">Nữ Thần Se Khít</a></h3>
                            <p>Bài tập giúp se khít, đàn hồi vùng cơ âm đạo. Điều khiển vùng “tam giác mật" chuyển động
                                theo ý muốn trong cuộc yêu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/khoa-hoc-online/bac-thay-thoi-ken.jpg');">
                    <div class="title p-4">
                        <h3>BJ Master 4.0</h3>
                        <span></span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/bj-sieu-biet-tu-ban-nang-goc#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/bj-sieu-biet-tu-ban-nang-goc">BJ Siêu Biệt Từ Bản
                                    Năng Gốc</a></h3>
                            <p>100% đàn ông đều thích được bạn tình sử dụng kỹ thuật này và tất nhiên nếu bạn là một
                                người nghệ sĩ thổi kèn giỏi, bạn
                                sẽ nhanh chóng chiếm lĩnh không chỉ con tim mà cả lý trí anh ấy!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-auto">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/khoa-hoc-online/tu-the-phong-the.jpg');">
                    <div class="title p-4">
                        <h3>TƯ THẾ PHÒNG THE</h3>
                        <span></span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/tu-the-phong-the#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/tu-the-phong-the">TƯ THẾ PHÒNG THE</a></h3>
                            <p>Hơn 50 tư thế đỉnh cao của bộ môn nghệ thuật phòng the cho các cặp đôi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/khoa-hoc-online/massage-kich-huyet.jpg');">
                    <div class="title p-4">
                        <h3>MASSAGE KÍCH HOẠT HUYỆT YÊU CHO CHÀNG</h3>
                        <span>Tất tần tật các kỹ thuật massage điêu luyện</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/massage-kich-hoat-huyet-yeu-cho-chang#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/massage-kich-hoat-huyet-yeu-cho-chang">MASSAGE
                                    KÍCH HOẠT HUYỆT YÊU CHO CHÀNG</a></h3>
                            <p>Các kỹ thuật massage điêu luyện, từ a-z các bí kíp "kích hoạt huyệt yêu" của bộ môn
                                massage</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/khoa-hoc-online/doc-vi-dan-ong.jpg');">
                    <div class="title p-4">
                        <h3>Nghệ thuật giữ lửa hạnh phúc</h3>
                        <span>Làm thế nào để phát hiện chàng nói dối ? Khi nào thì đàn ông sẽ ngoại tình ?</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/doc-vi-dan-ong#payment" class="btn-custom px-4 py-2">Học
                            Ngay</a>
                        <div>
                            <span class="price">1,790,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/doc-vi-dan-ong">ĐỌC VỊ ĐÀN ÔNG</a></h3>
                            <p>Dành cho những học viên nhập môn tâm lý - kỹ năng tình dục học</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/khoa-hoc-online/my-nu-van-nguoi-me.jpg');">
                    <div class="title p-4">
                        <h3>NGŨ QUAN PHÒNG THE</h3>
                        <span>Tất tần tật các kỹ thuật massage điêu luyện</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/ngu-quan-phong-the#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/ngu-quan-phong-the">NGŨ QUAN PHÒNG THE</a></h3>
                            <p>Mùi cơ thể của một người giữ một vai trò không nhỏ trong việc lôi cuốn người khác. Một
                                cuộc nghiên cứu cho thấy rằng 71% đàn ông và phụ nữ xem mùi là một thứ kích thích mạnh
                                mẽ.Một khi đã biết chú ý đến các giác quan, bạn đừng nên gói mình trong những thói quen
                                nữa. Các cảm giác của chúng ta có thể thay đổi theo từng ngày. Và đó chính là khía cạnh
                                quan trọng nhất của tình dục.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hết phần khóa học online -->
<!--đội ngũ-->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Đội Ngũ
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Đội Ngũ Của Chúng Tôi</h2>
                <p></p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img" style="background-image: url('images/trang-chu/nhunglady-profile.jpg');">
                    </div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Giám Đốc</span>
                        <h3><a href="#">Ms.NhungLady</a></h3>
                        <p>Giám đốc TT Unesco HPPNV, chuyên gia tâm lý - kỹ thuật tình dục học, phù thủy phòng the</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a
                                    href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ/featured"
                                    class="mr-2 d-flex justify-content-center align-items-center"><img
                                        src="images\icon\navbar\icons8_youtube_30px.png" alt="icon youtube"></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/nhunglady.phunuviet"
                                    class="mr-2 d-flex justify-content-center align-items-center"><img
                                        src="images\icon\navbar\icons8_facebook_f_30px.png" alt="icon facebook"></a>
                            </li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/nhung.lady/"
                                    class="mr-2 d-flex justify-content-center align-items-center"><img
                                        src="images\icon\navbar\icons8_instagram_30px.png" alt="icon insta"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img" style="background-image: url('images/ ');"></div>
                    <div class="text py-4 px-5 ftco-animate"></div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Chuyên Gia</span>
                        <h3><a href="#">Ms.Hương Giang</a></h3>
                        <p>Chuyên gia tâm lý tại tt Unesco Hạnh phúc Phụ nữ Việt</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><img
                                        src="images\icon\navbar\icons8_youtube_30px.png" alt="icon youtube"></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><img
                                        src="images\icon\navbar\icons8_facebook_f_30px.png" alt="icon facebook"></a>
                            </li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><img
                                        src="images\icon\navbar\icons8_instagram_30px.png" alt="icon insta"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hết phần đội ngũ-->
<!--khách hàng nói-->
<section class="ftco-section testimony-section"
    style="background-image: url('images/trang-chu/background-phan-hoi-khach-hang.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Phản Hồi
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Khách hàng nói gì về chúng tôi?</h2>
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="fs-carousel-review"
                            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": false, "contain": true, "bgLazyLoad": true }'>
                            <div class="carousel-cell-review">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <img src="images\icon\icons8_quote_left_20px.png" alt="quote icon">
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">“Với 9 năm hôn nhân mà mình chưa bao giờ biết cảm giác thăng hoa
                                            là gì. Mình có tâm sự với bạn về việc này khi trong đầu có ý muốn li hôn.
                                            May sao có cuộc tâm sự ấy mà mình biết đến Group Nghệ thuật phòng the đỉnh
                                            cao - Nhunglady, mình thử tự thay đổi bản thân, liều đăng kí một khóa học cơ
                                            bản. Vậy mà kết quả thật bất ngờ, hiện tại vợ chồng mình hạnh phúc hơn cả
                                            hồi mới yêu.</p>
                                        <p class="name">Trần Thị Thanh Hương</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell-review">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <img src="images\icon\icons8_quote_left_20px.png" alt="quote icon">
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">Hôm nay thực hành BJ 15 phút, vua khỉ, cưỡi ngựa 3 phút = cùng
                                            nhau lên đỉnh. Cô giáo dạy dễ hiểu và học nhanh lắm. Cảm ơn em. Lúc chị khó
                                            khăn nhất đã chia sẻ mọi thứ với chị. Giúp chị nhận ra giá trị của bản thân.
                                            Thật sự rất đáng quý</p>
                                        <p class="name">Chị H (Hà Nội)</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell-review">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <img src="images\icon\icons8_quote_left_20px.png" alt="quote icon">
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">Chị T “Cảm ơn Nhung. Cái vụ mùi thơm điểm B áp dụng rồi. Tuyệt
                                            vời! Mình mà ngại, chả bao giờ dám đăng kí học. Vào học rồi mới thấy quá
                                            sáng suốt. Mình quá tiếc là trước đây khi còn là vợ chồng son chưa có con
                                            sao không biết mà học”.</p>
                                        <p class="name">Chị H.T (Hải Phòng)</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell-review">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <img src="images\icon\icons8_quote_left_20px.png" alt="quote icon">
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">Từ ngày vào Group nghệ thuật của chị em học hỏi được biết bao
                                            nhiêu kinh nghiệm. Được chồng khen và được chiều nhiều lắm.
                                            Thank chị nhiều vì cuộc sống của em thăng hoa và hạnh phúc hơn lắm</p>
                                        <p class="name">Nguyễn Kim Ngân (Hà Nội)</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hết phần khách hàng-->
<!--Đối tác-->
<section class="ftco-section">
    <!--Carousel Wrapper-->
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Đối tác
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Các Đối tác của chúng tôi</h2>
                <p></p>
            </div>
        </div>
        <div class="fs-carousel-counterpart"
            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": false, "freeScroll": true,"autoPlay": true, "prevNextButtons": false, "pageDots": false}'>
            <div class="carousel-cell-counterpart"><img src="images/logo-doi-tac/unesco.jpg" alt="unesco"></div>
            <div class="carousel-cell-counterpart"><img src="images/logo-doi-tac/unicef.jpg" alt="unicef"></div>
            <div class="carousel-cell-counterpart"><img src="images/logo-doi-tac/nielsen.jpg" alt="nielsen"></div>
            <div class="carousel-cell-counterpart"><img src="images/logo-doi-tac/scic.jpg" alt="scic"></div>
        </div>
    </div>
</section>
<!--hết phần đối tác-->

<!--Phần tin tức-->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Group
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">NGHỆ THUẬT PHÒNG THE ĐỈNH CAO - NHUNG LADY</h2>
                <p><a href="https://www.facebook.com/groups/nghethuatphongthedinhcao/"
                        class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Tham Gia Ngay</a></p>
                <p>Group CHẤT LƯỢNG HÀNG ĐẦU về giảng dạy và chia sẻ kỹ thuật tình dục cho các chị em phụ nữ đầu tiên
                    tại VN!!!</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="http://nuhoangphongthe.com/nu_hoang_phong_the/ban-ron-tren-giuong-giup-phu-nu-tre-lau/"
                        class="block-20"
                        style="background-image: url('images/trang-chu/ban-ron-tren-giuong-giup-phu-nu-tre-lau.jpg');">
                    </a>
                    <div class="text py-4 d-flex">
                        <div class="desc">
                            <h3 class="heading mt-2"><a
                                    href="http://nuhoangphongthe.com/nu_hoang_phong_the/ban-ron-tren-giuong-giup-phu-nu-tre-lau/">“BẬN
                                    RỘN’ TRÊN GIƯỜNG GIÚP PHỤ NỮ TRẺ LÂU</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="http://nuhoangphongthe.com/nhap-mon-tinh-duc-hoc/diem-nhay-cam-kich-thich-chang-khi-yeu/"
                        class="block-20"
                        style="background-image: url('images/trang-chu/diem-nhay-cam-kich-thich-chang-khi-yeu-1000x570.jpg');">
                    </a>
                    <div class="text py-4 d-flex">
                        <div class="desc">
                            <h3 class="heading mt-2"><a
                                    href="http://nuhoangphongthe.com/nhap-mon-tinh-duc-hoc/diem-nhay-cam-kich-thich-chang-khi-yeu/">ĐIỂM
                                    NHẠY CẢM KÍCH THÍCH CHÀNG KHI “YÊU”</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="http://nuhoangphongthe.com/nu_hoang_phong_the/7-buoc-de-dua-chang-len-dinh-bang-mieng/"
                        class="block-20"
                        style="background-image: url('images/trang-chu/7-buoc-de-dua-chang-len-dinh-bang-mieng-1000x570.jpg');">
                    </a>
                    <div class="text py-4 d-flex">
                        <div class="desc">
                            <h3 class="heading mt-2"><a
                                    href="http://nuhoangphongthe.com/nu_hoang_phong_the/7-buoc-de-dua-chang-len-dinh-bang-mieng/">7
                                    BƯỚC ĐỂ ĐƯA CHÀNG LÊN ĐỈNH BẰNG MIỆNG</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
