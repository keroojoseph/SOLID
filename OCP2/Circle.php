<?php

namespace SOLID\OCP2;

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}