<?php
namespace gestion_et_livraison\Tols;
use gestion_et_livraison\Service\formulaire_input;
use gestion_et_livraison\Repository\UserRepository;
class Request
{
    public static function Method()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "POST" . "<br>";
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "هو هذاك" . "<br>";
                if ($_POST['role'] == 'livreur') {
                    echo "livreur" . "<br>";
                    formulaire_input::add_Livreur($_POST);
                } else {
                    echo "Client" . "<br>";
                    formulaire_input::add_Client($_POST);
                }
                // header("Location:../service/hy.php");
            } else {
                echo "lol";
                $_SESSION['error'] = 'yes';


                header("Location:../page/auth/register.php");
            }
        } else {
            echo "GIT";
            header("Location:../page/auth/register.php");
        }
    }
    public static function Method_login()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "POST" . "<br>";
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "هو هذاك" . "<br>";
                include_once("../Repository/UserRepository.php");
                $test=new UserRepository();
                if($test->login($_POST)){
                    echo"yas"."<br>";
                    header("Location:../page/not_role.php");

                }else{
                    // echo"no logen"."<br>";
                    $_SESSION['error'] = 'yes';
                    header("Location:../page/auth/login.php");
                }
                
            } else {
                // echo" NO VALIDATE_EMAIL";
                $_SESSION['error'] = 'yes';
                header("Location:../page/auth/login.php");
                // var_dump($_SESSION);
            }
        } else {
            echo "GIT";
            header("Location:../page/auth/login.php");
        }
    }
}
