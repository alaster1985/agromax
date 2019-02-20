<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'status_id',
        'stage_id',
        'delivery_id',
        'condition_id',
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
        'session_id',
        'company',
        'exclusive',
        'isdeleted',
    ];

    public static function setOrderInfoForFirstStage($request)
    {
        $emailMarker = 0;
        if (isset($request->query()['offer'])) {
            $offer = $request->query()['offer'];
            $emailMarker = Lot::find($request->query()['offer'])->turkish;
            $lotInfo = [
                'product_id' => Lot::find($offer)->product->id,
                'product_name' => Lot::find($offer)->product->name,
                'delivery_id' => Lot::find($offer)->delivery->id,
                'tons' => Lot::find($offer)->tons,
                'price' => Lot::find($offer)->price,
                'port' => Lot::find($offer)->port,
                'condition_id' => 1,
                'exclusive' => 0,
            ];

        } else {
            $lotInfo = [
                'product_id' => $request->query()['product'],
                'product_name' => $request->query()['product'] == 1
                    ? $request->query()['otherName']
                    : Product::find($request->query()['product'])->name,
                'delivery_id' => $request->query()['delivery'],
                'condition_id' => $request->query()['condition'],
                'tons' => $request->query()['amount'],
                'price' => $request->query()['optional'] . '-' . $request->query()['max'],
                'port' => $request->query()['port'],
                'exclusive' => 1,
            ];
        }
        if ($request->query()['lang'] === 'tr_TR') {
            $emailMarker = 1;
        }
        $lotInfo['session_id'] = Session::getId();
        $lotInfo['emailMarker'] = $emailMarker;
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

    public function condition()
    {
        return $this->belongsTo('App\Condition');
    }
}
