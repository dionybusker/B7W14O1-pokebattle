<?php

class Weakness {
    public $name;
    public $multiplier;

    public function __construct($name, $multiplier) {
        $this->name = $name;
        $this->multiplier = $multiplier;
    }

    public function __toString() {
        return json_encode($this);
    }
}