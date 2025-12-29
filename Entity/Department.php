<?php
class DepartmentId extends Person
{
    private int $id;
    private string $description;
    function __construct($name, $pass, $email, $id, $description)
    {
        parent::__construct($name, $pass, $email);
        $this->id = $id;
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function toString()
    {
        return " =>| Name: " . $this->getName() . "<br>" .
            " =>| Email: " . $this->getEmail() . "<br>" .
            " =>| Password: " . $this->getPassword()."<br>" .
            " =>| description: " . $this->getdescription()."<br>" .
            " =>| id: " . $this->getid();   
    }
}
