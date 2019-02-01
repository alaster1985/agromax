<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function createOrder(OrderStoreRequest $request)
    {
        $firstStageInfo = Order::setOrderInfoForFirstStage($request);

        $clientInfo = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
            'phone' => $request->phone,
            'company' => $request->company,
        ];

        $allOrderInfo = array_merge($firstStageInfo, $clientInfo);

        $order = new Order($allOrderInfo);
        $order->save();
        return redirect()->back()->with('message', 'DONE!');
    }

    public function viewOrders()
    {
        $orders = Order::getAllOrders();
        return view('admin/viewOrders', ['orders' => $orders]);
    }

    public function editOrders($id)
    {
        $orderForEdit = Order::getOrderById($id);
        return view('admin/editOrders', ['order' => $orderForEdit]);
    }

    public function updateOrder(Request $request)
    {
        Order::updateOrder($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function deleteOrder($id)
    {
        Order::deleteOrder($id);
        return redirect()->back()->with('message', 'DONE!');
    }
}
