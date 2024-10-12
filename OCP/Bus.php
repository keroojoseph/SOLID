<?php

namespace SOLID\OCP;

class Bus extends AbstractClass
{
    private $door;
    private $busNumber;
    private $numberOfPassengers;


    public function __construct($busNumber, $numberOfPassengers)
    {
        $this->setBusNumber($busNumber);
        $this->setNumberOfPassengers($numberOfPassengers);
    }

    /**
     * @return mixed
     */
    public function getNumberOfPassengers()
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param mixed $numberOfPassengers
     */
    public function setNumberOfPassengers($numberOfPassengers)
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return mixed
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * @param mixed $busNumber
     */
    public function setBusNumber($busNumber)
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return mixed
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param mixed $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }

}
