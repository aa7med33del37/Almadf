<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['pages'] = Pages::get();
        $result['published'] = Pages::where('status', '1')->get();
        $result['unpublished'] = Pages::where('status', '0')->get();
        return view('backend.pages.index', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['string', 'required'],
            'article' => ['string', 'required'],
            'image' => ['image', 'mimes:png,jpg,jpeg'],
        ]);

        $data = new Pages();
        $data->title = $request->title;
        $data->article = $request->article;
        $data->status = $request->status ?? '0';

        $path = 'uploads/blogs/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move($path, $fileName);
            $data->image = $path . $fileName;
        }

        $data->save();
        alert()->success('تم بنجاح','تم اضافة الصفحة بنجاح');
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pages $pages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pages $pages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pages $pages)
    {
        //
    }
}
