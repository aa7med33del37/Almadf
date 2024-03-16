<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Order;

class ClientOrderController extends Controller
{
    public function index()
    {
        $result['orders'] = Order::get();
        return view('backend.orders.index', $result);
    }

    public function destroy($id)
    {
        $data = Order::where('id', $id)->first();
        $data->delete();
        alert()->success('تم بنجاح','تم حذف بيانات الطلب بنجاح');
        return redirect()->route('clients-orders.index');
    }
}
