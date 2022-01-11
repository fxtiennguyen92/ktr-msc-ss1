<?php
namespace App\Http\Controllers;

class Warrior extends Character {
    const PRG_WARRIOR = 'Warrior';
    
    private $listWeapon = ['hammer', 'sword'];
    
    public function __construct($name) {
        parent::__construct($name, self::PRG_WARRIOR);
        $this->setLife(100);
        $this->setStrength(10);
        $this->setAgility(8);
        $this->setWit(3);
    }
    
    public function introduceSelf() {
        echo($this->getName().":  My name will go down in history !<br>");
    }
    
    public function attackWithWeapon($weapon) {
        if (in_array($weapon, $this->listWeapon)) {
            echo($this->getName().": Rrrrrrrrr ....<br>");
            echo($this->getName().": I'll crush you with my ".$weapon." !<br>");
        }
    }
}