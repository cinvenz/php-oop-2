<?php

class CreditCard
{
    private $number;
    private $cvc;
    private $expiry;

    public function __construct($number, $cvc, $expiry)
    {
        $this->number = $number;
        $this->cvc = $cvc;
        $this->expiry = $expiry;
    }

    static public function checkexpiry($expiry)
    {
    }

    static public function checknumber($number)
    {
    }

    static public function checkcvc($cvc)
    {
    }

    public function pay($amount)
    {
        // pagare la somma
    }
}

$creditCardPlayer1 = new CreditCard('19191919191', 432, '10/25');
