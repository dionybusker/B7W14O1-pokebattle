<?php

class EnergyType {
    const LIGHTNING = "Lightning";
    const FIGHTING = "Fighting";
    const FIRE = "Fire";
    const WATER = "Water";

    public $name;
    public $value;

    public function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }

    public function __toString() {
        return json_encode($this);
    }
}