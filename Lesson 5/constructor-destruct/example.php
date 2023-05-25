<?php
class Account{
    public $database_connection;
    public $account_number;
    public $account_name;
    //constructor
    public function __construct($account_number, $account_name){
        $this->account_number = $account_number;
        $this->account_name = $account_name;
    }


    //destruct
    public function __destruct(){
        $database_connection->close();   
    }
}

class SavingAccount extends Account{
    public $max_amount;
    public function __construct($account_number, $account_name, $max_amount){
        parent::__construct($account_number, $account_name);
        $this->max_amount = $max_amount;
    }
}

$saving_account = new SavingAccount("5467*(87654356", "Mary Ricky", 50000);
echo $saving_account->account_number;