<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;

use App\Models\Backend\OrderBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Backend\OrderBannerRequest;

class OrderBannerController extends Controller
{
    public function index()
    {
        $data = OrderBanner::first();
        if ($data == NULL) {
            return view('backend.Banners.orderbanner');
        }else {
            $data = OrderBanner::first();
            return view('backend.Banners.orderbanner', compact('data'));
        }
        return view('backend.Banners.orderbanner');
    }


    public function store(OrderBannerRequest $request, $id=NULL)
    {
        $orderBanner = OrderBanner::where('id', $id)->first();
        $validatedData = $request->validated();
        if ($id == NULL) {
            $data = new OrderBanner();
            $data->title = $validatedData['title'];
            $data->youtube = $validatedData['goals'] ?? '';

            $orderbannerpath = 'uploads/banners/orderbanner/';
            $i = 1;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($orderbannerpath, $fileName);
                $data->image = $orderbannerpath . $fileName;
            }

            $data->save();
        } else {
            $data = OrderBanner::findOrFail($id);
            $data->title = $validatedData['title'];
            $data->youtube = $validatedData['youtube'] ?? '';

            if($request->image) {
                $orderbannerpath = 'uploads/banners/orderbanner/';
                $i = 1;
                if ($request->hasFile('image')) {
                    if (File::exists($data->image)) {
                        File::delete($data->image);
                    }
                    $file = $request->file('image');
                    $ext = $file->getClientOriginalExtension();
                    $fileName = time() . $i++ . '.' . $ext;
                    $file->move($orderbannerpath, $fileName);
                    $data->image = $orderbannerpath . $fileName;
                }
            } else {
                $data->image = $orderBanner->image;
            }

            $data->update();
        }
        alert()->success('تم بنجاح','تم تحديث بيانات بانر طلب عرض بنجاح');
        return redirect()->route('banners.orderbanner.index');
    }
}
