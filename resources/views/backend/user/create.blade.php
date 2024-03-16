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
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0"> اضافة مستخدم جديد </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary"> الرئيسية </a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{ route('user.index') }}" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold"> جميع العاملات </a>
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
                <form id="kt_invoice_form" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                    <!--begin::Form-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <span class="fs-2x fw-bold text-gray-800">مستخدم رقم #</span>
                                            <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="{{ $team->count() + 1 }}" placehoder="..." />
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> اسم المستخدم </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
                                                </div>
                                                @error('name')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> الايميل </label>
                                                <div>
                                                    <input type="email" class="form-control form-control-solid" placeholder="" name="email"/>
                                                </div>
                                                @error('email')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-8">
                                                <!--begin::Option-->
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700"> عرض في الموقع </span>
                                                <input class="form-check-input" type="checkbox" checked="checked" value="1" name="status"/>
                                                </label>
                                                <!--end::Option-->
                                            </div>

                                            <div class="mb-0">
                                                <div class="row mb-5">
                                                    <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                                                    <i class="ki-outline ki-triangle fs-3"></i> اضافة المستخدم </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
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
