<?php
class Account {
    protected $accountNumber;
    protected $accountHolder;
    protected $balance;
    
    public function __construct($accountNumber, $accountHolder) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = 0.0;
    }
    
    public function deposit($amount) {
        $this->balance += $amount;
    }
    
    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds";
        }
    }
    
    public function getBalance() {
        return $this->balance;
    }
}

class CheckingAccount extends Account {
    public function __construct($accountNumber, $accountHolder) {
        parent::__construct($accountNumber, $accountHolder);
    }
    
    public function writeCheck($amount) {
        // Logic to write a check
        echo "Check written for $amount";
    }
    
    public function withdrawCash($amount) {
        // Logic to withdraw cash
        echo "Withdrew $amount in cash";
    }
    
    public function makePurchase($amount) {
        // Logic to make a purchase using a debit card
        echo "Made a purchase for $amount";
    }
}

class SavingsAccount extends Account {
    protected $interestRate;
    protected $minimumBalance;
    
    public function __construct($accountNumber, $accountHolder) {
        parent::__construct($accountNumber, $accountHolder);
        $this->interestRate = 0.02;  // Specific to savings account
        $this->minimumBalance = 1000.0;  // Minimum balance required to avoid fees
    }
    
    public function applyInterest() {
        $this->balance += $this->balance * $this->interestRate;
    }
    
    public function isMinimumBalanceMaintained() {
        return $this->balance >= $this->minimumBalance;
    }
}

class MoneyMarketAccount extends Account {
    protected $interestRate;
    protected $minimumBalance;
    
    public function __construct($accountNumber, $accountHolder) {
        parent::__construct($accountNumber, $accountHolder);
        $this->interestRate = 0.05;  // Specific to money market account
        $this->minimumBalance = 5000.0;  // Minimum balance required to avoid fees
    }
    
    public function applyInterest() {
        $this->balance += $this->balance * $this->interestRate;
    }
    
    public function isMinimumBalanceMaintained() {
        return $this->balance >= $this->minimumBalance;
    }
    
    public function writeCheck($amount) {
        // Logic to write a check from a money market account
        echo "Check written for $amount from Money Market Account";
    }
}

class CertificateOfDeposit extends Account {
    protected $interestRate;
    protected $term;
    
    public function __construct($accountNumber, $accountHolder, $term) {
        parent::__construct($accountNumber, $accountHolder);
        $this->interestRate = 0.1;  // Specific to certificate of deposit
        $this->term = $term;
    }
    
    public function applyInterest() {
        $this->balance += $this->balance * $this->interestRate * $this->term;
    }
    
    public function withdraw($amount) {
        // Logic to handle withdrawal from a certificate of deposit
        echo "Withdrawal not allowed before the end of the term";
        }
    }

class IndividualRetirementAccount extends Account {
    protected $taxAdvantage;
    
    public function __construct($accountNumber, $accountHolder, $taxAdvantage) {
        parent::__construct($accountNumber, $accountHolder);
        $this->taxAdvantage = $taxAdvantage;
    }
    
    public function calculateTaxSavings() {
        // Logic to calculate tax savings based on the account type
        echo "Tax savings calculated for $this->taxAdvantage";
    }
}

class JointAccount extends Account {
    protected $accountHolders;
    
    public function __construct($accountNumber, $accountHolders) {
        parent::__construct($accountNumber, $accountHolders[0]);
        $this->accountHolders = $accountHolders;
    }
    
    public function addAccountHolder($accountHolder) {
        // Logic to add an additional account holder to the joint account
        $this->accountHolders[] = $accountHolder;
    }
    
    public function removeAccountHolder($accountHolder) {
        // Logic to remove an account holder from the joint account
        $index = array_search($accountHolder, $this->accountHolders);
        if ($index !== false) {
            unset($this->accountHolders[$index]);
        }
    }
}

class BusinessAccount extends Account {
    protected $businessType;
    
    public function __construct($accountNumber, $accountHolder, $businessType) {
        parent::__construct($accountNumber, $accountHolder);
        $this->businessType = $businessType;
    }
    
    public function processTransaction($amount) {
        // Logic to process business-related transactions
        echo "Transaction processed for $amount in $this->businessType account";
    }
}

class TrustAccount extends Account {
    protected $trustee;
    
    public function __construct($accountNumber, $accountHolder, $trustee) {
        parent::__construct($accountNumber, $accountHolder);
        $this->trustee = $trustee;
    }
    
    public function manageFunds($amount) {
        // Logic to manage funds based on the trust terms and trustee authority
        echo "Funds managed for $amount by trustee $this->trustee";
    }
}

class StudentAccount extends Account {
    public function __construct($accountNumber, $accountHolder) {
        parent::__construct($accountNumber, $accountHolder);
    }
    
    public function waiveFees() {
        // Logic to waive fees for student accounts
        echo "Fees waived for student account";
    }
    
    public function additionalBenefits() {
        // Logic for providing additional benefits to student account holders
        echo "Additional benefits provided to student account holders";
    }
}

class OnlineBankAccount extends Account {
    protected $onlineOnly;
    
    public function __construct($accountNumber, $accountHolder, $onlineOnly) {
        parent::__construct($accountNumber, $accountHolder);
        $this->onlineOnly = $onlineOnly;
    }
    
    public function accessOnlineBanking() {
        // Logic to access online banking features
        echo "Online banking accessed for account $this->accountNumber";
    }
    
    public function onlineStatements() {
        // Logic to view online statements
        echo "Online statements viewed for account $this->accountNumber";
    }
}

// Create objects of different account types
$checkingAcc = new CheckingAccount("CHK-001", "John Doe");
$savingsAcc = new SavingsAccount("SAV-001", "Jane Smith");
$moneyMarketAcc = new MoneyMarketAccount("MM-001", "Alice Johnson");
$cdAcc = new CertificateOfDeposit("CD-001", "Bob Thompson", 12);
$iraAcc = new IndividualRetirementAccount("IRA-001", "Michael Davis", "Roth");
$jointAcc = new JointAccount("JOINT-001", ["John Doe", "Jane Smith"]);
$businessAcc = new BusinessAccount("BUS-001", "ABC Company", "Corporation");
$trustAcc = new TrustAccount("TRUST-001", "John Doe", "ABC Trust");
$studentAcc = new StudentAccount("STU-001", "Alice Johnson");
$onlineAcc = new OnlineBankAccount("ONLINE-001", "Bob Thompson", true);

// Use common methods from the base class
$checkingAcc->deposit(5000.0);
$savingsAcc->deposit(3000.0);

// Use specific methods and attributes from the derived classes
$savingsAcc->applyInterest();
$moneyMarketAcc->applyInterest();
$cdAcc->applyInterest();

// Access common attributes
echo $checkingAcc->getBalance();  // Output: 5000.0
echo $savingsAcc->getBalance();  // Output: 3060.0
echo $moneyMarketAcc->getBalance();  // Output: 0.0
echo $cdAcc->getBalance();  // Output: 0.0
