<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\MainBanner;
use App\Models\Backend\AboutBanner;
use App\Models\Backend\ChooseusBanner;
use App\Models\Backend\OrderBanner;
use App\Models\Backend\ReviewsBanner;
use App\Models\Backend\partnersBanner;
use App\Models\Backend\Workers;
use App\Models\Backend\Country;
use App\Models\Backend\Team;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $result['mainBanner'] = MainBanner::first();
        $result['aboutBanner'] = AboutBanner::first();
        $result['chooseusBanner'] = ChooseusBanner::first();
        $result['orderBanner'] = OrderBanner::first();
        $result['reviewsBanner'] = ReviewsBanner::first();
        $result['partners'] = partnersBanner::get();
        $result['workers'] = Workers::get();
        $result['team'] = Team::get();
        return view('frontend.index', $result);
    }

    public function staff()
    {
        $result['workers'] = Workers::get();
        $result['reviewsBanner'] = ReviewsBanner::first();
        $result['countries'] = Country::get();
        return view('frontend.staff.staff', $result);
    }

    public function staff_details($id)
    {
        $result['worker'] = Workers::where('id', $id)->first();
        return view('frontend.staff.staff_details', $result);
    }

    public function about()
    {
        $result['mainBanner'] = MainBanner::first();
        $result['aboutBanner'] = AboutBanner::first();
        $result['chooseusBanner'] = ChooseusBanner::first();
        $result['orderBanner'] = OrderBanner::first();
        $result['reviewsBanner'] = ReviewsBanner::first();
        $result['partners'] = partnersBanner::get();
        return view('frontend.about', $result);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }
}
