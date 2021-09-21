<?php

class Pokemon {
    public $name;
    public $energyType;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public static $count = 0;
    
    public function __construct($name, $energyType, $health, $attacks, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        
        // Every new construction raises the Pokemon total
        Pokemon::$count++;
    }

    public function __toString() {
        return json_encode($this);
    }

    /**
     * attack() method
     *
     * @param [object] $attackingPokemon
     * @param [object] $attack
     * @param [object] $damagedPokemon
     * 
     * Print text from the attacks
     */
    public function attack($attackingPokemon, $attack, $damagedPokemon) {
        echo $attackingPokemon->name . ": " . $attackingPokemon->health . " HP <br>";
        echo $damagedPokemon->name . ": " . $damagedPokemon->health . " HP <br>";
        
        $this->damage($attack->hitpoints, $damagedPokemon);        

        echo $attackingPokemon->name . " used " . $attack->name . "!" . "<br>";

        echo "It damaged the other Pokemon! <br><br>";

        if ($damagedPokemon->health <= 0) {
            $damagedPokemon->health = 0;

            echo $damagedPokemon->name . " fainted!";
            echo "<br>";
        }
    }
    
    /**
     * damage() method
     *
     * @param [int] $damage
     * @param [object] $damagedPokemon
     * 
     * Calcalute damage taken
     */
    public function damage($damage, $damagedPokemon) {
        foreach ($damagedPokemon->weakness as $weaknessPokemon) {
            if ($this->energyType->name == $weaknessPokemon) {
                $damage = $damage * $damagedPokemon->weakness->multiplier;
            }
        }

        foreach ($damagedPokemon->resistance as $resistancePokemon) {
            if ($this->energyType->name == $resistancePokemon) {
                $damage = $damage - $damagedPokemon->resistance->value;
            }
        }

        echo '<br>';

        $this->damage = $damage;

        $damagedPokemon->health = $damagedPokemon->health - $damage;
    }

    /**
     * getPopulation() method
     *
     * Print the total of Pokemon which are still alive
     */
    public static function getPopulation() {
        echo "Currently living Pokemon: " . self::$count;
    }

    public function __destruct() {
        Pokemon::$count--;
    }
}