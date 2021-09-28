<?php

class Weakness {
    private $name;
    private $multiplier;

    /**
     * @param $name
     * @param $multiplier
     */
    public function __construct($name, $multiplier) {
        $this->name = $name;
        $this->multiplier = $multiplier;
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
    public function getMultiplier()
    {
        return $this->multiplier;
    }

    /**
     * @param mixed $multiplier
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;
    }
}