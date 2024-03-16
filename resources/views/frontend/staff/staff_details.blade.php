@extends('frontend.layouts.main')
@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>
                تفاصيل العاملة
            </h2>

            <ul>
                <li>
                    <a href="index.html">
                        الرئيسية
                    </a>
                </li>
                <li>
                    تفاصيل العاملة
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



<!-- Start Single Product Area -->
<div class="single-product-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="single-product-image-tabs">
                    <div class="row">
                        <div class="col-lg-3 d-none d-md-block">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="image-{{ $worker->id }}-tab" data-bs-toggle="tab"
                                        href="maid-details.html#image-{{ $worker->id }}" role="tab" aria-controls="image-{{ $worker->id }}">
                                        <img src="{{ asset($worker->images[0]->image) }}" alt="image">
                                    </a>
                                </li>

                                @forelse ($worker->images as $key => $item)
                                @if ($key > 0)
                                <li class="nav-item">
                                    <a class="nav-link" id="image-{{ $item->id }}-tab" data-bs-toggle="tab"
                                        href="maid-details.html#image-{{ $item->id }}" role="tab" aria-controls="image-{{ $item->id }}">
                                        <img src="{{ asset($item->image) }}" alt="image">
                                    </a>
                                </li>
                                @endif
                                @empty

                                @endforelse
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="image-2-tab" data-bs-toggle="tab"
                                        href="maid-details.html#image-2" role="tab" aria-controls="image-2">
                                        <img src="{{ asset('layouts/frontend/assets/images/shop/maid-1.png') }}" alt="image">
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="image-3-tab" data-bs-toggle="tab"
                                        href="maid-details.html#image-3" role="tab" aria-controls="image-3">
                                        <img src="{{ asset('layouts/frontend/assets/images/shop/maid-2.png') }}" alt="image">
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="image-4-tab" data-bs-toggle="tab"
                                        href="maid-details.html#image-4" role="tab" aria-controls="image-4">
                                        <img src="{{ asset('layouts/frontend/assets/images/shop/maid-1.png') }}" alt="image">
                                    </a>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="col-lg-9">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="image-{{ $worker->id }}" role="tabpanel">
                                    <img src="{{ asset($worker->images[0]->image) }}" alt="image">
                                </div>

                                @forelse ($worker->images as $key => $item)
                                @if ($key > 0)
                                <div class="tab-pane fade" id="image-{{ $item->id }}" role="tabpanel">
                                    <img src="{{ asset($item->image) }}" alt="image">
                                </div>
                                @endif
                                @empty

                                @endforelse

                                {{-- <div class="tab-pane fade" id="image-2" role="tabpanel">
                                    <img src="{{ asset('layouts/frontend/assets/images/shop/maid-1.png') }}" alt="image">

                                </div>

                                <div class="tab-pane fade" id="image-3" role="tabpanel">
                                    <img src="{{ asset('layouts/frontend/assets/images/shop/maid-1.png') }}" alt="image">

                                </div>

                                <div class="tab-pane fade" id="image-4" role="tabpanel">
                                    <img src="{{ asset('layouts/frontend/assets/images/shop/maid-1.png') }}" alt="image">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="single-product-content">
                    <h3>
                        {{ $worker->name }}
                    </h3>
                    <span>ريال165.00</span>
                    <ul class="products-meta">
                        <li>البلد : <span> {{ $worker->country }} </span></li>
                        <li>العمر : <span> {{ $worker->age }} سنة </span></li>
                        <li>الديانة : <span> {{ $worker->religion == 'Muslim' ? 'مسلمة' : 'مسيحية' }} </span></li>
                        <li>الخبرة : <span> {{ $worker->experience }} سنوات </span></li>
                    </ul>
                    <p>

                        {{ $worker->description }}
                    </p>
                    <ul class="products-rating">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>


                    <div class="product-btn">
                        <a download href="{{ $worker->cv }}" class="default-btn" role="button"><i class="ri-file-download-line"></i>
                                تحميل السيرة الذاتية
                        </a>

                        <a href="{{ route('contact') }}" class="default-btn"><i class="ri-arrow-left-line"></i>
                            تواصل الان
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <div class="single-product-tabs">
            <ul class="nav nav-tabs" id="myTab-2" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                        href="maid-details.html#description" role="tab"
                        aria-controls="description">
                        الوصف
                    </a></li>

                <li class="nav-item"><a class="nav-link" id="information-tab" data-bs-toggle="tab"
                        href="maid-details.html#information" role="tab"
                        aria-controls="information">
                        المعلومات
                    </a></li>


            </ul>

            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <p>

                        {{ $worker->long_description }}
                    </p>
                </div>

                <div class="tab-pane fade" id="information" role="tabpanel">
                    <ul class="products-meta">
                        <li>البلد : <span> ماليزيا </span></li>
                        <li>العمر : <span> 25 سنة </span></li>
                        <li>الديانة : <span> مسلمة </span></li>
                        <li>الخبرة : <span> 3 سنوات </span></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- End Single Product Area -->



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
