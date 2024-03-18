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
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0"> تحديث </h1>
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
                        <a href="{{ route('funfact.index') }}" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold"> جميع العاملات </a>
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
                <form id="kt_invoice_form" action="{{ route('funfact.store', $data->id ?? '') }}" method="POST" enctype="multipart/form-data">
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
                                            <span class="fs-2x fw-bold text-gray-800"> Funfact </span>
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
                                            {{-- Years start --}}
                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> عدد السنوات </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="years" value="{{ $data->years ?? '' }}"/>
                                                </div>
                                                @error('years')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> وصف اسفل عدد السنوات </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="years_desc" value="{{ $data->years_desc ?? '' }}"/>
                                                </div>
                                                @error('years_desc')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- Years end --}}
                                            <div class="separator separator-dashed mb-8"></div>

                                            {{-- Clients start --}}
                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> عدد العملاء </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="clients" value="{{ $data->clients ?? '' }}"/>
                                                </div>
                                                @error('clients')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> وصف اسفل عدد العملاء </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="clients_desc" value="{{ $data->clients_desc ?? '' }}"/>
                                                </div>
                                                @error('clients_desc')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- Clients end --}}

                                            {{-- Projects start --}}
                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> عدد المشاريع </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="projects" value="{{ $data->projects ?? '' }}"/>
                                                </div>
                                                @error('projects')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> وصف اسفل عدد المشاريع </label>
                                                <div>
                                                    <input type="text" class="form-control form-control-solid" placeholder="" required name="projects_desc" value="{{ $data->projects_desc ?? '' }}"/>
                                                </div>
                                                @error('projects_desc')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- Projects end --}}
                                            <div class="mb-0 mt-10">
                                                <div class="row mb-5">
                                                    <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                                                    <i class="ki-outline ki-triangle fs-3"></i> تحديث بيانات البانر </button>
                                                </div>
                                            </div>

                                        </div>
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
