<?php
//1. Arithmetic operators
$deposit = 800000;
$withdrawal = 40000;
$balance = $deposit - $withdrawal;
print_r($balance);
// 2. Assignment operator
// =
// 3. Comparison operator
// ==, ===, !=
// 4. Increment/Decremet
// ++, -- (pre, post)
// 5. Logical
// && , ||
$username = "admin";
$password = "123";
if($username == 'admin' && $password = "000"){
    echo "Login successfull";
}else{
    echo "Invalid credentials";
}
echo "<br>";
// 6. String operator
// .
$balance = 900.00;

echo "Your balance is: ".$balance;

?>