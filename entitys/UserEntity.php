<?php

require_once __DIR__ . '/../entitys/PersonEntity.php';

class UserEntity extends PersonEntity
{
    
    private $pkUser;
    private $fkPhone;
    private $fkLevel;
    private $password;
    private $locked;

	public function __construct($pkPhone, $person, $firstName, $lastName, $gender, $birthday, $pkUser, $fkPhone, $fkLevel, $password, $locked) 
    {
        parent::__PersonEntity($pkPhone, $person, $firstName, $lastName, $gender, $birthday);
        
        $this->pkUser   = $pkUser;
        $this->fkPhone  = $fkPhone; 
        $this->fkLevel  = $fkLevel; 
        $this->password = $password; 
        $this->locked   = $locked;
    }

    public function __login($pkPhone, $password) 
    {
        $this->pkPhone  = $pkPhone; 
        $this->password = $password; 
    }

    public function getPkUser() {
        return $this->pkUser;
    }

    public function setPkUser($pkUser) {
        $this->pkUser = $pkUser;
    }

    public function getFkPhone() {
        return $this->fkPhone;
    }

    public function setFkPhone($fkPhone) {
        $this->fkPhone = $fkPhone;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getFkLevel() {
        return $this->fkLevel;
    }

    public function setFkLevel($fkLevel) {
        $this->fkLevel = $fkLevel;
    }

    public function getLocked() {
        return $this->locked;
    }

    public function setLocked($locked) {
        $this->locked = $locked;
    }
}

?>
