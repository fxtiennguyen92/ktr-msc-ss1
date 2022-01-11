<?php
namespace App\Http\Controllers;

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
        
        $this->introduceSelf();
    }
    
    public function attack($weapon) {
        if ($weapon) {
            $this->attackWithWeapon($weapon);
        } else {
            echo($this->name.": Rrrrrrrrr ....<br>");
        }
    }
    
    abstract public function introduceSelf();
    abstract public function attackWithWeapon($weapon);
    
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