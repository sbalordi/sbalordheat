<?php
require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

$i = 0;
while ($uri[$i] != "user") {
	array_shift($uri);
	$i++;
}

$entity = "Base";

$supported = array("user" => "User");

if (isset($uri[1]) && isset($uri[2]) && isset($supported[$uri[1]])) {
    $entity = $supported[$uri[1]];
    require __DIR__ . "/controller/api/".$entity."Controller.php";
}

$controller = $entity."Controller";
$controller = new $controller;
$method = $uri[2]."Action";
$controller->{$method}();
