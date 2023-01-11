<?php

class UserRegistered extends User
{
    private int $id;
    private string $username;
    private string $password;
    protected $discount = 20;

    public function __construct($username, $password)
    {
        $row = ['dati dal database'];

        $this->creditCard = CreditCard::get($row['creditcard_id']);

        parent::__construct($row['name'], $row['address'], $this->creditCard);
    }
}
