<?php

class CreditCard
{
    private string $id;
    private string $number;
    private int $expiryYear;
    private int $expiryMonth;

    public function __construct(string $number, int $expiryYear, int $expiryMonth)
    {
        $this->number = $number;
        $this->expiryYear = $expiryYear;
        $this->expiryMonth = $expiryMonth;
    }

    public function setNumber($number)
    {
        if (is_integer($number) && $number >= 0) {
            $this->number = $number;
        } elseif (!is_int($number)) {
            throw new Exception('Is not a number');
        }
        return $number;
    }

    public function isExpired(): bool
    {
        if ((int) date('y') < $this->expiryYear) {
            return false;
        } else if ((int) date('y') == $this->expiryYear && (int) date('n') < $this->expiryMonth) {
            return false;
        }
        return true;
    }

    public function save()
    {
        $this->id = 'id from database';
        return $this;
    }

    public static function get(int $id)
    {
    }

    public function pay(float $amount): bool
    {
        if ($this->isExpired()) {
            return false;
        } else {
            return true;
        }
    }
}
