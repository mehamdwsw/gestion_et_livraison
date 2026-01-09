<?php 

namespace Entity;

use Abstract\Person;

class Admin extends Person
{
    

    public function toString()
    {
        return " =>| nom: " . parent::getnom() . "<br>" .
            " =>| Email: " . parent::getEmail() . "<br>" .
            " =>| Password: " . parent::getPassword() . "<br>" .
            " =>| role: " . parent::getrole() . "<br>" ;
    }
}
