<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\MainBanner;
use App\Models\Backend\AboutBanner;
use App\Models\Backend\ChooseusBanner;
use App\Models\Backend\OrderBanner;
use App\Models\Backend\ReviewsBanner;
use App\Models\Backend\partnersBanner;
use App\Models\Backend\FunFact;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['mainBanner'] = MainBanner::first();
        $result['aboutBanner'] = AboutBanner::first();
        $result['chooseusBanner'] = ChooseusBanner::first();
        $result['orderBanner'] = OrderBanner::first();
        $result['reviewsBanner'] = ReviewsBanner::first();
        $result['partners'] = partnersBanner::get();
        $result['funfact'] = FunFact::first();
        return view('backend.Banners.index', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerController $bannerController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerController $bannerController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BannerController $bannerController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerController $bannerController)
    {
        //
    }
}
