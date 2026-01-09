<?php
namespace Tols;
include_once("../vendor/autoload.php");
use Service\formulaire_input;
use Repository\UserRepository;

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
                    // echo "Client" . "<br>";
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
        echo "test";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "POST" . "<br>";
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "هو هذاك" . "<br>";
                include_once("../Repository/UserRepository.php");
                $test = new UserRepository();
                if ($test->login($_POST)) {
                    $obj = $test->Check_role($_POST);
                    if ($obj->role == 'Admin') {
                        // --------------------------------
                        header("Location:../page/admin/dashboard.php");
                        $_SESSION['Admin'] = $obj->id;

                        exit;
                    }
                    echo "yaaaaaaaaah" . "<br>";
                    if (!$obj->is_active) {
                        // --------------------------------
                        header("Location:../page/no_active.php");
                        $_SESSION['id'] = $obj->id;

                        exit;
                    }
                    if ($obj->Check_role == 'NO') {
                            $_SESSION['id'] = $obj->id;

                        header("Location:../page/not_role.php");
                    } else {
                        if ($obj->role == 'client') {
                            echo "client";
                            $_SESSION['id'] = $obj->id;
                            header("Location:../page/client/dashboard.php");
                        } else {
                            echo "livreur";
                            $_SESSION['id'] = $obj->id;
                            header("Location:../page/livreur/marketplace.php");
                        }
                    }
                } else {
                    $_SESSION['error'] = 'yes';
                    header("Location:../page/auth/login.php");
                }
            } else {
                $_SESSION['error'] = 'yes';
                header("Location:../page/auth/login.php");
            }
        } else {
            echo "GIT";
            header("Location:../page/auth/login.php");
        }
    }
    public static function Method_test()
    {
        session_start();
        if (!empty($_SESSION['id'])) {
        } else {
            header("Location:../page/auth/login.php");
        }
    }
}
