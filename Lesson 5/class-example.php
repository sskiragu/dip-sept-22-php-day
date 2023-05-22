<?php
class PaymentGateway{
    // properties
    public $receiver = 'abc';
    public static $balance = '4000.00';
    // methods
    public function approve_payment(){
        echo $this->receiver;
        echo "<br>";
        echo static::$balance;
    }
}

// create an object
$payment_gateway_obj = new PaymentGateway();
// var_dump($payment_gateway_obj);
$payment_gateway_obj->approve_payment();
