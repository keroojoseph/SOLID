<?php

namespace SOLID\SRP;

class Driver
{
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setAddres($address);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddres()
    {
        return $this->addres;
    }

    /**
     * @param mixed $addres
     */
    public function setAddres($address)
    {
        $this->address = $address;
    }


}