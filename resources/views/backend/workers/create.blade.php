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
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0"> اضافة عاملة جديدة </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary"> الرئيسية </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">العاملات</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted"> اضافة عاملة جديدة </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{ route('workers.index') }}" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold"> جميع العاملات </a>
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
                <form id="kt_invoice_form" action="{{ route('workers.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <span class="fs-2x fw-bold text-gray-800">عاملة رقم #</span>
                                            <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="{{ $workers->count() + 1 }}" placehoder="..." />
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
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> اسم العامله </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
                                                </div>
                                                @error('name')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> العمر </label>
                                                <div>
                                                    <input type="number" class="form-control form-control-solid" placeholder="" min="18" max="50" value="25" name="age" style="text-align: end"/>
                                                </div>
                                                @error('age')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> الخبرة </label>
                                                <div>
                                                    <input type="number" class="form-control form-control-solid" placeholder="" min="0" max="50" value="5" name="experience" style="text-align: end"/>
                                                </div>
                                                @error('experience')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold fs-6 text-gray-700"> نوع الخدمة </label>
                                                <select name="job" aria-label="Select a Timezone" data-control="select2" class="form-select form-select-solid">
                                                    <option value="">اختيار</option>
                                                    <option value="recruiting_workers">
                                                        استقدام العمالة منزلية
                                                    </option>
                                                    <option value="rent_request">
                                                        طلب ايجار
                                                    </option>
                                                    <option value="transportation">
                                                        نقل خدمات
                                                    </option>
                                                </select>
                                                @error('job')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <div class="mb-0">
                                            <!--begin::Row-->
                                            <div class="row gx-10 mb-5">
                                                <div class="col-lg-6">
                                                    <label class="form-label fw-bold fs-6 text-gray-700"> الدولة </label>
                                                    <select name="country" aria-label="Select a Timezone" data-control="select2" data-placeholder="دولة العاملة" class="form-select form-select-solid">
                                                        <option value="">اختيار</option>
                                                        @foreach ($countries as $country)
                                                        <option value="{{ $country->country_arName }}">
                                                            {{ $country->country_arName }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('country')
                                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fw-bold fs-6 text-gray-700"> الديانة </label>
                                                    <select name="religion" aria-label="Select a Timezone" data-control="select2" data-placeholder="ديانة العاملة" class="form-select form-select-solid">
                                                        <option value=""></option>
                                                        <option data-kt-flag="flags/united-states.svg" value="Muslim" selected>
                                                            مسلمة
                                                        </option>
                                                        <option data-kt-flag="flags/united-kingdom.svg" value="Christian">
                                                            مسيحية
                                                        </option>
                                                    </select>
                                                    @error('religion')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Religion End --}}
                                        <!--begin::Notes-->
                                        <div class="mb-0">
                                            <label class="form-label fs-6 fw-bold text-gray-700"> وصف قصير </label>
                                            <textarea name="description" class="form-control form-control-solid" rows="3" placeholder="وصف قصير للعامله"></textarea>
                                            @error('description')
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-0">
                                            <label class="form-label fs-6 fw-bold text-gray-700"> وصف طويل </label>
                                            <textarea name="long_description" class="form-control form-control-solid" rows="3" placeholder="وصف طويل للعامله"></textarea>
                                            @error('long_description')
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
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2> صورة العاملة </h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <!--begin::Image input placeholder-->
                                            <style>.image-input-placeholder { background-image: url({{ asset('layouts/backend/assets/media/svg/files/blank-image.svg') }}); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                            <!--end::Image input placeholder-->
                                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                    <i class="ki-outline ki-pencil fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="image[]" accept=".png, .jpg, .jpeg" multiple>
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-cross fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                <i class="ki-outline ki-cross fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">قم بتعيين صورة للعاملة. يتم قبول ملفات الصور *.png و*.jpg و*.jpeg فقط</div>
                                            @error('image')
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-8"></div>
                                    <!--end::Separator-->
                                    {{-- Religion Start --}}
                                    <div class="mb-10">
                                        <label class="form-label fw-bold fs-6 text-gray-700"> تقييم العاملة </label>
                                        <select name="rating" aria-label="Select a Timezone" data-control="select2" data-placeholder="تقييم العاملة" class="form-select form-select-solid">
                                            <option value=""></option>
                                            <option data-kt-flag="flags/united-states.svg" value="1">
                                                نجمة
                                            </option>
                                            <option data-kt-flag="flags/united-states.svg" value="2">
                                                نجمتين
                                            </option>
                                            <option data-kt-flag="flags/united-states.svg" value="3">
                                                3 نجوم
                                            </option>
                                            <option data-kt-flag="flags/united-states.svg" value="4">
                                                4 نجوم
                                            </option>
                                            <option data-kt-flag="flags/united-states.svg" value="5" selected>
                                                5 نجوم
                                            </option>
                                        </select>
                                        @error('rating')
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Religion End --}}
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Option-->
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                        <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700"> عرض في الموقع </span>
                                        <input class="form-check-input" type="checkbox" checked="checked" value="1" name="status"/>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-8"></div>
                                    <!--end::Separator-->
                                    <div class="mb-0">
                                        <label class="form-label fs-6 fw-bold text-gray-700"> السيرة الذاتية - CV </label>
                                        <input type="file" name="cv" id="cv" class="btn btn-flex btn-light-primary w-100">
                                        @error('cv')
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-8"></div>
                                    <!--end::Separator-->
                                    <!--begin::Actions-->
                                    <div class="mb-0">
                                        <div class="row mb-5">
                                            <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                                            <i class="ki-outline ki-triangle fs-3"></i> اضافة العاملة </button>
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
