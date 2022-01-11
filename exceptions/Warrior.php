<?php

class Warrior extends Character {
    const PRG_WARRIOR = 'Warrior';
    const EXCEPT_NOT_DEFINED = '0';
    const EXCEPT_NOT_FIT = '1';
    
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
    
    public function attack($weapon = null) {
        if (is_null($weapon)) {
            throw new WeaponException(self::EXCEPT_NOT_DEFINED, $this->getName(), $this->getRPGClass(), $weapon);
        }
        
        if (!in_array($weapon, $this->listWeapon)) {
            throw new WeaponException(self::EXCEPT_NOT_FIT, $this->getName(), $this->getRPGClass(), $weapon);
        }
        
        // Unsheathe and Attack
        $this->unsheathe();
        echo($this->getName().": Rrrrrrrrr ....<br>");
        echo($this->getName().": I'll crush you with my ".$weapon." !<br>");
    }
    
    /**
     * Movable methods
     */
    public function moveRight() {
        echo($this->getName().": moves right like a bad boy.<br>");
    }
    
    public function moveLeft() {
        echo($this->getName().": moves left like a bad boy.<br>");
    }
    
    public function moveBack() {
        echo($this->getName().": moves back like a bad boy.<br>");
    }
    
    public function moveForward() {
        echo($this->getName().": moves forward like a bad boy.<br>");
    }
}