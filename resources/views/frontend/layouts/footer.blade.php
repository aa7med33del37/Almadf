<footer class="footer-area pt-100">
    <div class="container">
        <div class="footer-top-box d-flex justify-content-between align-items-center">
            <div class="footer-widget-logo">
                <img src="{{ asset($settings->logo ?? 'layouts/frontend/assets/images/logo_2.png')}}" class="black-logo" alt="المضف">
                <img src="{{ asset($settings->logo ?? 'layouts/frontend/assets/images/logo_2.png')}}" class="white-logo" alt="المضف">
            </div>

            <ul class="footer-widget-social">
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

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <p>
                        {{ $settings->about }}
                    </p>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>
                        روابط سريعة
                    </h3>

                    <ul class="quick-links">
                        <li><a href="about-one.html">
                                من نحن
                            </a></li>
                        <li><a href="services.html">
                                خدماتنا
                            </a></li>
                        <li><a href="terms-of-service.html">
                                شروط الخدمة
                            </a></li>
                        <li><a href="privacy-policy.html">
                                سياسة الخصوصية
                            </a></li>
                        <li><a href="contact.html">
                                تواصل معنا
                            </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-3">
                    <h3>
                        خدماتنا
                    </h3>

                    <ul class="quick-links">
                        <li><a href="services-details.html">
                                طلب استقدام
                            </a></li>
                        <li><a href="services-details.html">
                                طلب نقل خدمات
                            </a></li>
                        <li><a href="services-details.html">
                                طلب ايجار
                            </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>
                        تواصل معنا
                    </h3>

                    <ul class="quick-links">
                        <li><span>
                                العنوان
                                :</span>
                                {{ $settings->address }}
                        </li>
                        <li><span>البريد:</span> <a href=""><span class="">
                            {{ $settings->email }}
                                </span></a>
                        </li>
                    </ul>
                    <div class="footer-information">
                        <i class="ri-phone-fill"></i>
                        <span>
                            الهاتف:
                        </span>
                        <a href="tel:{{ $settings->phone }}">
                            {{ $settings->phone }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    © المضف All Rights Reserved by
                    <a href="../../شهرة_default.html" target="_blank">شهرة</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/footer/shape-2.png')}}" alt="image">
    </div>
    <div class="footer-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/footer/shape-3.png')}}" alt="image">
    </div>
</footer>
