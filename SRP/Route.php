<?php

namespace SOLID\SRP;

class Route
{
    private $source;
    private $target;
    private $destination;

    public function __construct($source, $target, $destination)
    {
        $this->setSource($source);
        $this->setTarget($target);
        $this->setDestination($destination);
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param mixed $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }


}