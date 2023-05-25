<?php
class Account{
 protected $account_number = "8775fhjjf";
}

class Saving extends Account{
    
}

$saving_account = new Saving();
var_dump($saving_account);