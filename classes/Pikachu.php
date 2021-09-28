<?php

include_once("Pokemon.php");

class Pikachu extends Pokemon {

    /**
     * @param $name
     * @param $energyType
     * @param $hitpoints
     * @param $health
     * @param $attacks
     * @param $weakness
     * @param $resistance
     */
    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
        parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance);
    }
}