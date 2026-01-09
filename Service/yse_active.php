<?php
namespace Service;
include_once("../vendor/autoload.php");
use Repository\AdminRepository;

echo"yes";
var_dump($_POST);
$admin=new AdminRepository();
$admin->active_account($_POST['id']);
header("Location:../page/admin/dashboard.php");
