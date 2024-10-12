<?php

namespace SOLID\DIP;

class Visa implements PaymentMethod
{
    public function pay()
    {
        echo 'i can pay now with Visa';
    }
}