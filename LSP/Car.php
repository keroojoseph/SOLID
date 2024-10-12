<?php

namespace SOLID\LSP;

class Car extends Vehicle implements EngineInterface
{
    public function startEngine() : void
    {
        echo "Engine: Start\n";
    }
}