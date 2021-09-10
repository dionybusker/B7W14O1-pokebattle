<?php

class Attack {
    public $name;
    public $hitpoints;

    public function __construct($name, $hitpoints) {
        $this->name = $name;
        $this->hitpoints = $hitpoints;
    }
}