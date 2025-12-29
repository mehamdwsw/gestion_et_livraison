<?php
class Student extends Person
{
    private  $registrationNumber;
    private  $departmentId;


    function __construct($name, $pass, $email, $registrationNumber, $departmentId)
    {
        parent::__construct($name, $pass, $email);
        $this->registrationNumber = $registrationNumber;
        $this->departmentId = $departmentId;
    }
    public function getDepartmentId()
    {
        return $this->departmentId;
    }
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;

        return $this;
    }
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }
    public function toString()
    {
        return " =>| Name: " . $this->getName() . "<br>" .
            " =>| Email: " . $this->getEmail() . "<br>" .
            " =>| Password: " . $this->getPassword()."<br>" .
            " =>| DepartmentId: " . $this->getDepartmentId()."<br>" .
            " =>| RegistrationNumber: " . $this->getRegistrationNumber();
            
    }
}
