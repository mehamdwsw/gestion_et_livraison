<?php
include "./AutoInclude.php";
// include "./page/auth/login.html";
header("Location: page/auth/login.html");

// ---------------------------



$lol=new Database();
$client=new Client("bilal","bilal@gmail.com","1234kif","client");
$sand=new ClientRepository();
var_dump($sand->create($client));



