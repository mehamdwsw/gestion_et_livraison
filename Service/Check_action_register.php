<?php

namespace gestion_et_livraison\Service;

use gestion_et_livraison\Abstract\Person;
use gestion_et_livraison\Entity\Client;
use gestion_et_livraison\Tols\Request;
use gestion_et_livraison\Service\formulaire_input;

include "../Abstract/Person.php";
include "../Entity/Client.php";
include "../Tols/Request.php";
include "formulaire_input.php";
// ------------------------------------
// include "./Entity/Livreur.php";

session_start();
Request::Method();
