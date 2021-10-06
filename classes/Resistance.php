<?php

class Resistance {
    private $energyType;
    private $reduction;

    /**
     * @param $energyType
     * @param $reduction
     */
    public function __construct($energyType, $reduction) {
        $this->energyType = $energyType;
        $this->reduction = $reduction;
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
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * @param mixed $reduction
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;
    }
}