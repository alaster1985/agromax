<?php
/**
 * Created by PhpStorm.
 * User: pinofran
 * Date: 24.01.19
 * Time: 17:22
 */

namespace App;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ExclusiveLot extends Lot
{
//    public $product;
//    public $delivery;
//    public $tons;
//    public $price;
//    public $port_photo;

//    public function __construct()
//    {
//        $this->delivery = Delivery::getDeliveryById($data->delivery)->toArray()[0]->name;
//        if ($data->product != 'Other'){
//            $this->product = Product::getProductById($data->product)->toArray()[0]->name;
//        } else{
//            $this->product = $data->otherName;
//        }
//        $this->tons = $data->amount;
//        $this->price = $data->optional . '-' . $data->max;
//        $this->port_photo = 'images/port.jpg';
//    }


    public $id;
    public $product_id;
    public $product_name;
    public $delivery_id;
    public $condition_id;
    public $tons;
    public $price;
    public $port;
    public $port_photo;
    public $special;

    public function __construct($data)
    {
        parent::__construct();
        $this->createExclusiveLot($data);
    }

    public function createExclusiveLot($data)
    {
        $this->id = 0;
        $this->product_id = $data->product;
        $this->product_name = $data->otherName;
        $this->delivery_id = $data->delivery;
        $this->condition_id = $data->condition;
        $this->tons = $data->amount;
        $this->price = $data->optional . '-' . $data->max;
        $this->port = $data->port;
        $this->port_photo = 'images/port.jpg';
        $this->special = 0;
        $this->checkCurrentExLot($data);
    }

    public function storeExclusiveLot($data)
    {
        DB::table('exclusive_lots')->insert([
            'product_id' => $data->product,
            'product_name' => $data->otherName ?? Product::find($data->product)->name,
            'delivery_id' => $data->delivery,
            'condition_id' => $data->condition,
            'tons' => $data->amount,
            'optional_price' => $data->optional,
            'max_price' => $data->max,
            'port' => $data->port,
            'session_id' => Session::getId(),
            'created_at' => Carbon::now(),
        ]);
    }

    public function checkCurrentExLot($data)
    {
        $countOfCoincidences = 0;
        $currentExLot = [
            'product_id' => intval($data->product),
            'product_name' => $data->otherName ?? Product::find($data->product)->name,
            'delivery_id' => intval($data->delivery),
            'condition_id' => intval($data->condition),
            'tons' => intval($data->amount),
            'optional_price' => intval($data->optional),
            'max_price' => intval($data->max),
            'port' => $data->port,
            'session_id' => Session::getId(),
        ];

        $existingExLots = DB::table('exclusive_lots')
            ->where('session_id', '=', Session::getId())
            ->get(/*)->pluck(*/
                [
                    'product_id',
                    'product_name',
                    'delivery_id',
                    'condition_id',
                    'tons',
                    'optional_price',
                    'max_price',
                    'port',
                    'session_id',
                ]);
        if ($existingExLots->isEmpty()) {
            $this->storeExclusiveLot($data);
        } else {
            foreach ($existingExLots as $lot) {
                $lota = json_decode(json_encode($lot), true);
                if ($lota === $currentExLot) {
                    $countOfCoincidences++;
                }
            }
            if ($countOfCoincidences === 0) {
                $this->storeExclusiveLot($data);
            }
        }
    }
}