<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Workers;
use App\Models\Frontend\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $result['workers'] = Workers::orderBy('id', 'DESC')->get();
        $result['published_workers'] = Workers::where('status', '1')->get();
        $result['unpublished_workers'] = Workers::where('status', '0')->get();
        $result['orders'] = Order::get();
        return view('backend.index', $result);
    }
}
