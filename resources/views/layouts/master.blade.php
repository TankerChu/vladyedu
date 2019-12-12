<!DOCTYPE html>

<body lang=en>

    <head>
        <title>Vlady - Nâng Tầm Hạnh Phúc</title>
        <meta name="Description"
            content="Đơn vị đi đầu trong lĩnh vực tư vấn, giảng dạy về lĩnh vực Tâm lý - Kỹ thuật tình dục học tại Việt Nam.">
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <link rel="onload" as="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/flickity.min.css')}}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        @yield('css')
    </head>

    <body>
        <script defer>
            window.fbAsyncInit=function(){FB.init({xfbml:!0,version:"v5.0"})},function(e,t,n){var c,o=e.getElementsByTagName(t)[0];e.getElementById(n)||(c=e.createElement(t),c.id=n,c.src="https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js",o.parentNode.insertBefore(c,o))}(document,"script","facebook-jssdk")
        </script>
        <script async defer crossorigin=anonymous
            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=2999581993390837&autoLogAppEvents=1">
        </script>
        <div id=fb-root></div>
        <div class=fb-customerchat attribution=install_email page_id=390741108180087 theme_color=#fa3c4c>
        </div>
        @include('layouts/header') @yield('banner') @yield('content') @yield('form') @include('layouts/footer')
        <a class="lgscreenphone phonelink" href="{{route('contact-us')}}"><img class=phoneicon
                src="{{asset('images/icon/pngkey.com-phone-icon-png-137208.png')}}" alt="phone icon"></a>
        <a class="mbscreenphone phonelink" href=tel:0946169779><img class=phoneicon
                src="{{asset('images/icon/pngkey.com-phone-icon-png-137208.png')}}" alt="phone icon"></a>
        <div id=ftco-loader class="show fullscreen"><svg class=circular width=48px height=48px>
                <circle class=path-bg cx=24 cy=24 r=22 fill=none stroke-width=4 stroke=#eeeeee />
                <circle class=path cx=24 cy=24 r=22 fill=none stroke-width=4 stroke-miterlimit=10 stroke=#F96D00 />
            </svg></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{ asset('js/popper.min.js')}}" defer></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js')}}" defer></script>
        <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('js/aos.js')}}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{ asset('js/scrollax.min.js')}}"></script>
        <script src="{{ asset('js/flickity.pkgd.min.js')}}"></script>
        <script src="https://unpkg.com/flickity-bg-lazyload@1.0.1/bg-lazyload.js"></script>
        <script src="{{ asset('js/main-front.js')}}"></script>
        @yield('js')
    </body>

    </html>
