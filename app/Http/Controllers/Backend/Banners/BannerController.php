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
}
