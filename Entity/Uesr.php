<?php
class Uesr extends Person
{
    private $role;


    function __construct($name, $email, $pass, $role)
    {
        parent::__construct($name, $pass, $email);
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
    public function toString()
{
    return " =>| Name: " . $this->getName() . "<br>".
           " =>| Email: " . $this->getEmail() . "<br>".
           " =>| Role: " . $this->role."<br>".
           " =>| Password: " . $this->getPassword();
}
}
