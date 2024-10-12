<?php

namespace SOLID\DIP;

class Credit implements PaymentMethod
{
    public function pay()
    {
        echo 'i can pay now with Credit';
    }
}