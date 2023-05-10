<?php
#This a comment
// This is a comment
//1. int
$age = 19;
var_dump($age);
echo "<br>";
//2. float
$deposit = 50000.50;
var_dump($deposit);
echo "<br>";
//3. String
$msg = "Hello world";
var_dump($msg);
echo "<br>";
# 4. Boolean
$isMarried = true;
var_dump($isMarried);
echo "<br>";
# 5. null
$status = null;
var_dump($status);
echo "<br>";
#6. Array
$items = array("Sugar", "Rice", "C.Fat");
var_dump($items);
echo "<br>";

#7. Object
class Payment{
    // Properties
    public $balance = 200000;

    public function approve_payment(){
        return "Approved";
    }
}
$payment_obj = new Payment();
var_dump($payment_obj);
?>