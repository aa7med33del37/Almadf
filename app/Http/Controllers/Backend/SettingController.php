<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\setting;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\SettingRequest;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        if ($setting == NULL) {
            return view('backend.settings.index');
        }else {
            $setting = Setting::first();
            return view('backend.settings.index', compact('setting'));
        }
        return view('backend.settings.index');
    }

    public function store(SettingRequest $request, $id=NULL)
    {
        $validatedData = $request->validated();

        if ($id == NULL) {
            $setting = new Setting();
            $setting->website_name = $validatedData['website_name'] ?? '';
            $setting->about = $validatedData['about'] ?? '';
            $setting->phone = $validatedData['phone'] ?? '';
            $setting->whatsapp = $validatedData['whatsapp'] ?? '';
            $setting->email = $validatedData['email'] ?? '';
            $setting->address = $validatedData['address'] ?? '';
            $setting->facebook = $validatedData['facebook'] ?? '';
            $setting->twitter = $validatedData['twitter'] ?? '';
            $setting->instagram = $validatedData['instagram'] ?? '';
            $setting->youtube = $validatedData['youtube'] ?? '';
            $setting->linkedin = $validatedData['linkedin'] ?? '';

            $path = 'uploads/setting/logo/';
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move($path, $fileName);
                $setting->logo = $path . $fileName;
            }

            $favicon_path = 'uploads/setting/favicon/';
            if ($request->hasFile('favicon')) {
                $file = $request->file('favicon');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move($favicon_path, $fileName);
                $setting->favicon = $favicon_path . $fileName;
            }

            $setting->save();
        } else {
            $setting = Setting::findOrFail($id);
            $setting->website_name = $validatedData['website_name'] ?? '';
            $setting->about = $validatedData['about'] ?? '';
            $setting->phone = $validatedData['phone'] ?? '';
            $setting->whatsapp = $validatedData['whatsapp'] ?? '';
            $setting->email = $validatedData['email'] ?? '';
            $setting->address = $validatedData['address'] ?? '';
            $setting->facebook = $validatedData['facebook'] ?? '';
            $setting->x = $validatedData['x'] ?? '';
            $setting->instagram = $validatedData['instagram'] ?? '';
            $setting->youtube = $validatedData['youtube'] ?? '';
            $setting->linkedin = $validatedData['linkedin'] ?? '';

            $path = 'uploads/setting/logo/';
            if ($request->hasFile('logo')) {
                if (File::exists($setting->logo)) {
                    File::delete($setting->logo);
                }
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move($path, $fileName);
                $setting->logo = $path . $fileName;
            }

            $favicon_path = 'uploads/setting/favicon/';
            if ($request->hasFile('favicon')) {
                if (File::exists($setting->favicon)) {
                    File::delete($setting->favicon);
                }
                $file = $request->file('favicon');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move($favicon_path, $fileName);
                $setting->favicon = $favicon_path . $fileName;
            }
            $setting->update();
        }
        alert()->success('تم بنجاح','تم تحديث بيانات الموقع بنجاح');
        return redirect()->route('settings.index');
    }
}
