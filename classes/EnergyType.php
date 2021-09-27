<?php

class EnergyType {
    private $name;
    // private $value;

    public function __construct($name) {
        $this->name = $name;
        // $this->value = $value;
    }

    public function __toString() {
        return json_encode($this);
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
}