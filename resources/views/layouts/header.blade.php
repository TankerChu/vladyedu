<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home-page') }}"><img
                src="{{asset('images/icon/vlady-logo-1024x726.png')}}" alt="logo" width="90px" height="70px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home-page') }}" class="nav-link">Trang Chủ</a></li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbardrop"
                        data-toggle="dropdown">Giới Thiệu</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('about-vlady') }}">Về Vlady</a>
                        <a class="dropdown-item" href="{{ route('about-nhunglady') }}">Về Nhung Lady</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbardrop"
                        data-toggle="dropdown">Khóa Học Trực Tiếp</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('classes') }}">Khóa Học</a>
                        @foreach (App\Course::where('is_featured', 1)->get() as $featured)
                        <a class="dropdown-item"
                            href="{{ route('course',[$featured->slug, $featured->id]) }}">{{$featured->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a href="" class="nav-link">Khóa Học Online</a></li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbardrop"
                        data-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="http://nuhoangphongthe.com/">Nữ Hoàng Phòng The</a>
                        <a class="dropdown-item" href="http://nuhoangphongthe.com/category/tam_ly_phong_the/">Tâm Lí
                            Phòng The</a>
                        <a class="dropdown-item" href="http://nuhoangphongthe.com/category/nhap-mon-tinh-duc-hoc/">Kỹ
                            Thuật Phòng The</a>
                        <a class="dropdown-item" href="http://nuhoangphongthe.com/category/cuc_khoai/">Cực Khoái</a>
                        <a class="dropdown-item" href="http://nuhoangphongthe.com/category/goc_tam_su/">Góc Tâm
                            Sự</a>
                        <a class="dropdown-item" href="http://nuhoangphongthe.com/category/tinh_duc_doc_la/">Công Cụ
                            Hỗ Trợ Phòng The</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbardrop"
                        data-toggle="dropdown">Sự Kiện</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('events') }}">Tất Cả Sự Kiện</a>
                        <a class="dropdown-item" href="{{ route('hanoievents') }}">Hà Nội</a>
                        <a class="dropdown-item" href="{{ route('hcmevents') }}">Hồ Chí Minh</a>
                        <a class="dropdown-item" href="https://www.facebook.com/groups/nghethuatphongthedinhcao/">Off
                            Group</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ route('contact-us') }}" class="nav-link">Liên Hệ</a></li>
                <li class="nav-item"><a class="nav-link"
                        href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ"><img
                            src="{{asset('images\icon\navbar\icons8_youtube_30px.png')}}" alt="icon youtube"></a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/hocvienyeuVlady/"><img
                            src="{{asset('images\icon\navbar\icons8_facebook_f_30px.png')}}" alt="icon facebook"></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/nhung.lady/"><img
                            src="{{asset('images\icon\navbar\icons8_instagram_30px.png')}}" alt="icon insta"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
