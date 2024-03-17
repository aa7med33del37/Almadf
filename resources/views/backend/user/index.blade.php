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
                            <span class="card-label fw-bold text-gray-900"> جميع العاملات </span>
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
                                <!--end::Status-->
                                <!--begin::Search-->
                                <a href="{{ route('users.create') }}" class="btn btn-light btn-sm"> اضافة مستخدم جديدة </a>
                                <!--end::Search-->
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
                                    <th class="min-w-50px" style="text-align: start"> رقم المستخدام </th>
                                    <th class="text-end pe-3 min-w-100px"> اسم المستخدم </th>
                                    <th class="text-end pe-3 min-w-100px"> الايميل </th>
                                    <th class="text-end pe-3 min-w-100px">الحالة</th>
                                    @if (Auth::user()->id == 1)
                                    <th class="text-end pe-0 min-w-75px">تحرير</th>
                                    @endif
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @forelse ($users as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td class="text-end"> {{ $item->name }} </td>
                                    <td class="text-end"> {{ $item->email }} </td>
                                    <td class="text-end">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::Action-->
                                                <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input data-id="{{$item->id}}" class="toggle-class form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" {{ $item->status == '1' ? 'checked' : '' }} data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
                                                    <span class="badge py-3 px-4 fs-7 badge badge-light-{{ $item->status == '1' ? 'success' : 'danger' }} d-none"> {{ $item->status == '1' ? 'منشور' : 'مخفي' }} </span>

                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </td>
                                    @if (Auth::user()->id == 1)
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">تحرير
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('users.edit', $item->id) }}" class="menu-link px-3"> تعديل </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="menu-link px-3">حذف</button>
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    @endif

                                </tr>
                                @empty
                                    <h5> لا يوجد اي مستخدم </h5>
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
@endsection
 @section('scripts')
     <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/change-user-status',
                    data: {'status': status, 'user_id': user_id},
                    success: function(data){
                    console.log(data.success)
                    }
                });
            })
        })
    </script>
 @endsection
