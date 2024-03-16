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
                            <span class="card-label fw-bold text-gray-900"> التسويق </span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3 mb-20" id="kt_table_widget_5_table">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="text-start pe-3 min-w-100px"> اعلان </th>
                                    <th class="text-start pe-3 min-w-100px">الحالة</th>
                                    {{-- <th class="text-start pe-0 min-w-75px">تحرير</th> --}}
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            @if ($notification)
                            <h3 class="card-title align-items-start flex-column">
                                <a href="{{ route('notification.index') }}" class="card-label fw-bold text-gray-900 btn btn-secondary"> تحديث شريط الاعلان</a>
                            </h3>
                            <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <td>
                                        {{ $notification->notification_bar ?? '' }}
                                    </td>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::Action-->
                                                <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input data-id="{{$notification->id}}" class="toggle-class form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" {{ $notification->status == '1' ? 'checked' : '' }} data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
                                                    <span class="badge py-3 px-4 fs-7 badge badge-light-{{ $notification->status == '1' ? 'success' : 'danger' }} d-none"> {{ $notification->status == '1' ? 'منشور' : 'مخفي' }} </span>

                                                </div>
                                                <!--end::Action-->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @else
                            <h3 class="card-title align-items-start flex-column">
                                <a href="{{ route('notification.index') }}" class="card-label fw-bold text-gray-900 btn btn-secondary"> اضافة اعلان جديد </a>
                            </h3>
                            @endif
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->

                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="text-start pe-3 min-w-100px"> العنوان </th>
                                    <th class="text-start pe-3 min-w-100px"> النص </th>
                                    <th class="text-start pe-3 min-w-100px">الحالة</th>
                                    {{-- <th class="text-start pe-0 min-w-75px">تحرير</th> --}}
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            @if ($popup)
                            <h3 class="card-title align-items-start flex-column">
                                <a href="{{ route('popup.index') }}" class="card-label fw-bold text-gray-900 btn btn-secondary">  تحديث Popup</a>
                            </h3>
                            <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <td>
                                        {{ $popup->popup_title ?? '' }}
                                    </td>
                                    <td>
                                        {{ $popup->popup_text ?? '' }}
                                    </td>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::Action-->
                                                <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input data-id="{{$popup->id}}" class="popup-class  form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" {{ $popup->status == '1' ? 'checked' : '' }} data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
                                                    <span class="badge py-3 px-4 fs-7 badge badge-light-{{ $popup->status == '1' ? 'success' : 'danger' }} d-none"> {{ $popup->status == '1' ? 'منشور' : 'مخفي' }} </span>

                                                </div>
                                                <!--end::Action-->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @else
                            <h3 class="card-title align-items-start flex-column">
                                <a href="{{ route('popup.index') }}" class="card-label fw-bold text-gray-900 btn btn-secondary"> اضافة Popup </a>
                            </h3>
                            @endif
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
                var notification_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/marketing/notification/change-status',
                    data: {'status': status, 'notification_id': notification_id},
                    success: function(data){
                    console.log(data.success)
                    }
                });
            })
        })

        $(function() {
            $('.popup-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var popup_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/marketing/popup/change-status',
                    data: {'status': status, 'popup_id': popup_id},
                    success: function(data){
                    console.log(data.success)
                    }
                });
            })
        })
</script>
 @endsection
