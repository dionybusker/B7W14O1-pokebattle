<?php

include_once("Pokemon.php");

class Pikachu extends Pokemon {

    /**
     * @param $name
     * @param $energyType
     * @param $maxHealth
     * @param $health
     * @param $attacks
     * @param $weakness
     * @param $resistance
     */
    public function __construct($name, $energyType, $maxHealth, $health, $attacks, $weakness, $resistance) {
        parent::__construct($name, $energyType, $maxHealth, $health, $attacks, $weakness, $resistance);
    }
}