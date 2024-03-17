<div id="kt_app_sidebar" class="app-sidebar flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">
        <!--begin::Logo-->
        <a href="{{ route('dashboard') }}">
        <img alt="Logo" src="{{ asset($settings->logo ?? '') }}" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
        <img alt="Logo" src="{{ asset($settings->logo ?? '') }}" class="h-25px theme-dark-show" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-1"></i>
            </div>
        </div>
        <!--end::Aside toggle-->
    </div>
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item here show menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-category fs-2"></i>
                    </span>
                    <a href="{{ route('dashboard') }}" class="menu-title">الرئيسية</a>
                    </span>
                    <!--end:Menu link-->
                </div>

                <!--begin:Settings item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('workers.index') }}" class="menu-title"> العاملات </a>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                </div>

                <!--begin:Employees item-->
                <div class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('team.index') }}" class="menu-title"> فريق العمل </a>
                    <span class="menu-arrow"></span>
                    </span>
                </div>
                <!--begin:Employees item-->

                <!--begin:Banners item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('banners.index') }}" class="menu-title"> بانرات الموقع </a>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                </div>
                <!--end:Banners item-->

                <!--begin:Marketing item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('clients-orders.index') }}" class="menu-title"> الطلبات </a>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Marketing link-->
                </div>

                <!--begin:Marketing item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('marketing') }}" class="menu-title"> التسويق </a>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Marketing link-->
                </div>

                 <!--begin:Users item-->
                 <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('users.index') }}" class="menu-title"> المستخدمين </a>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                </div>
                <!--end:Users item-->

                <!--begin:Settings item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-outline ki-rescue fs-2"></i>
                    </span>
                    <a href="{{ route('settings.index') }}" class="menu-title"> اعدادات الموقع </a>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                </div>
                <!--end:Settings item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
        <!--begin::User-->
        <div class="">
            <!--begin::User info-->
            <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
                    <img src="{{ asset($settings->logo ?? '') }}" alt="image" />
                </div>
                <!--begin::Name-->
                <div class="d-flex flex-column align-items-start justify-content-center ms-3">
                    <span class="text-gray-500 fs-8 fw-semibold">مرحبا</span>
                    <a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary"> {{ Auth::user()->name }} </a>
                </div>
                <!--end::Name-->
            </div>
            <!--end::User info-->
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="{{ asset($settings->logo ?? '') }}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">{{ $settings->name }}
                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
                                    {{ Auth::user()->id == '1' ? 'مدير الموقع' : 'ادمن' }}
                                </span>
                            </div>
                            <a href="{{ route('users.edit', Auth::user()->id) }}" class="fw-semibold text-muted text-hover-primary fs-7">{{ $settings->email }}</a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ route('users.edit', Auth::user()->id) }}" class="menu-link px-5">تعديل الحساب</a>
                </div>
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">Mode
                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                    <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                    <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                    </span></span>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-night-day fs-2"></i>
                            </span>
                            <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-moon fs-2"></i>
                            </span>
                            <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-screen fs-2"></i>
                            </span>
                            <span class="menu-title">System</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ route('settings.index') }}" class="menu-link px-5"> اعدادات الموقع </a>
                </div>


                <div class="menu-item px-5">
                    {{-- <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" class="menu-link px-5">
                            تسجيل الخروج
                        </x-dropdown-link>
                    </form>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
        </div>
        <!--end::User-->
    </div>
    <!--end::Footer-->
</div>
