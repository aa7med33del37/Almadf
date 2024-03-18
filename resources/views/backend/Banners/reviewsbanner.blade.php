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
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0"> تحديث بانؤ "لماذا تختارنا" الموقع </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary"> الرئيسية </a>
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{ route('banners.index') }}" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold"> جميع البانرات </a>
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
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Layout-->
                <form id="kt_invoice_form" action="{{ route('reviewsbanner.store', $data->id ?? '') }}" method="POST" enctype="multipart/form-data">
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
                                            <span class="fs-2x fw-bold text-gray-800"> اراء العملاء </span>
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
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> العنوان الرئيسي </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="title" value="{{ $data->title ?? '' }}"/>
                                                </div>
                                                @error('title')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> العنوان الفرعي </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="subTitle" value="{{ $data->subTitle ?? '' }}"/>
                                                </div>
                                                @error('subTitle')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-8"></div>
                                        <!--end::Separator-->

                                        <!--begin::Cleint 1-->
                                        <div class="row gx-10 mb-5">
                                            <span class="fs-2x fw-bold text-gray-800"> العميل الاول </span>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> اسم العميل الاول </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="client1" value="{{ $data->client1 ?? '' }}"/>
                                                </div>
                                                @error('client1')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> وظيفة العميل الاول </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="job1" value="{{ $data->job1 ?? '' }}"/>
                                                </div>
                                                @error('job1')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> رسالة العميل الاول </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="message1" value="{{ $data->message1 ?? '' }}"/>
                                                </div>
                                                @error('message1')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fw-bold fs-6 text-gray-700"> تقييم العميل الاول </label>
                                                <select name="rating1" aria-label="Select a Timezone" data-control="select2" data-placeholder="تقييم العاملة" class="form-select form-select-solid">
                                                    <option value=""></option>
                                                    <option data-kt-flag="flags/united-states.svg" value="1" @if ($data)
                                                        {{ $data->rating1 == '1' ? 'selected' : '' }}
                                                    @else
                                                    @endif>
                                                        نجمة
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="2" @if ($data)
                                                    {{ $data->rating1 == '2' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        نجمتين
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="3" @if ($data)
                                                    {{ $data->rating1 == '3' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        3 نجوم
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="4" @if ($data)
                                                    {{ $data->rating1 == '4' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        4 نجوم
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="5" @if ($data)
                                                    {{ $data->rating1 == '5' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        5 نجوم
                                                    </option>
                                                </select>
                                                @error('rating1')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Cleint 1-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-8"></div>
                                        <!--end::Separator-->

                                        <!--begin::Cleint 1-->
                                        <div class="row gx-10 mb-5">
                                            <span class="fs-2x fw-bold text-gray-800"> العميل الثاني </span>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> اسم العميل الثاني </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="client2" value="{{ $data->client1 ?? '' }}"/>
                                                </div>
                                                @error('client2')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> وظيفة العميل الثاني </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="job2" value="{{ $data->job1 ?? '' }}"/>
                                                </div>
                                                @error('job2')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> رسالة العميل الثاني </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="message2" value="{{ $data->message1 ?? '' }}"/>
                                                </div>
                                                @error('message2')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fw-bold fs-6 text-gray-700"> تقييم العميل الثاني </label>
                                                <select name="rating2" aria-label="Select a Timezone" data-control="select2" data-placeholder="تقييم العاملة" class="form-select form-select-solid">
                                                    <option value=""></option>
                                                    <option data-kt-flag="flags/united-states.svg" value="1" @if ($data)
                                                        {{ $data->rating2 == '1' ? 'selected' : '' }}
                                                    @else
                                                    @endif>
                                                        نجمة
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="2" @if ($data)
                                                    {{ $data->rating2 == '2' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        نجمتين
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="3" @if ($data)
                                                    {{ $data->rating2 == '3' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        3 نجوم
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="4" @if ($data)
                                                    {{ $data->rating2 == '4' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        4 نجوم
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="5" @if ($data)
                                                    {{ $data->rating2 == '5' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        5 نجوم
                                                    </option>
                                                </select>
                                                @error('rating2')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Cleint 1-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-8"></div>
                                        <!--end::Separator-->

                                        <!--begin::Cleint 1-->
                                        <div class="row gx-10 mb-5">
                                            <span class="fs-2x fw-bold text-gray-800"> العميل الثالث </span>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> اسم العميل الثالث </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="client3" value="{{ $data->client3 ?? '' }}"/>
                                                </div>
                                                @error('client3')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> وظيفة العميل الثالث </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="job3" value="{{ $data->job3 ?? '' }}"/>
                                                </div>
                                                @error('job3')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> رسالة العميل الثالث </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="message3" value="{{ $data->message3 ?? '' }}"/>
                                                </div>
                                                @error('message3')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label fw-bold fs-6 text-gray-700"> تقييم العميل الثالث </label>
                                                <select name="rating3" aria-label="Select a Timezone" data-control="select2" data-placeholder="تقييم العاملة" class="form-select form-select-solid">
                                                    <option value=""></option>
                                                    <option data-kt-flag="flags/united-states.svg" value="1" @if ($data)
                                                        {{ $data->rating3 == '1' ? 'selected' : '' }}
                                                    @else
                                                    @endif>
                                                        نجمة
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="2" @if ($data)
                                                    {{ $data->rating3 == '2' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        نجمتين
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="3" @if ($data)
                                                    {{ $data->rating3 == '3' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        3 نجوم
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="4" @if ($data)
                                                    {{ $data->rating3 == '4' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        4 نجوم
                                                    </option>
                                                    <option data-kt-flag="flags/united-states.svg" value="5" @if ($data)
                                                    {{ $data->rating3 == '5' ? 'selected' : '' }}
                                                @else
                                                @endif>
                                                        5 نجوم
                                                    </option>
                                                </select>
                                                @error('rating3')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Cleint 1-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-8"></div>
                                        <!--end::Separator-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-8"></div>
                                        <!--end::Separator-->
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
                                                <h2> صورة  </h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <!--begin::Image input placeholder-->
                                            <style>.review-input { background-image: url({{ asset($data->image ?? '') }}) !important; } [data-bs-theme="dark"]..review-input { background-image: url($data->image ?? '')!important; }</style>
                                            <!--end::Image input placeholder-->
                                            <div class="image-input image-input-empty image-input-outline .review-input-placeholder logo-input mb-3 review-input" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                    <i class="ki-outline ki-pencil fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" value="{{ $data->image ?? '' }}">
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
                                            <div class="text-muted fs-7">قم بتعيين اللوجو. يتم قبول ملفات الصور *.png و*.jpg و*.jpeg فقط</div>
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
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="mb-0">
                                    <div class="row mb-5">
                                        <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                                        <i class="ki-outline ki-triangle fs-3"></i> تحديث بيانات البانر </button>
                                    </div>
                                </div>
                                <!--end::Actions-->
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
