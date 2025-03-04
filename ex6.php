<?php
class BankAccount
{
    private $account_number, $balance;
    function __construct($account_number, $balance)
    {
        $this->account_number = $account_number;
        $this->balance = $balance;
    }
    function getAccountNumber()
    {
        return $this->account_number;
    }
    function getBalance()
    {
        return $this->balance;
    }
    function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited $amount into account $this->account_number. Balane: $this->balance<br>";
    }
    function withdraw($amount)
    {
        $this->balance -= $amount;
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->account_number. New balance: $this->balance</br>";
        }
        else
        {
           echo "Want to withdrawn $amount?</br>";
           echo "Insufficient balance in account $this->account_number. Current balance: $this->balance</br>";
        }
    }
}

$account1 = new BankAccount("1234567890", 1000);

$account1->deposit(500);

$account1->withdraw(2000);
