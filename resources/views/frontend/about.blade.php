@extends('frontend.layouts.main')
@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>
                ماذا عنا ؟
            </h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        الرئيسية
                    </a>
                </li>
                <li>
                    ماذا عنا ؟
                </li>
            </ul>
        </div>
    </div>

    <div class="page-banner-shape-1" data-speed="0.05" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-1.png') }}" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.07" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-2.png') }}" alt="image">
    </div>
    <div class="page-banner-shape-3" data-speed="0.06" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-3.png') }}" alt="image">
    </div>
    <div class="page-banner-shape-4" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-4.png') }}" alt="image">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Funfact Area -->
<div class="funfact-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>
                من نحن ؟
            </span>
            <h2>
                نسعى جاهدين لضمان راحتك وراحة عائلتك
            </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single-funfact-card">
                    <div class="icon">
                        <i class="flaticon-confetti"></i>
                    </div>
                    <h3>
                        رسالتنا
                    </h3>
                    <p>
                        {{ $chooseusBanner->message }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-funfact-card color-two">
                    <div class="icon">
                        <i class="flaticon-team"></i>
                    </div>
                    <h3>
                        هدفنا
                    </h3>
                    <p>
                        {{ $chooseusBanner->goals }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-funfact-card color-three">
                    <div class="icon">
                        <i class="flaticon-award"></i>
                    </div>
                    <h3>
                        رؤيتنا

                    </h3>
                    <p>
                        {{ $chooseusBanner->vision }}

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Funfact Area -->

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

<!-- Start Video Area -->
{{-- <div class="video-area margin-top-bottom-zero">
    <div class="container">
        <div class="video-view-content" data-speed="0.09" data-revert="true">
            <a href="" class="video-btn popup-youtube">
                <i class="ri-play-fill"></i>
            </a>
        </div>
    </div>
</div> --}}
<!-- End Video Area -->


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

@endsection
