<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>شركة المضف للاستقدام</title>
    <link rel="shortcut icon" href="{{ asset($settings->favicon ?? 'layouts/frontend/assets/images/favicon_2.png') }}">
    <!-- Links of CSS files -->
    @include('frontend.layouts.style')
    <style>
        .free-quote-form .form-group .form-control {
            text-align: right;
        }
    </style>

</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Marquee Area-->
    <div class="marquee">
        <span>
            <i class="ri-award-line"></i>
            {{ $notification->notification_bar }}
            {{-- شركة المضف للاستقدام شركة متخصصة في الاستقدام والإيجار ونقل الخدمات، معتمدة من وزارة الموارد البشريه والتنميه الاجتماعيه --}}
        </span>
      </div>
    <!-- End Marquee Area -->


    <!-- Start Navbar Area -->
    @include('frontend.layouts.navbar')
    <!-- End Navbar Area -->

    {{-- Content --}}
    @yield('content')

    <!-- Start Footer Area -->
    @include('frontend.layouts.footer')
    <!-- End Footer Area -->

    <!-- Start Go Top -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top -->

    <!-- Links of JS files -->

    @include('frontend.layouts.script')
    @include('sweetalert::alert')
</body>

</html>
