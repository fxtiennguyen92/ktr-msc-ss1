<?php
namespace App\Http\Controllers;

class Mage extends Character {
    const PRG_MAGE = 'Mage';
    
    private $listWeapon = ['magic', 'wand'];
    
    public function __construct($name) {
        parent::__construct($name, self::PRG_MAGE);
        $this->setLife(100);
        $this->setStrength(10);
        $this->setAgility(8);
        $this->setWit(3);
    }
    
    public function introduceSelf() {
        echo($this->getName().":   May the gods be with me .<br>");
    }
    
    public function attackWithWeapon($weapon) {
        if (in_array($weapon, $this->listWeapon)) {
            echo($this->name.": Rrrrrrrrr ....<br>");
            echo($this->name.": Feel the power of my ".$weapon." !<br>");
        }
    }
}