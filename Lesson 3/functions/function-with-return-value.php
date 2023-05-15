<?php
function compute_balance($deposit, $withdrawal = 0){
    $balance = $deposit - $withdrawal;
    return $balance;
}
echo compute_balance(7000, 500);
echo "<br>";
echo compute_balance(6000);
?>