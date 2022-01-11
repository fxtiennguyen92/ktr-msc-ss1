<?php

abstract class Character
{
    public $name;
    public $life;
    public $agility;
    public $strength;
    public $wit;
    private $PRGClass;
    
    const PRG_CHARRACTER = 'Character';
    
    public function __construct($name, $prgClass = self::PRG_CHARRACTER) {
        $this->setName($name);
        $this->setRPGClass($prgClass);
        $this->setLife(50);
        $this->setAgility(2);
        $this->setStrength(2);
        $this->setWit(2);
        // Introduct self
        $this->introduceSelf();
    }
    
    /**
     * Unsheathe before attack
     */
    public function unsheathe() {
        echo($this->getName().": Unsheathes his weapon .<br>");
    }
    
    /**
     * Attack
     * @param optional $weapon
     */
    public function attack($weapon = null) {
        echo($this->getName().": Rrrrrrrrr ....<br>");
    }
    
    /**
     * Attack - catch the exception and print the message
     * @param string $weapon
     */
    public function tryToAttack($weapon) {
        try {
            $this->attack($weapon);
        } catch (WeaponException $e) {
            echo $e->getMessage();
        }
    }
    
    /**
     * Inforduct self after initialization
     */
    abstract public function introduceSelf();
    
    /**
     * Movable methods
     */
    public function moveRight() {
        echo($this->getName().": moves right<br>");
    }
    
    public function moveLeft() {
        echo($this->getName().": moves left<br>");
    }
    
    public function moveBack() {
        echo($this->getName().": moves back<br>");
    }
    
    public function moveForward() {
        echo($this->getName().": moves forward<br>");
    }
    
    /**
     * Getters and Setters
     */
    public function getName() {
        return $this->name;
    }
    
    public function getLife() {
        return $this->life;
    }
    
    public function getAgility() {
        return $this->agility;
    }
    
    public function getStrength() {
        return $this->strength;
    }
    
    public function getWit() {
        return $this->wit;
    }
    
    public function getRPGClass() {
        return $this->PRGClass;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setLife($life) {
        $this->life = $life;
    }
    
    public function setAgility($agility) {
        $this->agility = $agility;
    }
    
    public function setStrength($strength) {
        $this->strength = $strength;
    }
    
    public function setWit($wit) {
        $this->wit = $wit;
    }
    
    private function setRPGClass($prgClass) {
        $this->PRGClass = $prgClass;
    }
}