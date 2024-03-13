<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ChooseusBanner;
use App\Models\Backend\OrderBanner;

class ServicesController extends Controller
{
    public function services()
    {
        $result['chooseusBanner'] = ChooseusBanner::first();
        $result['orderBanner'] = OrderBanner::first();
        return view('frontend.services.index', $result);
    }
}
