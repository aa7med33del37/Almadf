<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use App\Models\Backend\partnersBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnersBannerController extends Controller
{
    public function index()
    {
        $result['partners'] = partnersBanner::get();
        return view('backend.Banners.partnersbanner', $result);
    }


    public function store(Request $request, $id=NULL)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageUrls = [];
        $i = 1;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = 'uploads/banners/partners/';
                $ext = $image->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;

                $image->move($path, $fileName);

                $data = new partnersBanner();
                $data->image = $path . $fileName;
                $data->save();
                $imageUrls[] = $image;
            }
        }
        alert()->success('تم بنجاح','تم تحديث لوجو الشركاء بنجاح');
        return redirect()->back();
    }

    public function delete($id)
    {
        $partner = partnersBanner::where('id', $id)->first();
        $image_path = $partner->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $partner->delete();
        alert()->success('تم بنجاح','تم حذف لوجو الشريك بنجاح');
        return redirect()->back();
    }
}
