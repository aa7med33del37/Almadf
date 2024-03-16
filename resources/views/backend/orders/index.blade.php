@extends('backend.layouts.main')
@section('styles')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Table Widget 5-->
                <div class="card card-flush mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900"> جميع الطلبات </span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Status-->
                                <div class="d-flex align-items-center fw-bold">
                                    <div class="text-muted fs-7 me-2"> الحالة </div>
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                        <option></option>
                                        <option value="Show All" selected="selected"> الجميع </option>
                                        <option value="منشور"> منشور </option>
                                        <option value="مخفي"> غير منشور </option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="text-end pe-3 min-w-50px" style=""> رقم الطلب </th>
                                    <th class="text-end pe-3 min-w-100px"> الاسم </th>
                                    <th class="text-end pe-3 min-w-100px"> رقم الموبايل </th>
                                    <th class="text-end pe-3 min-w-150px"> الايميل </th>
                                    <th class="text-end pe-3 min-w-100px"> الخدمة </th>
                                    <th class="text-end pe-3 min-w-100px"> الرسالة </th>
                                    <th class="text-end pe-0 min-w-75px">تحرير</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @forelse ($orders as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td class="text-end"> {{ $item->name }} </td>
                                    <td class="text-end"> {{ $item->phone }} </td>
                                    <td class="text-end"> {{ $item->email }} </td>
                                    <td class="text-end"> {{ $item->service }} </td>
                                    <td class="text-end"> {{ $item->message }} </td>
                                    {{-- <td class="text-end" data-order="58">
                                        <span class="text-gray-900 fw-bold">  </span>
                                    </td> --}}
                                    <td class="text-end">
                                        <form action="{{ route('clients-orders.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="menu-link px-3 btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <h5> لا يوجد اي عاملة </h5>
                                @endforelse
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 5-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
