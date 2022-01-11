<?php

class WeaponException extends \Exception {
    const PRG_WARRIOR = 'Warrior';
    const PRG_MAGE = 'Mage';
    
    const EXCEPT_NOT_DEFINED = '0';
    const EXCEPT_NOT_FIT = '1';
    
    public function __construct($code, $name, $PRGClass, $weapon) {
        switch ($code) {
            case self::EXCEPT_NOT_DEFINED:
                $this->message = $this->notDefinedMessage($name);
                break;
            case self::EXCEPT_NOT_FIT:
                $this->message =  $this->notFitMessage($name, $PRGClass, $weapon);
                break;
        }
    }
    
    public function notDefinedMessage($name) {
        return ($name.": I refuse to fight with my bare hands .<br>");
    }
    
    public function notFitMessage($name, $PRGClass, $weapon) {
        if ($PRGClass == self::PRG_WARRIOR) {
            return ($name.": A ".$weapon." ?? What should I do with this ?!<br>");
        }
        return ($name.":  I don't need this stupid ".$weapon." ! Don't misjudge my powers !<br>");
    }
}