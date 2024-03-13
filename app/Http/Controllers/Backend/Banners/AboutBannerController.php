<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AboutBanner;
use App\Http\Requests\Backend\AboutBannerRequest;
use Illuminate\Support\Facades\File;


class AboutBannerController extends Controller
{
    public function index()
    {
        $data = AboutBanner::first();
        if ($data == NULL) {
            return view('backend.Banners.aboutbanner');
        }else {
            $data = AboutBanner::first();
            return view('backend.Banners.aboutbanner', compact('data'));
        }
        return view('backend.Banners.aboutbanner');
    }


    public function store(AboutBannerRequest $request, $id=NULL)
    {
        $validatedData = $request->validated();
        if ($id == NULL) {
            $data = new AboutBanner();
            $data->title = $validatedData['title'];
            $data->subTitle = $validatedData['subTitle'] ?? '';
            $data->description = $validatedData['description'] ?? '';
            $data->button_text = $validatedData['button_text'];
            $data->button_link = $validatedData['button_link'];
            $data->text1 = $validatedData['text1'] ?? '';
            $data->text2 = $validatedData['text2'] ?? '';
            $data->text3 = $validatedData['text3'] ?? '';
            $data->youtube = $validatedData['youtube'] ?? '';

            $mainbannerpath = 'uploads/banners/aboutbanner/';
            $i = 1;
            if ($request->hasFile('image1')) {
                $file = $request->file('image1');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($mainbannerpath, $fileName);
                $data->image1 = $mainbannerpath . $fileName;
            }

            if ($request->hasFile('image2')) {
                $file = $request->file('image2');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($mainbannerpath, $fileName);
                $data->image2 = $mainbannerpath . $fileName;
            }

            $data->save();
        } else {
            $data = AboutBanner::findOrFail($id);
            $data->title = $validatedData['title'];
            $data->subTitle = $validatedData['subTitle'] ?? '';
            $data->description = $validatedData['description'] ?? '';
            $data->button_text = $validatedData['button_text'];
            $data->button_link = $validatedData['button_link'];
            $data->text1 = $validatedData['text1'] ?? '';
            $data->text2 = $validatedData['text2'] ?? '';
            $data->text3 = $validatedData['text3'] ?? '';
            $data->youtube = $validatedData['youtube'] ?? '';

            $mainbannerpath = 'uploads/banners/aboutbanner/';
            $i = 1;
            if ($request->hasFile('image1')) {
                if (File::exists($data->image1)) {
                    File::delete($data->image1);
                }
                $file = $request->file('image1');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($mainbannerpath, $fileName);
                $data->image1 = $mainbannerpath . $fileName;
            }

            if ($request->hasFile('image2')) {
                if (File::exists($data->image2)) {
                    File::delete($data->image2);
                }
                $file = $request->file('image2');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($mainbannerpath, $fileName);
                $data->image2 = $mainbannerpath . $fileName;
            }

            $data->update();
        }
        alert()->success('تم بنجاح','تم تحديث بيانات بانر من نحن بنجاح');
        return redirect()->route('banners.aboutbanner.index');
    }
}
