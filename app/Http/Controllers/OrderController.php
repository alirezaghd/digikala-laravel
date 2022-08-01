<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function get_all()
    {
        $orders=Order::all();
        return view("admin.orderList",[
            "orders"=>$orders
        ]);
    }

    function delete($id){
        $order = Order::find($id);

        if (!$order)
        {
            $message = "پیدا نشد";
            $message_type = "danger";
        }
        else{
            $order->delete();
            $message = "با موفقیت حذف شد";
            $message_type = "success";

        }

        return redirect("/admin/orderList")->with([
            "message" => $message,
            "message_type" => $message_type

        ]);

    }
}
