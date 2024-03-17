{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en"  direction="rtl" dir="rtl" style="direction: rtl">
    <!--begin::Head-->
    <head>
        <title>{{ $settings->website_title }}</title>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <link rel="canonical" href="" />
        <link rel="shortcut icon" href="{{ $settings->favicon }}" />
        @include('backend.layouts.style')
        <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
        <style>
            body {
                font-family: cairo !important;
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="app-blank">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid p-10 order-2 order-lg-1">
                    <!--begin::Form-->
                    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10">
                            <!--begin::Form-->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="index.html" method="POST" action="{{ route('login') }}">
                                @csrf
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 fw-bolder mb-3">تسجيل الدخول</h1>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Heading-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input id="email" type="text" placeholder="الايميل" name="email" autocomplete="off" class="form-control bg-transparent" name="email" :value="old('email')" required autofocus autocomplete="email" required/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                    <!--end::Email-->
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-3">
                                    <!--begin::Password-->
                                    <input id="password" type="password" placeholder="كلمة السر" name="password" autocomplete="off" class="form-control bg-transparent" name="password"
                            required autocomplete="current-password" required/>
                                    <!--end::Password-->
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                <!--end::Input group=-->
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">تسجيل الدخول</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        @include('backend.layouts.script')

    </body>
    <!--end::Body-->
</html>
