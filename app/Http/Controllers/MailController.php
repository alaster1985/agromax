<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Delivery;

class MailController extends Controller
{
    public static function sendEmail($allOrderInfo)
    {
        $allOrderInfo['emailMarker'] ? $address = 'skrypnik.andrii@gmail.com' : $address = 'westerlandiya@mail.ru';
        $allOrderInfo['exclusive'] ? $exclusive = 'Yes' : $exclusive = 'No';
        $title = 'New Order';
        $eol = "\r\n";
        $message = 'Hello! You have new order.' . $eol . $eol .
            'Client info.' . $eol .
            'First name: ' . $allOrderInfo['first_name'] . $eol .
            'Last name: ' . $allOrderInfo['last_name'] . $eol .
            'Email: ' . $allOrderInfo['email'] . $eol .
            'Linkedin url: ' . $allOrderInfo['linkedin'] . $eol .
            'Phone: ' . $allOrderInfo['phone'] . $eol .
            'Company name: ' . $allOrderInfo['company'] . $eol . $eol .
            'Order info.' . $eol .
            'Product: ' . $allOrderInfo['product_name'] . $eol .
            'Incoterms: ' . Delivery::find($allOrderInfo['delivery_id'])->name . $eol .
            'Conditions: ' . Condition::find($allOrderInfo['condition_id'])->condition . $eol .
            'Amount: ' . $allOrderInfo['tons'] . $eol .
            'Price: ' . $allOrderInfo['price'] . $eol .
            'Port: ' . $allOrderInfo['port'] . $eol .
            'From Exclusive Order: ' . $exclusive . $eol;

        mail($address, $title, $message);
    }
}
