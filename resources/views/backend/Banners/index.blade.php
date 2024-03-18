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
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0"> البانرات </h1>
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
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    {{-- Main Banner Start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('banners.mainbanner.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل البانر الرئيسي </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($mainBanner->image1 ?? '') }})"></div>
                                        <div class="symbol-label" style="background-image: url({{ asset($mainBanner->image2 ?? '') }})"></div>

                                    </div>
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($mainBanner->image3 ?? '') }})"></div>
                                        <div class="symbol-label" style="background-image: url({{ asset($mainBanner->image4 ?? '') }})"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <span href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $mainBanner->title ?? '' }}</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $mainBanner->subTitle ?? '' }}</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $mainBanner->description ?? '' }}</span>
                                        </div>
                                        <span class="badge badge-light-success fs-8 fw-bold my-2">{{ $mainBanner->button_text ?? '' }}</span>
                                        <span class="badge fs-8 fw-bold my-2" style="background: {{ $mainBanner->background ?? '' }}"> لون الخلفية </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- Main Banner End --}}

                    {{-- Partners Start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('partners.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل لوجو الشركاء </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    @forelse ($partners as $partner)
                                        <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <div class="symbol-label mb-5 mt-5" style="background-image: url({{ asset($partner->image ?? '') }})"></div>
                                            <form action="{{ route('partners.delete', $partner->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary">حذف الصورة</button>
                                            </form>
                                        </div>
                                    @empty

                                    @endforelse
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- Partners End --}}

                    {{-- About us Banner start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('banners.aboutbanner.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل بانر من نحن </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($aboutBanner->image1 ?? '') }})"></div>
                                    </div>
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($aboutBanner->image2 ?? '') }})"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $aboutBanner->title ?? '' }}</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $aboutBanner->subTitle ?? '' }}</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $aboutBanner->description ?? '' }}</span>
                                        </div>
                                        <span class="badge badge-light-success fs-8 fw-bold my-2">{{ $aboutBanner->button_text ?? '' }}</span>
                                        <span class="badge fs-8 fw-bold my-2" style="background: {{ $aboutBanner->background ?? '' }}"> لون الخلفية </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- About us Banner end --}}
                    {{-- Choose us Banner start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('banners.chooseusbanner.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل بانر "لماذا تختارنا"  </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($chooseusBanner->image ?? '') }})"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $chooseusBanner->title ?? '' }}</span>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 text-hover-primary fs-6">{{ $chooseusBanner->message ?? '' }}</span>
                                            <br>
                                            <span class="text-gray-800 text-hover-primary fs-6">{{ $chooseusBanner->goals ?? '' }}</span>
                                            <br>
                                            <span class="text-gray-800 text-hover-primary fs-6">{{ $chooseusBanner->vision ?? '' }}</span>
                                        </div>
                                        <span class="badge fs-8 fw-bold my-2" style="background: {{ $chooseusBanner->background ?? '' }}"> لون الخلفية </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- Choose us Banner end --}}

                    {{-- order Banner start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('banners.orderbanner.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل بانر طلب عرض </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($orderBanner->image ?? '') }})"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $orderBanner->title ?? '' }}</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $orderBanner->youtube ?? '' }}</span>
                                        </div>
                                        <span class="badge fs-8 fw-bold my-2" style="background: {{ $orderBanner->background ?? '' }}"> لون الخلفية </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- order Banner end --}}

                    {{-- FunFact start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('funfact.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل Funfact </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $funfact->years ?? '' }} سنوات</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $funfact->years_desc ?? '' }}</span>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $funfact->clients ?? '' }} موظف</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $funfact->clients_desc ?? '' }}</span>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $funfact->projects ?? '' }} مشروع</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $funfact->projects_desc ?? '' }}</span>
                                        </div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- FunFact  end --}}

                    {{-- Reviews Banner start --}}
                    <div class="col-12">
                        <!--begin::List Widget 7-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <a href="{{ route('banners.reviewsbanner.index') }}" class="fw-bold text-gray-900 btn btn-secondary"> تعديل بانر تقييمات العملاء  </a>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url({{ asset($reviewsBanner->image ?? '') }})"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $reviewsBanner->title ?? '' }}</span>
                                            <span class="text-muted fw-semibold d-block pt-1">{{ $reviewsBanner->subTitle ?? '' }}</span>
                                        </div>
                                        <span class="badge fs-8 fw-bold my-2" style="background: {{ $reviewsBanner ->background ?? '' }}"> لون الخلفية </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 7-->
                    </div>
                    {{-- Reviews Banner end --}}

                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
@endsection
