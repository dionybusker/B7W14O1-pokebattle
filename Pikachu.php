<?php

require_once "requiredClasses.php";

class Pikachu extends Pokemon {
    public $name;
    public $energyType;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name) {
        $energyType = new EnergyType(EnergyType::LIGHTNING, 10);
        $health = 60;
        $attacks = [
            new Attack("Electric Ring", 50),
            new Attack("Pika Punch", 20)
        ];
        $weakness = new Weakness(EnergyType::FIRE, 1.5);
        $resistance = new Resistance(EnergyType::FIGHTING, 20);
        parent::__construct($name, $energyType, $health, $attacks, $weakness, $resistance);
    }
}