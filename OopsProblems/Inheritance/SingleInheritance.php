<?php

class BankAccount {
    private $balance;

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this->balance;
    }
}

class SavingAccount extends BankAccount {
    private $interestRate;

    public function setInterestRate($interestRate) {
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        // calculate interest
        $interest = $this->interestRate * $this->getBalance();
        // deposit interest to the balance
        $this->deposit($interest);
    }
}

$accountS = new SavingAccount();
$accountS->deposit(200);
echo "After deposit : " . $accountS->getBalance() . "\n";
// set interest rate
$accountS->setInterestRate(0.05);
$accountS->addInterest();
echo "after interest : " . $accountS->getBalance() . "\n";

?>