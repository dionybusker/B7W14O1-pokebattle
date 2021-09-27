<?php

require_once("classes/Pikachu.php");
require_once("classes/Charmeleon.php");
require_once("classes/EnergyType.php");
require_once("classes/Attack.php");
require_once("classes/Weakness.php");
require_once("classes/Resistance.php");

$energyTypeLightning = new EnergyType("Lightning");
$energyTypeFire = new EnergyType("Fire");

$attackElectricRing = new Attack("Electric Ring", 50);
$attackPikaPunch = new Attack("Pika Punch", 20);
$attackHeadButt = new Attack("Head Butt", 10);
$attackFlare = new Attack("Flare", 30);

$weaknessFire = new Weakness("Fire", 1.5);
$weaknessWater = new Weakness("Water", 2);

$resistanceFighting = new Resistance("Fighting", 20);
$resistanceLightning = new Resistance("Lightning", 10);

$pikachu = new Pikachu("Pika", $energyTypeLightning, 60, 60, [$attackElectricRing, $attackPikaPunch], $weaknessFire, $resistanceFighting);
$charmeleon = new Charmeleon("Charmeleon", $energyTypeFire, 60, 60, [$attackHeadButt, $attackFlare], $weaknessWater, $resistanceLightning);

echo $pikachu->getName() . " has " . $pikachu->getHealth() . " hp. <br>";
echo $charmeleon->getName() . " has " . $charmeleon->getHealth() . " hp. <br>";

echo "<br>";
echo Pokemon::getPopulation();
echo "<br><br>";

for ($i = 0; $i < 2; $i++) {
    if ($pikachu->getHealth() > 0) {
        foreach ($pikachu->getAttacks() as $pikachuAttacks) {
            if ($pikachuAttacks->getName() == "Electric Ring") {
                echo $pikachu->attack($charmeleon, $pikachuAttacks) . "<br>";
            }
        }
    } else {
        unset($pikachu);
    }

    if ($charmeleon->getHealth() > 0) {
        foreach ($charmeleon->getAttacks() as $charmeleonAttacks) {
            if ($charmeleonAttacks->getName() == "Flare") {
                echo $charmeleon->attack($pikachu, $charmeleonAttacks) . "<br>";
            }
        }
    } else {
        unset($charmeleon);
    }
}

echo "<br>";

echo Pokemon::getPopulation();