<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            {{-- phần logo và liên hệ --}}
            <div class=" col-lg-4 col-md-6 mb-5 mb-md-5">
                <img src="{{ asset('images/icon/vlady-logo-1024x726.png')}}" alt="logo"
                    style="height: 120px; width:180px;margin-left: auto;margin-right:auto;">
                <p>Nâng Tầm Hạnh Phúc</p>
                <div class="ftco-footer-widget mb-4" style="padding-top:1%">
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="#"><span class="icon icon-map-marker"><img
                                            src="{{asset('images\icon\footer\icons8_map_marker_20px.png')}}"
                                            alt="icon map"></span><span class="text">429/44, Thụy Khuê, Tây Hồ, Hà
                                        Nội</span></a></li>
                            <li><a href="#"><span class="icon icon-phone"><img
                                            src="{{asset('images\icon\footer\icons8_phone_20px.png')}}"
                                            alt="icon phone"></span><span class="text">094 616 9779 / 024 33 98
                                        9999</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"><img
                                            src="{{asset('images\icon\footer\icons8_gmail_filled_20px.png')}}"
                                            alt="icon mail"></span><span class="text">hotro@vlady.vn</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- phần form và map --}}
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5" style="border-style:solid;border-width:0 1px 0 1px">
                <div class="ftco-footer-widget mb-4">
                    <h1 style="color: #EB1B23; font-weight:bold; font-size:30px;">Liên Hệ Với Chúng Tôi</h1>
                    <form action="{{ route('contact-us') }}" method="post" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="name" class="form-control" value="{{old ('name') }}"
                                    placeholder="Tên Đầy Đủ Của Bạn">
                                @if ($errors->has('name'))
                                <small class="invalid-feedback">{{ $errors -> first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group ml-md-4">
                                <label for="phone"></label>
                                <input type="text" name="phone" class="form-control" value="{{old ('phone') }}"
                                    placeholder="Số Điện Thoại">
                                @if ($errors->has('phone'))
                                <small class="invalid-feedback">{{ $errors -> first('phone') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="d-md-flex"></div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="text" name="email" class="form-control" value="{{old ('email') }}"
                                    placeholder="Email Của Bạn">
                                @if ($errors->has('email'))
                                <small class="invalid-feedback">{{ $errors -> first('email') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-2">Gửi Đi</button>
                        </div>
                        @csrf
                    </form>
                    {{-- <div class="block-21 mb-4 d-flex">
                        <div class="container-fluid" style="padding-left: 0; padding-right: 0">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14894.639934783221!2d105.8123466!3d21.0462867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x735e5efc027707cc!2zSOG7jWMgdmnhu4duIHnDqnUgVmxhZHk!5e0!3m2!1svi!2s!4v1569759338036!5m2!1svi!2s"
                                    title="GoogleMap" width="100%" height="100%" frameborder="0" style="border:0;"
                                    allowfullscreen="true">
                                </iframe>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- kênh thông tin --}}
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class=" ftco-footer-widget mb-4 ml-md-4">
                    <h1 style="color: #EB1B23; font-weight:bold;font-size:30px;">Theo Dõi Kênh</h1>
                    <div class="block-23 mb-3" style="font-size:12px">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a class="footer-icon"
                                    href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ"><span>
                                        <img src="{{asset('images\icon\navbar\icons8_youtube_30px.png')}}"
                                            alt="icon youtube"></a></span><a class="popup-with-zoom-anim"
                                    href="#small-dialog-youtube"><strong style="color:white;">NhungLady - Phù
                                        Thủy phòng the</strong></a>1.1 M subcribers</li>
                            <div id="small-dialog-youtube" class="zoom-anim-dialog mfp-hide">
                                <img src="{{asset('images\footer\youtubecoverfullsz 2.jpg')}}" alt="youtube channel">
                                <div class="subscribe-youtube">
                                    <h5 style="font-weight:bold">Nhunglady - Phù Thủy Phòng
                                        The</h5>
                                    <p></p>
                                    <script src="https://apis.google.com/js/platform.js"></script>
                                    <div class="g-ytsubscribe" data-channelid="UCdU44faIOEuxQhiN-qcn4KQ"
                                        data-layout="default" data-count="default"></div>
                                </div>
                            </div>
                            <li class="ftco-animate"><a class="footer-icon"
                                    href="https://www.facebook.com/hocvienyeuVlady/"><span>
                                        <img src="{{asset('images\icon\navbar\icons8_facebook_f_30px.png')}}"
                                            alt="icon facebook"></a></span><a class="popup-with-zoom-anim"
                                    href="#small-dialog-facebook"><strong style="color:white">NhungLady - Phù
                                        Thủy phòng the</strong></a>99999K người theo dõi</li>
                            <div id="small-dialog-facebook" class="zoom-anim-dialog mfp-hide">
                                <img src="{{asset('images\footer\pageimagefooter.jpg')}}" alt="page image">
                                <iframe
                                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FhocvienyeuVlady%2F&tabs&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2999581993390837"
                                    width="300" height="200" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                            <li class="ftco-animate"><a class="footer-icon"
                                    href="https://www.instagram.com/nhung.lady/"><span>
                                        <img src="{{asset('images\icon\navbar\icons8_instagram_30px.png')}}"
                                            alt="icon insta"></a></span><a class=".popup-with-zoom-anim"
                                    href="#small-dialog"><strong style="color:white">NhungLady - Phù
                                        Thủy phòng the</strong></a>2222 Followers - 119 posts</li>
                            <li class="ftco-animate"><a class="footer-icon"
                                    href="https://www.instagram.com/nhung.lady/"><span>
                                        <img src="{{asset('images\icon\navbar\icons8_twitter_30px.png')}}"
                                            alt="icon insta"></a></span><a class=".popup-with-zoom-anim"
                                    href="#small-dialog"><strong style="color:white">NhungLady - Phù
                                        Thủy phòng the</strong></a>2222 Followers - 119 posts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
