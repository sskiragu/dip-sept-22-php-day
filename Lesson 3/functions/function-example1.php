<?php
function compute_balance(){
    $deposit = 600000;
    $withdrawal = 5000;
    $balance = $deposit - $withdrawal;
    echo $balance;
}
compute_balance();
?>