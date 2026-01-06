<?php

namespace gestion_et_livraison\Service;

use gestion_et_livraison\Tols\Request;
use gestion_et_livraison\Database\Database;
use gestion_et_livraison\Repository\UserRepository;

include_once("../Tols/Request.php");
include_once("../Database/DatabaseConnection.php");
include_once("../Repository/UserRepository.php");
Request::Method_login();