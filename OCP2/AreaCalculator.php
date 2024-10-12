<?php

namespace SOLID\OCP2;

class AreaCalculator
{
    public function calculate(Shape $shape)
    {
        return $shape->area() . '<br>';
    }
}