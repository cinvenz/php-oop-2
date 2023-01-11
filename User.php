<?php

class User
{
    protected string $name;
    protected string $address;
    protected CreditCard $creditCard;
    protected int $discount = 0;
    protected array $products = [];

    public function __construct($name, $address, $creditCard)
    {
        $this->name = $name;
        $this->address = $address;
        $this->creditCard = $creditCard;
    }

    public function buy()
    {
        $total_amount = 0;
        foreach ($this->products as $product) {
            $total_amount += $product->getPrice();
        }

        $total_amount = $total_amount - $total_amount * $this->discount / 100;

        if ($this->creditCard->pay($total_amount)) {
            foreach ($this->products as $product) {
                $total_amount += $product->decrementAvailableQty();
            }
            echo 'Hai comprato i prodotti';
            return true;
        } else {
            return false;
            echo 'C\'e\' stato un errore';
        };
    }
}
