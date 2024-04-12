<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Ho deciso che non esporrò nessun endpoint REST
require __DIR__ . "/inc/bootstrap.php";

$req = $_SERVER['REQUEST_URI'];

// Faccio il matching delle regex che rappresentano i miei endpoint
$path = match (1) {
    preg_match("/\/user/i", $req) => "/views/user.php",
    preg_match("/\/register/i", $req) => "/views/register.php",
    preg_match("/\/$/", $req) => "/views/home.php",
    preg_match("/\/login/i", $req) => "/views/login.php",
    default => "/views/404.php"
};

require __DIR__ . $path;
