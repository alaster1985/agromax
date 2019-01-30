<?php
/**
 * Created by PhpStorm.
 * User: pinofran
 * Date: 24.01.19
 * Time: 17:22
 */

namespace App;


class ExclusiveLot
{
    public $product;
    public $delivery;
    public $tons;
    public $price;
    public $port_photo;

    public function __construct($data)
    {
        $this->delivery = Delivery::getDeliveryById($data->delivery)->toArray()[0]->name;
        if ($data->product != 'Other'){
            $this->product = Product::getProductById($data->product)->toArray()[0]->name;
        } else{
            $this->product = $data->otherName;
        }
        $this->tons = $data->amount;
        $this->price = $data->optional . '-' . $data->max;
        $this->port_photo = 'images/port.jpg';
    }
}