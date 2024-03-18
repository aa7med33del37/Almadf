<div class="navbar-area navbar-style-two">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($settings->logo ?? 'layouts/frontend/assets/images/logo_2.png')}}" class="black-logo" alt="المضف">
                        <img src="{{ asset($settings->logo ?? 'layouts/frontend/assets/images/logo_2.png')}}" class="white-logo" alt="المضف">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset($settings->logo ?? 'layouts/frontend/assets/images/logo_2.png')}}" class="black-logo" alt="المضف">
                    <img src="{{ asset($settings->logo ?? 'layouts/frontend/assets/images/white-logo_2.png')}}" class="white-logo" alt="المضف">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active">
                                الرئيسية
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">
                                ماذا عنا ؟
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link">

                                خدماتنا
                                {{-- <i class="ri-arrow-down-s-line"></i> --}}
                            </a>

                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">
                                        طلب استقدام
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">
                                        طلب ايجار
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">
                                        نقل خدمات
                                    </a>
                                </li>


                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link">
                                الاسئلة الشائعة
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">
                                اتصل بنا
                            </a>
                        </li>

                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="tel:{{ $settings->phone }}" class="phone-number">
                                {{ $settings->phone }}
                            </a>
                        </div>

                        <div class="option-item">
                            <a href="contact.html" class="default-btn"><i class="ri-chat-1-line"></i>
                                تواصل معنا
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="tel:0500016116" class="phone-number">
                                {{ $settings->phone }}
                            </a>
                        </div>

                        <div class="option-item">
                            <a href="contact.html" class="default-btn"><i class="ri-chat-1-line"></i>
                                تواصل معنا
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
