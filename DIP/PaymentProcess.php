<?php

namespace SOLID\DIP;

class PaymentProcess
{
    private $pay;

    public function process(PaymentMethod $pay)
    {
        return $pay->pay();
    }
}