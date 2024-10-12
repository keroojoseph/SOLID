<?php

namespace SOLID\OCP;

class Trip
{
    private object $vehicle;
    private float $tripPrice;
    private string $tripNumber;
    private int $duration;

    public function __construct(Ivehicle $vehicle , $tripPrice, $tripNumber, $duration)
    {
        $this->setVehicle($vehicle);
        $this->setTripPrice($tripPrice);
        $this->setTripNumber($tripNumber);
        $this->setDuration($duration);
    }

    /**
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration(int $duration) : void
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getTripNumber()
    {
        return $this->tripNumber;
    }

    /**
     * @param mixed $tripNumber
     */
    public function setTripNumber($tripNumber)
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return mixed
     */
    public function getTripPrice()
    {
        return $this->tripPrice;
    }

    /**
     * @param mixed $tripPrice
     */
    public function setTripPrice($tripPrice)
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param mixed Vehicle
     */
    public function setVehicle(IVehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }


}