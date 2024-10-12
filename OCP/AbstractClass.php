<?php

namespace SOLID\OCP;

abstract class AbstractClass implements Ivehicle
{
    private $color;
    private $maxSpead;
    private $driver;
    private $routes = [];
    private $movable;


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


    /**
     * @return mixed
     */
    public function getMovable()
    {
        return $this->movable;
    }

    /**
     * @param mixed $movable
     */
    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

    /**
     * @return mixed
     */
    public function move()
    {
        return $this->getMovable()->move();
    }
}