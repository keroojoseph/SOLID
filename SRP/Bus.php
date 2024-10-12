<?php

namespace SOLID\SRP;

class Bus
{
    private $color;
    private $maxSpead;
    private $door;
    private $busNumber;
    private $numberOfPassengers;
    private $driver;
    private $routes = [];

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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMaxSpead()
    {
        return $this->maxSpead;
    }

    /**
     * @param mixed $maxSpead
     */
    public function setMaxSpead($maxSpead)
    {
        $this->maxSpead = $maxSpead;
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

    /**
     * @return mixed
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * @param Route $routes
     */
    public function setRoutes(Route $routes)
    {
        $this->routes[] = $routes;
    }

    public function move()
    {
        $output = '';

        foreach ($this->getRoutes() as $route) {
            $output .= '<p> I am moving now from ' . $route->getSource() . ' to ' . $route->getTarget() . ' the driver name is ' . $this->driver->getName() .'</p>';
        }
        return $output;
    }

}
