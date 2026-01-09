<?php

namespace Service;
include_once("../vendor/autoload.php");

use Repository\ClientRepository;
use Entity\Client;
use Entity\Livreur;
use Repository\LivreurRepository;


class formulaire_input
{
    public static function add_Client($POST)
    {
        $nom = $POST['nom'];
        $email = $POST['email'];
        $role = $POST['role'];
        $password = $POST['password'];
        $sand = new Client($nom, $email, $password, $role);
        $Repository = new ClientRepository();
        $Repository->create($sand);
        
        header("Location:../page/Success_Page.php");
    }
    public static function add_Livreur($POST)
    {
        
        $nom = $POST['nom'];
        $email = $POST['email'];
        $role = $POST['role'];
        $password = $POST['password'];
        $sand = new Livreur($nom, $email, $password, $role);
        var_dump($sand);
        $Repository = new LivreurRepository();
        $Repository->create($sand);
        
        header("Location: ../page/Success_Page.php");
    }
}
