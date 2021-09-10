<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";

$pikachu = new Pikachu("Pikachu");
$charmeleon = new Charmeleon("Charmeleon");

print_r("<pre>" . $pikachu . "</pre>");
print_r("<pre>" . $charmeleon . "</pre>");