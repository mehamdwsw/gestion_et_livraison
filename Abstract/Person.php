<?php

namespace Abstract;

class Person
{
    private  $id;
    private  $nom;
    private  $email;
    private  $password;
    private  $role;

    function __construct($nom, $email, $password, $role)
    {
        $this->nom = $nom;
        $this->email = $email;;
        $this->password = $password;
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
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    } 
    public function getEmail()
    {
        return $this->email;
    } 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    } 
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}
?>