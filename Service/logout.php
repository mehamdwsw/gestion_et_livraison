<?php
namespace Service;
class logout{

   public static function  logout_uesr(){
        session_start();
        session_destroy();
        header("Location:../index.php");
    }
}

logout::logout_uesr();