<!DOCTYPE html>
<html lang="en"  direction="rtl" dir="rtl" style="direction: rtl">
    <!--begin::Head-->
    <head>
        <title> {{ $settings->website_name ?? 'المضف' }} </title>
        <meta charset="utf-8" />
        <meta name="description" content="{{ $settings->about }}" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <link rel="canonical" href="" />
        <link rel="shortcut icon" href="{{ asset($settings->favicon ?? $settings->logo) }}" />
        <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
        <style>
            body {
                font-family: cairo !important;
            }
            th { text-align: start !important }
            input, select, textarea { text-align: right !important; }
        </style>
        @yield('styles')
        <!--begin::Fonts(mandatory for all pages)-->
        @include('backend.layouts.style')
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
        <!--begin::Theme mode setup on page load-->
        <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                <!--begin::Header-->
                @include('backend.layouts.header')
                <!--end::Header-->
                <!--begin::Wrapper-->
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    <!--begin::Sidebar-->
                    @include('backend.layouts.sidebar')
                    <!--end::Sidebar-->
                    <!--begin::Main-->
                        @yield('content')
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Modals-->

        <!--begin::Javascript-->
        @include('backend.layouts.script')
        <!--end::Javascript-->
        @yield('scripts')
        @include('sweetalert::alert')
    </body>
    <!--end::Body-->
</html>
