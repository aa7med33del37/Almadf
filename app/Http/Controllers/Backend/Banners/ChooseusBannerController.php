<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use App\Models\Backend\ChooseusBanner;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\ChooseBannerRequest;

class ChooseusBannerController extends Controller
{
    public function index()
    {
        $data = ChooseusBanner::first();
        if ($data == NULL) {
            return view('backend.Banners.chooseusbanner');
        }else {
            $data = ChooseusBanner::first();
            return view('backend.Banners.chooseusbanner', compact('data'));
        }
        return view('backend.Banners.chooseusbanner');
    }


    public function store(ChooseBannerRequest $request, $id=NULL)
    {
        $validatedData = $request->validated();
        if ($id == NULL) {
            $data = new ChooseusBanner();
            $data->title = $validatedData['title'];
            $data->subTitle = $validatedData['subTitle'] ?? '';
            $data->goals = $validatedData['goals'] ?? '';
            $data->message = $validatedData['message'] ?? '';
            $data->vision = $validatedData['vision'];

            $chooseusbannerpath = 'uploads/banners/chooseusbanner/';
            $i = 1;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($chooseusbannerpath, $fileName);
                $data->image = $chooseusbannerpath . $fileName;
            }

            $data->save();
        } else {
            $data = ChooseusBanner::findOrFail($id);
            $data->title = $validatedData['title'];
            $data->subTitle = $validatedData['subTitle'] ?? '';
            $data->message = $validatedData['message'] ?? '';
            $data->goals = $validatedData['goals'] ?? '';
            $data->vision = $validatedData['vision'];

            $chooseusbannerpath = 'uploads/banners/chooseusbanner/';
            $i = 1;
            if ($request->hasFile('image')) {
                if (File::exists($data->image1)) {
                    File::delete($data->image1);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($chooseusbannerpath, $fileName);
                $data->image = $chooseusbannerpath . $fileName;
            }
            $data->update();
        }
        alert()->success('تم بنجاح','تم تحديث بيانات بانر لماذا تختارنا بنجاح');
        return redirect()->route('banners.chooseusbanner.index');
    }
}
