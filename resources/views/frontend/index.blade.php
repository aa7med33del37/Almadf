@extends('frontend.layouts.main')
@section('content')
<!-- Start Main Banner Area -->
<div class="main-banner-area-with-years">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">
                <div class="main-banner-years-content" data-speed="0.02" data-revert="true">
                    <span>
                        {{ $mainBanner->subTitle }}
                    </span>
                    <h1>
                        {{ $mainBanner->title }}
                    </h1>
                    <p>
                        {{ $mainBanner->description }}
                    </p>

                    <div class="banner-btn">
                        <a href="{{ url($mainBanner->button_link) }}" class="default-btn"><i class="ri-calendar-2-line"></i>
                            {{ $mainBanner->button_text }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500"
                data-aos-once="true">
                <div class="main-banner-years-image" data-speed="0.02" data-revert="true">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="image">
                                <img src="{{ asset($mainBanner->image1)}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="image">
                                <img src="{{ asset($mainBanner->image2)}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="image">
                                <img src="{{ asset($mainBanner->image3)}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="image">
                                <img src="{{ asset($mainBanner->image4)}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="banner-image-shape-1" data-speed="0.08" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/main-banner/banner-two/shape-2.png')}}" alt="image">
                    </div>
                    <div class="banner-image-shape-2" data-speed="0.08" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/main-banner/banner-two/shape-3.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/main-banner/banner-two/shape-1.png')}}" alt="image">
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slides owl-carousel owl-theme">
            @forelse ($partners as $partner)
            <div class="image-box">
                <a href="index-2_2.html" target="_blank">
                    <img src="{{ asset($partner->image ?? '')}}" alt="image">
                </a>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start About Area -->
<div class="about-area-with-bg-color ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image-wrap" data-speed="0.02" data-revert="true">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="image">
                                <img src="{{ asset($aboutBanner->image1)}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="image">
                                <img src="{{ asset($aboutBanner->image2)}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="video-view" data-speed="0.08" data-revert="true">
                        @if ($aboutBanner->youtube)
                            <a href="{{ url($aboutBanner->youtube) }}" class="video-btn popup-youtube">
                                <i class="ri-play-fill"></i>
                            </a>
                        @endif

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content-wrap" data-speed="0.02" data-revert="true">
                    <span>
                        {{ $aboutBanner->subTitle }}
                    </span>
                    <h3>
                        {{ $aboutBanner->title }}
                    </h3>
                    <p>
                        {{ $aboutBanner->description }}
                    </p>
                    <ul class="about-list">
                        <li>
                            {{ $aboutBanner->text1 }}
                        </li>
                        <li>
                            {{ $aboutBanner->text2 }}
                        </li>
                        <li>
                            {{ $aboutBanner->text3 }}
                        </li>
                    </ul>
                    <div class="about-btn">
                        <a href="{{ url($aboutBanner->button_link) }}" class="default-btn"><i class="ri-book-open-line"></i>
                            {{ $aboutBanner->button_text }}

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/about/shape-2.png')}}" alt="image">
    </div>
    <div class="about-shape-4" data-speed="0.04" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/about/shape-3.png')}}" alt="image">
    </div>

</div>
<!-- End About Area -->

<!-- Start Choose Us Area -->
<div class="choose-us-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="choose-us-content" data-speed="0.02" data-revert="true">
                    <span>
                        {{ $chooseusBanner->subTitle }}
                    </span>
                    <h3>
                        {{ $chooseusBanner->title }}
                    </h3>

                    <div class="content-box">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <h4>
                            رسالتنا
                        </h4>
                        <p>
                            {{ $chooseusBanner->message }}
                        </p>
                    </div>

                    <div class="content-box color-two">
                        <div class="icon">
                            <i class="flaticon-settings"></i>
                        </div>
                        <h4>هدفنا</h4>
                        <p>
                            {{ $chooseusBanner->goals }}
                        </p>
                    </div>

                    <div class="content-box ">
                        <div class="icon">
                            <i class="flaticon-settings"></i>
                        </div>
                        <h4>رؤيتنا</h4>
                        <p>
                            {{ $chooseusBanner->vision }}
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="choose-us-image" data-speed="0.02" data-revert="true">
                    <img src="{{ asset('layouts/frontend/assets/images/choose-us/choose-1.png')}}" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="500" alt="image">
                    <div class="square-pattern" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700">
                    </div>

                    <div class="choose-image-shape-1" data-speed="0.05" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/choose-us/shape-1.png')}}" alt="image">
                    </div>
                    <div class="choose-image-shape-2" data-speed="0.07" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/choose-us/shape-2.png')}}" alt="image">
                    </div>
                    <div class="choose-image-shape-3" data-speed="0.08" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/choose-us/shape-3.png')}}" alt="image">
                    </div>
                    <div class="choose-image-shape-4" data-speed="0.09" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/choose-us/shape-4.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Us Area -->

<!-- Start Services Area -->
<div class="services-area bg-fefbf3 ptb-100">
    <div class="container">
        <div class="section-title">
            <span>
                خدماتنا
            </span>
            <h2>
                خدمات شركة المضف
            </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-card">
                    <div class="image">
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-1.png')}}" alt="image">
                    </div>
                    <h3>
                        <a href="services-details.html">
                            عمالة مدربة للايجار
                        </a>
                    </h3>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-services-card">
                    <div class="image">
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-2.png')}}" alt="image">
                    </div>
                    <h3>
                        <a href="services-details.html">
                            استقدام عاملات منزلية
                        </a>
                    </h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-services-card">
                    <div class="image">
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-3.png')}}" alt="image">
                    </div>
                    <h3>
                        <a href="services-details.html">استقدام عمالة مهنية
                        </a>
                    </h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-services-card">
                    <div class="image">
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-4.png')}}" alt="image">
                    </div>
                    <h3>
                        <a href="services-details.html">استقدام سائق خاص
                        </a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="view-all-btn">
            <a href="services.html" class="default-btn"><i class="ri-eye-line"></i>
                عرض الكل
            </a>
        </div>
    </div>
</div>
<!-- End Services Area -->

<!-- Start Free Qoute Area -->
<div class="free-quote-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="free-quote-video-view" data-speed="0.08" data-revert="true">
                    @if ($orderBanner->youtube)
                    <a href="{{ $orderBanner->youtube }}" class="video-btn popup-youtube">
                        <i class="ri-play-fill"></i>
                    </a>
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <form class="free-quote-form" method="POST" action="{{ route('home.order.store') }}">
                    @csrf
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{ $orderBanner->title }}</font>
                        </font>
                    </h3>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="أدخل أسمك" name="name">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="أدخل رقم" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="عنوان البريد الإلكتروني" name="email">
                    </div>
                    <div class="form-group">
                        <select class="form-select form-control" name="service">
                            <option value="">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">اختر الخدمة</font>
                                </font>
                            </option>
                            <option value="تنظيف المنزل">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> تنظيف المنزل </font>
                                </font>
                            </option>
                            <option value="تنظيف المكاتب">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">تنظيف المكاتب</font>
                                </font>
                            </option>
                            <option value="تنظيف النوافذ">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">تنظيف النوافذ</font>
                                </font>
                            </option>
                            <option value="خدمة السباكة">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">خدمة السباكة</font>
                                </font>
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="رسالة"></textarea>
                    </div>
                    <button type="submit" class="default-btn"><i class="ri-arrow-right-line"></i>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">أرسل رسالة</font>
                        </font>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Free Qoute Area -->


<!-- Start Team Area -->
<div class="team-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>
                فريقنا
            </span>
            <h2>
                فريق عمل محترف لخدمتكم بكل احترافية
            </h2>
        </div>

        <div class="row justify-content-center">
            @forelse ($team as $item)
            <div class="col-lg-3 col-sm-4 col-6">
                <div class="single-team-card">
                    <div class="team-image">
                        <img src="{{ asset($item->image)}}" alt="image">

                        <ul class="action-list">
                            {{-- <li><a href="https://twitter.com/" target="_blank"><i class="ri-whatsapp-fill"></i></a> --}}

                        </ul>
                    </div>
                    <div class="team-content">
                        <h3>
                            {{ $item->name }}
                        </h3>
                        <span>
                            {{ $item->job }}
                        </span>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>

        {{-- <div class="view-all-btn">
            <a href="team.html" class="default-btn"><i class="ri-eye-line"></i>
                عرض الكل
            </a>
        </div> --}}
    </div>
</div>
<!-- End Team Area -->


<!-- Start Funfact Area -->
<div class="funfact-wrap-area with-before-color">
    <div class="container">
        <div class="funfact-wrap-inner-box with-main-color pt-100 pb-75">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="funfact-wrap-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-confetti"></i>
                        </div>
                        <h3>
                            <bdi class="odometer" data-count="15">00</bdi>
                            <span class="small-text">سنوات</span>
                        </h3>
                        <p>
                            لدينا أكثر من 15+ سنوات من الخبرة العملية.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="funfact-wrap-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900"
                        data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-team"></i>
                        </div>
                        <h3>
                            <bdi class="odometer" data-count="160">00</bdi>
                            <span class="small-text">
                                موظف
                            </span>
                        </h3>
                        <p>
                            لدينا أكثر من 160 موظفًا يعملون بالقرب منك.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="funfact-wrap-card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-award"></i>
                        </div>
                        <h3>
                            <bdi class="odometer" data-count="20">00</bdi>
                            <span class="small-text">
                                مشروع
                            </span>
                        </h3>
                        <p>
                            لدينا أكثر من 20 مشروعًا ناجحًا تم تسليمها.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Funfact Area -->

<!-- Start Shop Area -->
<div class="shop-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>
                السير الذاتية
            </span>
            <h2>
                تصفح بعض السير الذاتية و الخبرات للعمالة المنزلية
            </h2>
        </div>

        <div class="shop-list-tabs">

            <div class="" id="">
                <div class="" id="" role="">
                    <div class="row justify-content-center">
                        @forelse ($workers as $worker)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-shop-card">
                                <div class="shop-image">
                                    <a href="{{ route('staff_details', $worker->id) }}">
                                        <img src="{{ asset($worker->images[0]->image)}}"
                                            alt="image">
                                    </a>
                                    <ul class="action-list">
                                        <li><a href="{{ route('staff_details', $worker->id) }}"><i class="ri-eye-line"></i></a></li>
                                        {{-- <li><a href="maid-details.html"><i class="ri-links-line"></i></a></li> --}}
                                    </ul>
                                </div>
                                <div class="shop-content">
                                    <h3>
                                        <a href="{{ route('staff_details', $worker->id) }}">
                                           {{ $worker->name }}
                                        </a>
                                    </h3>
                                    <span>
                                        @if ($worker->job == 'recruiting_workers')
                                        استقدام العمالة منزلية
                                        @elseif ($worker->job == 'rent_request')
                                        طلب ايجار
                                        @elseif ($worker->job == 'transportation')
                                        نقل خدمات
                                        @endif
                                    </span>
                                    /
                                    <span>
                                        {{ $worker->age }} سنة
                                    </span>
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>

                    <div class="view-all-btn">
                        <a href="{{ route('staff') }}" class="default-btn"><i class="ri-eye-line"></i>
                            عرض الكل
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Shop Area -->

<!-- Start Testimonials Area -->
<div class="testimonials-area bg-f4fbf9 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="testimonials-image" data-speed="0.02" data-revert="true">
                    <img src="{{ asset($reviewsBanner->image)}}" alt="image">

                    <div class="testimonials-image-shape-1" data-speed="0.06" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/testimonials/shape-1.png')}}" alt="image">
                    </div>
                    <div class="testimonials-image-shape-2" data-speed="0.09" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/testimonials/shape-2.png')}}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="testimonials-box-content" data-speed="0.02" data-revert="true">
                    <div class="content">
                        <span>
                            {{ $reviewsBanner->subTitle }}
                        </span>
                        <h3>
                            {{ $reviewsBanner->title }}
                        </h3>
                    </div>

                    <div class="testimonials-slides-two owl-carousel owl-theme">
                        <div class="single-testimonials-card">
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>
                                "
                                {{ $reviewsBanner->message1 }}
                                "
                            </p>
                            <div class="info">
                                <h3>
                                    {{ $reviewsBanner->client1 }}
                                </h3>
                                <span>
                                    {{ $reviewsBanner->job1 }}
                                </span>
                            </div>
                        </div>

                        <div class="single-testimonials-card">
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>
                                "
                                {{ $reviewsBanner->message2 }}
                                "
                            </p>
                            <div class="info">
                                <h3>
                                    {{ $reviewsBanner->client2 }}
                                </h3>
                                <span>
                                    {{ $reviewsBanner->job2 }}
                                </span>
                            </div>
                        </div>

                        <div class="single-testimonials-card">
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>
                                "
                                {{ $reviewsBanner->message3 }}
                                "
                            </p>
                            <div class="info">
                                <h3>
                                    {{ $reviewsBanner->client3 }}
                                </h3>
                                <span>
                                    {{ $reviewsBanner->job3 }}
                                </span>
                            </div>
                        </div>


                    </div>

                    <div class="testimonials-content-shape-1" data-speed="0.09" data-revert="true">
                        <img src="{{ asset('layouts/frontend/assets/images/testimonials/shape-3.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->

<!-- Start Newsletter Area -->
<div class="newsletter-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>
                تواصل معنا للحصول علي اخر العروض والخدمات
            </h2>
        </div>

        <div class="d-flex justify-content-center align-items-center">

            <a href="contact.html" class="default-btn text-center mx-auto ">
                تواصل معنا عبر الواتساب
            </a>
        </div>

    </div>

    <div class="newsletter-shape-1" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-1.png')}}" alt="image">
    </div>
    <div class="newsletter-shape-2" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-2.png')}}" alt="image">
    </div>
    <div class="newsletter-shape-3" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-3.png')}}" alt="image">
    </div>
</div>
<!-- End Newsletter Area -->


<!-- Start Blog Wrap Area -->
<div class="blog-wrap-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>
                اخر الاخبار
            </span>
            <h2>
                ابق على اطلاع بأحدث الأخبار لدينا
            </h2>
        </div>

        <div class="blog-wrap-slides owl-carousel owl-theme">
            <div class="blog-wrap-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700"
                data-aos-once="true">
                <span>
                    تصنيف رقم 1
                </span>
                <ul class="entry-meta">
                    <li><i class="ri-calendar-2-line"></i> April 23, 2022</li>
                    <li><i class="ri-chat-1-line"></i> 02
                        تعليقات
                    </li>
                </ul>
                <h3>
                    <a href="blog-details.html">
                        كيف تختارين مربية أطفالك؟
                    </a>
                </h3>
                <p>بدو كوظيفة بسيطة، لكنها حرجة للغاية وتتعلق بأطفالنا، أغلى ما لدينا. وبعدما شهدت المملكة أكثر من
                    واقعة غير سارة من مربيات أطفال مغتربات بحق الأطفال تحت رعايتهم، .</p>
            </div>

            <div class="blog-wrap-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                data-aos-once="true">
                <span>
                    تصنيف رقم 2
                </span>
                <ul class="entry-meta">
                    <li><i class="ri-calendar-2-line"></i> April 23, 2022</li>
                    <li><i class="ri-chat-1-line"></i> 02 تعليقات</li>
                </ul>
                <h3>
                    <a href="blog-details.html">
                        سائق خاص لكن يعطّلك؟ أسباب العَطَلَة وكيف تتفاداها
                    </a>
                </h3>
                <p>يعتمد معظم السائقين على تطبيقات الملاحة على هواتفهم، والتي عادة ما تكون غير دقيقة، وقد تقودك إلى
                    طرق خاطئة إذا لم يكن السائق على دراية كافية بالطرق.</p>
            </div>

            <div class="blog-wrap-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700"
                data-aos-once="true">
                <span>
                    تصنيف رقم 1
                </span>
                <ul class="entry-meta">
                    <li><i class="ri-calendar-2-line"></i> April 23, 2022</li>
                    <li><i class="ri-chat-1-line"></i> 02
                        تعليقات
                    </li>
                </ul>
                <h3>
                    <a href="blog-details.html">
                        كيف تختارين مربية أطفالك؟
                    </a>
                </h3>
                <p>بدو كوظيفة بسيطة، لكنها حرجة للغاية وتتعلق بأطفالنا، أغلى ما لدينا. وبعدما شهدت المملكة أكثر من
                    واقعة غير سارة من مربيات أطفال مغتربات بحق الأطفال تحت رعايتهم، .</p>
            </div>

        </div>
    </div>

    <div class="blog-wrap-shape">
        <img src="{{ asset('layouts/frontend/assets/images/home-four/blog-shape.png')}}" alt="image">
    </div>
</div>
<!-- End Blog Wrap Area -->
@endsection
