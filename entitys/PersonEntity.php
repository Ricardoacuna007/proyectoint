<?php

abstract class PersonEntity 
{
    protected $pkPhone;
    protected $person;
	protected $firstName;
	protected $lastName;
    protected $gender;
    protected $birthday;
    
    public function __PersonEntity($pkPhone, $person, $firstName, $lastName, $gender, $birthday) 
    {
        $this->pkPhone   = $pkPhone;
        $this->person    = $person;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->gender    = $gender;
        $this->birthday  = $birthday;
    }

    public function getPkPhone() {
        return $this->pkPhone;
    }

    public function setPkPhone($pkPhone) {
        $this->pkPhone = $pkPhone;
    }

    public function getPerson() {
        return $this->person;
    }

    public function setPerson($person) {
        $this->person = $person;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

     public function getBirthday() {
        return $this->birthday;
    }

    public function setBirthdayi($birthday) {
        $this->birthday = $birthday;
    }
}

?>
