<?php
function compute_balance($deposit, $withdrawal){
    $balance = $deposit - $withdrawal;
    echo $balance;
}
compute_balance(7000, 500);
echo "<br>";
compute_balance(6000, 5030);
?>