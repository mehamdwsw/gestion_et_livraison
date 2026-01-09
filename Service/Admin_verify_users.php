<?php

namespace Service;

use Repository\AdminRepository;

include_once("../vendor/autoload.php");
$Admin = new AdminRepository();
$lol=$Admin->verify_users($_POST['id']);
var_dump($_POST);
header("Location:../page/admin/verify_users.php");
