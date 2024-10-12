<?php

namespace SOLID\LSP;

use Random\Engine;

 class Vehicle
{
    public function startEngineVehicle(EngineInterface $engine)
    {
        return $engine->startEngine();
    }
}