<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Order;

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
}
