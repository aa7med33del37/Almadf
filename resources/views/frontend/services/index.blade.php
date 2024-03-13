@extends('frontend.layouts.main')
@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>
                خدماتنا
            </h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        الصفحة الرئيسية
                    </a>
                </li>
                <li>
                    خدماتنا
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
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-1.png') }}" alt="image">
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
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-2.png') }}" alt="image">
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
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-3.png') }}" alt="image">
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
                        <img src="{{ asset('layouts/frontend/assets/images/services/services-4.png') }}" alt="image">
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
                    <a href="" class="video-btn popup-youtube">
                        <i class="ri-play-fill"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <form class="free-quote-form">
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">طلب عرض أسعار مجاني</font>
                        </font>
                    </h3>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="أدخل أسمك">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="أدخل رقم">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="عنوان البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                        <select class="form-select form-control">
                            <option value="1">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">اختر الخدمة</font>
                                </font>
                            </option>
                            <option value="2">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">تنظيف المنزل</font>
                                </font>
                            </option>
                            <option value="3">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">تنظيف المكاتب</font>
                                </font>
                            </option>
                            <option value="4">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">تنظيف النوافذ</font>
                                </font>
                            </option>
                            <option value="5">
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

<!-- Start Testimonials Area -->
<div class="testimonials-area bg-f4fbf9 ptb-100">
    <div class="container">
        <div class="section-title">
            <span>اراء العملاء
            </span>
            <h2>
                ماذا يقول عملائنا عنا ؟
            </h2>
        </div>

        <div class="testimonials-slides-three owl-carousel owl-theme">


            <div class="single-testimonials-box-card">
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>
                    "
                    خدمة ممتازة وسريعة وموظفين محترفين ومتعاونين ومتفهمين لاحتياجات العميل والتعامل معهم
                    مريح وسهل
                    "
                </p>
                <div class="info">
                    <h3>
                        عميل رقم 1
                    </h3>
                    <span>
                        مدير شركة 1
                    </span>
                </div>
            </div>

            <div class="single-testimonials-box-card">
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>
                    "
                    خدمة ممتازة وسريعة وموظفين محترفين ومتعاونين ومتفهمين لاحتياجات العميل والتعامل معهم
                    مريح وسهل
                    "
                </p>
                <div class="info">
                    <h3>
                        عميل رقم 2
                    </h3>
                    <span>
                        مدير شركة 2
                    </span>
                </div>
            </div>

            <div class="single-testimonials-box-card">
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>
                    "
                    خدمة ممتازة وسريعة وموظفين محترفين ومتعاونين ومتفهمين لاحتياجات العميل والتعامل معهم
                    مريح وسهل
                    "
                </p>
                <div class="info">
                    <h3>
                        عميل رقم 3
                    </h3>
                    <span>
                        مدير شركة 3
                    </span>
                </div>
            </div>

        </div>
    </div>

    <div class="testimonials-shape-1" data-speed="0.08" data-revert="true">
        <img src="assets/images/testimonials/shape-4.png" alt="image">
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
        <img src="assets/images/newsletter/shape-1.png" alt="image">
    </div>
    <div class="newsletter-shape-2" data-speed="0.09" data-revert="true">
        <img src="assets/images/newsletter/shape-2.png" alt="image">
    </div>
    <div class="newsletter-shape-3" data-speed="0.09" data-revert="true">
        <img src="assets/images/newsletter/shape-3.png" alt="image">
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
        <img src="assets/images/home-four/blog-shape.png" alt="image">
    </div>
</div>
<!-- End Blog Wrap Area -->
@endsection
