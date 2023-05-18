<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use DB;
class OrderController extends Controller
{
    public function getOrder() {
        $data['orderlist'] = DB::table('v_order')->orderBy('order_id','desc')->get();
        return view('backend.order',$data);
    }
    public function getUpdateOrder($id) {
        $data['order'] = Order::find($id);
        return view('backend.editorder', $data);
    }
    public function postUpdateOrder(Request $request, $id) {
        $order = new Order;
        $arr['order_status'] = $request->status;
        $order::where('order_id',$id)->update($arr);
        return redirect('admin/order');
    }
}
