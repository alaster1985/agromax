<?php
/**
 * Created by PhpStorm.
 * User: pinofran
 * Date: 24.01.19
 * Time: 17:22
 */

namespace App;


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
        $this->tons = $data->amount;
        $this->price = $data->optional . '-' . $data->max;
        $this->port = 'random EX port';
        $this->port_photo = 'images/port.jpg';
        $this->special = 0;
    }
}