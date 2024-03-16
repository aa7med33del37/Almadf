<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'       => ['required', 'string'],
            'phone'      => ['required', 'numeric'],
            'email'      => ['required', 'email'],
            'service'    => ['required', 'string'],
            'message'    => ['required', 'string'],
        ]);

        $data = new Order();
        $data->name     = $request->name;
        $data->phone    = $request->phone;
        $data->email    = $request->email;
        $data->service  = $request->service;
        $data->message  = $request->message;
        $data->save();
        alert()->success('تم بنجاح','تم اضافة الطلب بنجاح');
        return redirect()->back();
    }
}
