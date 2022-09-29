<?php 

class Student{
    private $Id;
    private $LastName;
    private $FirstName;
    private $DateOfBirth;

    public function getId(){
        return $this->Id;
    }

    public function setId($id) {
        $this->Id = $id;
    }
   
    public function getLastName(){
        return $this->LastName;
    }

    public function setLastName($lastName) {
        $this->LastName = $lastName;
    }
   
    public function getFirstName(){
        return $this->FirstName;
    }

     public function setFirstName($firstName) {
        $this->FirstName = $firstName;
    }

    public function getDateOfBirth(){
        return $this->DateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->DateOfBirth = $dateOfBirth;
    }

}

?>