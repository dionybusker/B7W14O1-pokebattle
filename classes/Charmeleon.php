<?php

include_once "Pokemon.php";

class Charmeleon extends Pokemon {
    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
        parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance);
    }
}