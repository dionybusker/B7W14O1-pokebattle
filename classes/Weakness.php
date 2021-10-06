<?php

class Weakness {
    private $energyType;
    private $multiplier;

    /**
     * @param $energyType
     * @param $multiplier
     */
    public function __construct($energyType, $multiplier) {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }

    /**
     * @return mixed
     */
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * @param mixed $energyType
     */
    public function setEnergyType($energyType)
    {
        $this->energyType = $energyType;
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