<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\MainBanner;
use App\Http\Requests\Backend\MainBannerRequest;
use Illuminate\Support\Facades\File;

class MainBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MainBanner::first();
        if ($data == NULL) {
            return view('backend.Banners.mainbanner');
        }else {
            $data = MainBanner::first();
            return view('backend.Banners.mainbanner', compact('data'));
        }
        return view('backend.Banners.mainbanner');
    }

    public function store(MainBannerRequest $request, $id=NULL)
    {
        $validatedData = $request->validated();

            if ($id == NULL) {
                $data = new MainBanner();
                $data->title = $validatedData['title'];
                $data->subTitle = $validatedData['subTitle'] ?? '';
                $data->description = $validatedData['description'] ?? '';
                $data->button_text = $validatedData['button_text'];
                $data->button_link = $validatedData['button_link'];

                $mainbannerpath = 'uploads/banners/mainbanner/';
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

                if ($request->hasFile('image3')) {
                    $file = $request->file('image3');
                    $ext = $file->getClientOriginalExtension();
                    $fileName = time() . $i++ . '.' . $ext;
                    $file->move($mainbannerpath, $fileName);
                    $data->image3 = $mainbannerpath . $fileName;
                }

                if ($request->hasFile('image4')) {
                    $file = $request->file('image4');
                    $ext = $file->getClientOriginalExtension();
                    $fileName = time() . $i++ . '.' . $ext;
                    $file->move($mainbannerpath, $fileName);
                    $data->image4 = $mainbannerpath . $fileName;
                }

                $data->save();
            } else {
                $data = MainBanner::findOrFail($id);
                $data->title = $validatedData['title'];
                $data->subTitle = $validatedData['subTitle'] ?? '';
                $data->description = $validatedData['description'] ?? '';
                $data->button_text = $validatedData['button_text'];
                $data->button_link = $validatedData['button_link'];

                $mainbannerpath = 'uploads/banners/mainbanner/';
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

                if ($request->hasFile('image3')) {
                    if (File::exists($data->image3)) {
                        File::delete($data->image3);
                    }
                    $file = $request->file('image3');
                    $ext = $file->getClientOriginalExtension();
                    $fileName = time() . $i++ . '.' . $ext;
                    $file->move($mainbannerpath, $fileName);
                    $data->image3 = $mainbannerpath . $fileName;
                }

                if ($request->hasFile('image4')) {
                    if (File::exists($data->image4)) {
                        File::delete($data->image4);
                    }
                    $file = $request->file('image4');
                    $ext = $file->getClientOriginalExtension();
                    $fileName = time() . $i++ . '.' . $ext;
                    $file->move($mainbannerpath, $fileName);
                    $data->image4 = $mainbannerpath . $fileName;
                }

                $data->update();
            }
            alert()->success('تم بنجاح','تم تحديث بيانات البانر الرئيسي بنجاح');
            return redirect()->route('banners.mainbanner.index');
    }
}
