<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";

echo "<h3>Pokémon</h3>";
$pikachu = new Pikachu("Pikachu");
$charmeleon = new Charmeleon("Charmeleon");

print_r("<pre>" . $pikachu . "</pre>");
print_r("<pre>" . $charmeleon . "</pre>");

Pokemon::getPopulation();

echo "<h3>Fight</h3>";
for ($loop = 0; $loop < 2; $loop++) {
    echo "<strong>Attack #" . ($loop + 1) . "</strong> <br>";
    for ($i = 0; $i < 2; $i++) {
        if ($pikachu->health > 0) {
            if ($pikachu->attacks[$i]->name == "Electric Ring") {
                $pikachu->attack($pikachu, $pikachu->attacks[$i], $charmeleon);
            }
        } else {
            unset($pikachu);
        }
    
        if ($charmeleon->health > 0) {
            if ($charmeleon->attacks[$i]->name == "Flare") {
                $charmeleon->attack($charmeleon, $charmeleon->attacks[$i], $pikachu);
            }
        } else {
            unset($charmeleon);
        }
    }
}

echo "<h3>Statistics</h3>";
Pokemon::getPopulation();
