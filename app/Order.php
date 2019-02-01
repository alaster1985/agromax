<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'status_id',
        'stage_id',
        'delivery_id',
        'manager',
        'tons',
        'price',
        'product_name',
        'port',
        'first_name',
        'last_name',
        'email',
        'linkedin',
        'phone',
        'company',
        'exclusive',
        'isdeleted',
    ];

    public static function setOrderInfoForFirstStage($request)
    {
        if (isset($request->query()['offer'])) {
            $offer = $request->query()['offer'];
            $lotInfo = [
                'product_id' => Lot::find($offer)->product->id,
                'product_name' => Lot::find($offer)->product->name,
                'delivery_id' => Lot::find($offer)->delivery->id,
                'tons' => Lot::find($offer)->tons,
                'price' => Lot::find($offer)->price,
                'port' => Lot::find($offer)->port,
                'exclusive' => 0,
            ];

        } else {
            $lotInfo = [
                'product_id' => $request->query()['product'],
                'product_name' => $request->query()['product'] == 1
                    ? $request->query()['otherName']
                    : Product::find($request->query()['product'])->name,
                'delivery_id' => $request->query()['delivery'],
                'tons' => $request->query()['amount'],
                'price' => $request->query()['optional'] . '-' . $request->query()['max'],
//                'port' => $request->query()['port'],
                'port' => 'some random port',
                'exclusive' => 1,
            ];
        }
        return $lotInfo;
    }

    public static function getAllOrders()
    {
        $allOrders = Order::all()
            ->where('isdeleted', '=', 0)
            ->sortByDesc('created_at');
        return $allOrders;
    }

    public static function getOrderById($id)
    {
        $orderById = Order::find($id);
        return $orderById;
    }

    public static function updateOrder($request)
    {
        $OrderToUpdate = Order::find($request->order_id);
        $OrderToUpdate->status_id = $request->status_id;
        $OrderToUpdate->save();
    }

    public static function deleteOrder($id)
    {
        $OrderToDelete = Order::find($id);
        $OrderToDelete->isdeleted = 1;
        $OrderToDelete->save();
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function stage()
    {
        return $this->belongsTo('App\Stage');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
