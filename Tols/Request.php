<?php
class Request
{
    public static function Method()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "POST" . "<br>";
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "هو هذاك" ."<br>";
                if ($_POST['role'] == 'livreur') {
                    echo "livreur"."<br>";
                    formulaire_input::add_Livreur($_POST);
                } else {
                    echo "Client"."<br>";
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
    
}
