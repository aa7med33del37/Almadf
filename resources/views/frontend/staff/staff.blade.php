@extends('frontend.layouts.main')
@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>
                خادمات طلب استقدام
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

<!-- Start Team Area -->
<div class="team-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>
                تصفح
            </span>
            <h2>
                خادمات طلب استقدام
            </h2>
        </div>

        <div class="search controls row justify-content-center align-items-center w-100">
            <div class="col-md-5">
                <div class="form-group mb-3">
                    <select class="form-select form-control py-3">
                        <option value="">
                            اختر البلد
                        </option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->country_code  }}">
                                {{ $country->country_arName	 }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group mb-3 ">
                    <select class="form-select form-control py-3">
                        <option value="1" >
                            اختر الديانة
                        </option>
                        <option value="2">
                            مسلمة
                        </option>
                        <option value="3">
                            غير مسلمة
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-2">
                <button class="btn w-100 btn-sm default-btn mb-3">
                    بحث
                </button>
            </div>

        </div>

        <div class="shop-list-tabs">
            <div class="" id="">
                <div class="" id="" role="">
                    <div class="row justify-content-center">
                        @forelse ($workers as $worker)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-shop-card">
                                <div class="shop-image">
                                    <a href="maid-details.html"><img src="{{ asset($worker->image)}}"
                                            alt="image"></a>

                                    <ul class="action-list">
                                        <li><a href="maid-details.html"><i class="ri-eye-line"></i></a></li>
                                        <li><a href="maid-details.html"><i class="ri-links-line"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-content">
                                    <h3>
                                        <a href="maid-details.html">
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


                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

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
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-1.png') }}" alt="image">
    </div>
    <div class="newsletter-shape-2" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-2.png') }}" alt="image">
    </div>
    <div class="newsletter-shape-3" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-3.png') }}" alt="image">
    </div>
</div>
<!-- End Newsletter Area -->
@endsection
