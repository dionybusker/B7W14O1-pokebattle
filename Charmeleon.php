<?php

require_once "requiredClasses.php";

class Charmeleon extends Pokemon {
    public $name;
    public $energyType;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name) {
        $energyType = new EnergyType(EnergyType::FIRE, 10);
        $health = 60;
        $attacks = [
            new Attack("Head Butt", 10),
            new Attack("Flare", 30)
        ];
        $weakness = new Weakness(EnergyType::WATER, 2);
        $resistance = new Resistance(EnergyType::LIGHTNING, 10);
        parent::__construct($name, $energyType, $health, $attacks, $weakness, $resistance);
    }
}