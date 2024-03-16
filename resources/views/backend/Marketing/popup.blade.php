@extends('backend.layouts.main')
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar pt-2 pt-lg-10">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary"> الرئيسية </a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{ route('marketing') }}" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold"> التسويق </a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Layout-->
                <form id="kt_invoice_form" action="{{ route('popup.store', $popup->id ?? '') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> العنوان </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="title" value="{{ $popup->popup_title ?? '' }}"/>
                                                </div>
                                                @error('title')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> النص </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="text" value="{{ $popup->popup_text ?? '' }}"/>
                                                </div>
                                                @error('text')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        <!--end::Notes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-lg-auto min-w-lg-300px">
                            <!--begin::Card-->
                            <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                                <!--begin::Card body-->
                                <div class="card-body p-10">
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-8"></div>
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Option-->
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                            <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700"> عرض في الموقع </span>
                                            <input class="form-check-input" type="checkbox" checked="checked" value="{{ $popup->status ?? '1' }}" name="status"/>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Separator-->
                                    <!--begin::Actions-->
                                    <div class="mb-0">
                                        <div class="row mb-5">
                                            <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                                            <i class="ki-outline ki-triangle fs-3"></i> تحديث الاعلان </button>
                                        </div>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                </form>
                <!--end::Form-->
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
@endsection
