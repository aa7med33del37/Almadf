@extends('frontend.layouts.main')
@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>
                اتصل بنا
            </h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        الرئيسية
                    </a>
                </li>
                <li>
                    اتصل بنا
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

<!-- Start Contact Information Area -->
<div class="contact-information-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>معلومات الاتصال
            </span>
            <h2>
                نريد مشاركة موقعنا للعثور علينا بسهولة
            </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-information-card">
                    <div class="icon">
                        <i class="flaticon-location"></i>
                    </div>
                    <h3>
                        العنوان
                    </h3>
                    <p>
                        العنوان : {{ $settings->address }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-information-card">
                    <div class="icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <h3>
                        الهاتف
                    </h3>
                    <p><a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a> </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-information-card">
                    <div class="icon">
                        <i class="flaticon-mail"></i>
                    </div>
                    <h3>البريد</h3>
                    <p>
                        <a href="">
                            <span class="">
                                {{ $settings->email }}
                            </span>
                        </a>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-information-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/contact-information-shape-1.png') }}" alt="image">
    </div>
</div>
<!-- End Contact Information Area -->

<!-- Start Contact Form Area -->
<div class="contact-form-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form-content">
                    <span>
                        اسألنا
                    </span>
                    <h3>
                        لا يزال لديك أي مشكلة أو سؤال؟ اسأل بحرية

                    </h3>

                    <ul class="action-list">

                        @if ($settings->facebook)
                <li>
                    <a href="{{ $settings->facebook }}" target="_blank">
                        <i class="ri-facebook-fill"></i>
                    </a>
                </li>
                @endif

                @if ($settings->x)
                <li>
                    <a href="{{ $settings->x }}" target="_blank">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </li>
                @endif

                @if ($settings->youtube)
                <li>
                    <a href="{{ $settings->youtube }}" target="_blank">
                        <i class="ri-youtube-fill"></i>
                    </a>
                </li>
                @endif

                @if ($settings->instagram)
                <li>
                    <a href="{{ $settings->instagram }}" target="_blank">
                        <i class="ri-instagram-fill"></i>
                    </a>
                </li>
                @endif

                @if ($settings->linkedin)
                <li>
                    <a href="{{ $settings->linkedin }}" target="_blank">
                        <i class="ri-linkedin-fill"></i>
                    </a>
                </li>
                @endif
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form-wrap">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-user-3-line"></i></label>
                                    <input type="text" class="form-control" required data-error="من فضلك أدخل إسمك"
                                        placeholder="الاسم">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-mail-line"></i></label>
                                    <input type="text" class="form-control" required
                                        data-error="رجاءا أدخل بريدك الإلكتروني" placeholder="البريد">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-phone-line"></i></label>
                                    <input type="text" class="form-control" required
                                        data-error="يرجى إدخال رقم الهاتف الخاص بك" placeholder="رقم الهاتف">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-pencil-line"></i></label>
                                    <textarea class="form-control" cols="30" rows="6" required
                                        data-error="اكتب رسالتك" placeholder="رسالتك"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class="ri-arrow-right-line"></i>
                                    أرسل رسالتك
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->

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
