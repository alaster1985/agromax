<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Delivery;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendEmail($allOrderInfo)
    {
        $allOrderInfo['emailMarker'] ? $address = 'bayramov@agromax.farm' : $address = 'sales@agromax.farm';
        $allOrderInfo['exclusive'] ? $exclusive = 'Yes' : $exclusive = 'No';
        $title = 'New Order';
        $eol = "\r\n";
        $messages = 'Hello! You have new order.' . $eol . $eol .
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

        Mail::raw($messages, function ($message) use ($address, $title){
            $message->to($address, 'to me')->subject($title);
            $message->from('post@agromax.farm');
        });
    }

//    public static function testEmail()
//    {
//        $aaa = 'asd';
//        Mail::send('mail', ['eee' => $aaa], function ($message){
//            $message->from('post@agromax.farm', 'Your Order');
//
//            $message->to('skrypnik.andrii@gmail.com', 'test')->subject('TEST');
//        });
//    }
}
