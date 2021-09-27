<?php

class Pokemon {
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;

    private static $count = 0;
    
    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        
        // Every new construction raises the Pokemon total
         Pokemon::$count++;
    }

    /**
     * @param $target
     * @param $attack
     */
    public function attack($target, $attack) {
        echo $this->name . " attacks " . $target->name . " with " . $attack->getName() . "! <br>";
        $this->dealDamage($target, $attack->getDamage());

        echo $target->name . " got hit and has " . $target->health . " hp left.";
    }

    /**
     * @param $target
     * @param $damage
     */
    public function dealDamage($target, $damage) {
        if ($this->energyType->getName() == $target->weakness->getName()) {
            $damage = $damage * $target->weakness->getMultiplier();
        }

        if ($this->energyType->getName() == $target->resistance->getName()) {
            $damage = $damage - $target->resistance->getReduction();
        }

        $target->health = $target->health - $damage;

        if ($target->health < 0) {
            $target->health = 0;
        }
    }

    public static function getPopulation() {
        return "Currently living Pokemon: " . self::$count;
    }

    public function __destruct() {
        Pokemon::$count--;
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

    /**
     * @return mixed
     */
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * @param mixed $energyType
     */
    public function setEnergyType($energyType)
    {
        $this->energyType = $energyType;
    }

    /**
     * @return mixed
     */
    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    /**
     * @param mixed $hitpoints
     */
    public function setHitpoints($hitpoints)
    {
        $this->hitpoints = $hitpoints;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    /**
     * @return mixed
     */
    public function getAttacks()
    {
        return $this->attacks;
    }

    /**
     * @param mixed $attacks
     */
    public function setAttacks($attacks)
    {
        $this->attacks = $attacks;
    }

    /**
     * @return mixed
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * @param mixed $weakness
     */
    public function setWeakness($weakness)
    {
        $this->weakness = $weakness;
    }

    /**
     * @return mixed
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * @param mixed $resistance
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }
}