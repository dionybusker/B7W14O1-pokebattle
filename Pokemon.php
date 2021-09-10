<?php

class Pokemon {
    public $name;
    public $energyType;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;


    public function __construct($name, $energyType, $health, $attacks, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function attack() {
        // de schade van een Attack wordt vermenigvuldigd met de multiplier van de Weakness indien de EnergyType van de Weakness gelijk is aan de EnergyType van de aanvallende Pokemon
        
        // de schade van een Attack wordt verminderd met de waarde van de Resistance indien de EnergyType van de Resistance gelijk is aan de EnergyType van de aanvallende Pokemon

    }

}