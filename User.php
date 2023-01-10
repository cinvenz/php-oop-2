<?php

class User
{
    private $creditCard;

    public function __construct($creditCard)
    {
        $this->creditCard = $creditCard;
    }
}

$creditCard = new CreditCard('984948494', 123, '12/12');
$userVincenzo = new User($creditCard);
