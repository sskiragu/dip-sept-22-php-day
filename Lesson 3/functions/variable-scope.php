<?php
// global variable
$bal = 2000;

function compute_bal(){
     global $bal;  
     echo $bal;
}
compute_bal();

?>