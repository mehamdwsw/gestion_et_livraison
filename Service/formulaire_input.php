<?php
class formulaire_input
{
    public static function add_Client($POST)
    {
        include_once "../Entity/Client.php";
        include_once "../Database/DatabaseConnection.php";
        include_once "../Interface/CrudInterface.php";
        include_once "../Repository/ClientRepository.php";
        $nom = $POST['nom'];
        $email = $POST['email'];
        $role = $POST['role'];
        $password = $POST['password'];
        $sand = new $role($nom, $email, $password, $role);
        var_dump($sand);
        $Repository = new ClientRepository();
        $id=$Repository->create($sand);
        $_SESSION['Id']=$id;
        $_SESSION['role']=$role;
        var_dump($_SESSION);
        header("Location: ../page/client/dashboard.php");
    }
    public static function add_Livreur($POST)
    {
        include_once "../Entity/Livreur.php";
        include_once "../Database/DatabaseConnection.php";
        include_once "../Interface/CrudInterface.php";
        include_once "../Repository/LivreurRepository.php";
        $nom = $POST['nom'];
        $email = $POST['email'];
        $role = $POST['role'];
        $password = $POST['password'];
        $sand = new $role($nom, $email, $password, $role);
        var_dump($sand);
        $Repository = new LivreurRepository();
        $Repository->create($sand);
        $_SESSION['Id']=$id;
        $_SESSION['role']=$role;
        var_dump($_SESSION);
        header("Location: ../page/livreur/active-deliveries.php");
    }
}
