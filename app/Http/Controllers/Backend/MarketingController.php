<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Backend\Marketing;
use App\Models\Backend\Notification;
use App\Models\Backend\Popup;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['notification'] = Notification::first();
        $result['popup'] = Popup::first();
        return view('backend.Marketing.index', $result);
    }

    public function notification()
    {
        $result['notification'] = Notification::first();
        return view('backend.Marketing.notification', $result);
    }

    public function notification_post(Request $request, $id=NULL)
    {
        $request->validate([
            'notification_bar'  => ['required', 'string'],
        ]);

        if ($id == NULL) {
            $data = new Notification();
            $data->notification_bar    = $request->notification_bar;
            $data->status  = $request->status ?? '';
            $data->save();
            alert()->success('تم بنجاح','تم اضافة الاعلان بنجاح');
        } else {
            $data = Notification::findOrFail($id);
            $data->notification_bar = $request->notification_bar;
            $data->status  = $request->status ?? '';
            $data->update();
            alert()->success('تم بنجاح','تم تحديث الاعلان بنجاح');
        }
        return redirect()->route('marketing');
    }

    public function changeNotificationStatus(Request $request)
    {
        $notification = Notification::find($request->notification_id);
        $notification->status = $request->status;
        $notification->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function popup()
    {
        $result['popup'] = Popup::first();
        return view('backend.Marketing.popup', $result);
    }

    public function popup_post(Request $request, $id=NULL)
    {
        $request->validate([
            'title'  => ['required', 'string'],
            'text'  => ['required', 'string'],
        ]);

        if ($id == NULL) {
            $data = new Popup();
            $data->popup_title    = $request->title;
            $data->popup_text    = $request->text;
            $data->status  = $request->status ?? '';
            $data->save();
            alert()->success('تم بنجاح','تم اضافة Popup');
        } else {
            $data = Popup::findOrFail($id);
            $data->popup_title    = $request->title;
            $data->popup_text    = $request->text;
            $data->status  = $request->status ?? '';
            $data->update();
            alert()->success('تم بنجاح','تم تحديث Popup');
        }
        return redirect()->route('marketing');
    }

    public function changePopupStatus(Request $request)
    {
        $popup = Popup::find($request->popup_id);
        $popup->status = $request->status;
        $popup->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
