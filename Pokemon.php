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

    public function attack($attackingPokemon, $attack, $damagePokemon) {
        echo "<br>" . $attackingPokemon->name . ": " . $attackingPokemon->health . " HP <br>";
        echo $damagePokemon->name . ": " . $damagePokemon->health . " HP <br>";
        
        $this->damage($attack->hitpoints, $damagePokemon);        

        echo $attackingPokemon->name . " used " . $attack->name . "!" . "<br>";

        echo "It damaged the other Pokemon! <br>";

        echo $damagePokemon->name . " has " . $damagePokemon->health . " HP left. <br>";
    }
    
    public function damage($damage, $damagePokemon) {
        foreach ($damagePokemon->weakness as $weaknessPokemon) {
            if ($this->energyType->name == $weaknessPokemon) {
                $damage = $damage * $damagePokemon->weakness->multiplier;
            }
        }

        foreach ($damagePokemon->resistance as $resistancePokemon) {
            if ($this->energyType->name == $resistancePokemon) {
                $damage = $damage - $damagePokemon->resistance->value;
            }
        }

        echo '<br>';

        $this->damage = $damage;

        $damagePokemon->health = $damagePokemon->health - $damage;
    }
}