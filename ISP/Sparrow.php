<?php

namespace SOLID\ISP;

class Sparrow implements Flyable, Moveable
{
    public function fly()
    {
        echo 'i can fly';
    }

    public function move()
    {
        echo 'i can move';
    }
}