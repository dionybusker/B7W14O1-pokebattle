<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";

$pikachu = new Pikachu("Pikachu");
$charmeleon = new Charmeleon("Charmeleon");

print_r("<pre>" . $pikachu . "</pre>");
print_r("<pre>" . $charmeleon . "</pre>");

for ($i = 0; $i < 2; $i++) {
    if ($pikachu->attacks[$i]->name == "Electric Ring") {
        $pikachu->attack($pikachu, $pikachu->attacks[$i], $charmeleon);
    }

    if ($charmeleon->attacks[$i]->name == "Flare") {
        $charmeleon->attack($charmeleon, $charmeleon->attacks[$i], $pikachu);
    }
}