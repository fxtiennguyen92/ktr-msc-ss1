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
    
    public function attack($weapon = null) {
        if (in_array($weapon, $this->listWeapon)) {
            echo($this->name.": Rrrrrrrrr ....<br>");
            echo($this->name.": Feel the power of my ".$weapon." !<br>");
        }
    }
    
    /**
     * Movable methods
     */
    public function moveRight() {
        echo($this->getName().": moves right furtively.<br>");
    }
    
    public function moveLeft() {
        echo($this->getName().": moves left furtively.<br>");
    }
    
    public function moveBack() {
        echo($this->getName().": moves back furtively.<br>");
    }
    
    public function moveForward() {
        echo($this->getName().": moves forward furtively.<br>");
    }
}