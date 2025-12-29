<?php
class Formateur extends Person
{
    private string $specialty;
    private array $courses;


    function __construct($name, $pass, $email, $specialty, $courses)
    {
        parent::__construct($name, $pass, $email);
        $this->specialty = $specialty;
        $this->courses = $courses;
    }
    public function getCourses()
    {
        return $this->courses;
    }
    public function setCourses($courses)
    {
        $this->courses = $courses;
        return $this;
    }
    public function getSpecialty()
    {
        return $this->specialty;
    }
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
        return $this;
    }
    public function toString()
    {
        return " =>| Name: " . $this->getName() . "<br>" .
            " =>| Email: " . $this->getEmail() . "<br>" .
            " =>| Password: " . $this->getPassword()."<br>" .
            " =>| specialty: " . $this->getspecialty()."<br>" .
            " =>| courses: " . $this->getcourses();
            
    }
}
