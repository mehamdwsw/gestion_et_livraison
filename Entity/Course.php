<?php
class Course extends Person
{
    private $id;
    private  $title;
    private  $duration;
    private  $departmentId;
    function __construct($name, $pass, $email, $id, $title, $duration, $departmentId)
    {
        parent::__construct($name, $pass, $email);
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->departmentId = $departmentId;
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
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
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
    public function toString()
    {
        return " =>| Name: " . $this->getName() . "<br>" .
            " =>| Email: " . $this->getEmail() . "<br>" .
            " =>| Password: " . $this->getPassword() . "<br>" .
            " =>| title: " . $this->gettitle() . "<br>" .
            " =>| duration: " . $this->getduration() . "<br>" .
            " =>| departmentId: " . $this->getdepartmentId() . "<br>" .
            " =>| id: " . $this->getid();
    }
}
