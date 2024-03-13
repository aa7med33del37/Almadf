<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use App\Models\Backend\ReviewsBanner;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\ReviewsBannerRequest;


class ReviewsBannerController extends Controller
{
    public function index()
    {
        $data = ReviewsBanner::first();
        if ($data == NULL) {
            $data = '';
            return view('backend.Banners.reviewsbanner', compact('data'));
        }else {
            $data = ReviewsBanner::first();
            return view('backend.Banners.reviewsbanner', compact('data'));
        }
        return view('backend.Banners.reviewsbanner');
    }


    public function store(ReviewsBannerRequest $request, $id=NULL)
    {
        $reviewBanner = ReviewsBanner::where('id', $id)->first();
        $validatedData = $request->validated();
        if ($id == NULL) {
            $data = new ReviewsBanner();
            $data->title = $validatedData['title'];
            $data->subTitle = $validatedData['subTitle'] ?? '';

            $data->client1 = $validatedData['client1'] ?? '';
            $data->job1 = $validatedData['job1'] ?? '';
            $data->message1 = $validatedData['message1'] ?? '';
            $data->rating1 = $validatedData['rating1'];

            $data->client2 = $validatedData['client2'] ?? '';
            $data->job2 = $validatedData['job2'] ?? '';
            $data->message2 = $validatedData['message2'] ?? '';
            $data->rating2 = $validatedData['rating2'];

            $data->client3 = $validatedData['client3'] ?? '';
            $data->job3 = $validatedData['job3'] ?? '';
            $data->message3 = $validatedData['message3'] ?? '';
            $data->rating3 = $validatedData['rating3'] ?? '';

            $reviewsbannerpath = 'uploads/banners/reviewsbanner/';
            $i = 1;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($reviewsbannerpath, $fileName);
                $data->image = $reviewsbannerpath . $fileName;
            }

            $data->save();
        } else {
            $data = ReviewsBanner::findOrFail($id);
            $data->title = $validatedData['title'];
            $data->subTitle = $validatedData['subTitle'] ?? '';

            $data->client1 = $validatedData['client1'] ?? '';
            $data->job1 = $validatedData['job1'] ?? '';
            $data->message1 = $validatedData['message1'] ?? '';
            $data->rating1 = $validatedData['rating1'] ?? '';

            $data->client2 = $validatedData['client2'] ?? '';
            $data->job2 = $validatedData['job2'] ?? '';
            $data->message2 = $validatedData['message2'] ?? '';
            $data->rating2 = $validatedData['rating2'] ?? '';

            $data->client3 = $validatedData['client3'] ?? '';
            $data->job3 = $validatedData['job3'] ?? '';
            $data->message3 = $validatedData['message3'] ?? '';
            $data->rating3 = $validatedData['rating3'] ?? '';


            $reviewsbannerpath = 'uploads/banners/reviewsbanner/';
            $i = 1;
            if ($request->hasFile('image')) {
                if (File::exists($data->image)) {
                    File::delete($data->image);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $file->move($reviewsbannerpath, $fileName);
                $data->image = $reviewsbannerpath . $fileName;
            }
            $data->update();
        }
        alert()->success('تم بنجاح','تم تحديث بيانات بانر تقييمات العملاء بنجاح');
        return redirect()->route('banners.orderbanner.index');
    }
}
