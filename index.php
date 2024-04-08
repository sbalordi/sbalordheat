<?php
require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);


$entity = "Base";

$supported = array(
    "user" => "User"
);

// Porto indietro l'array fino a trovare il primo elemento supportato
// Così da avere un array che rappresenta la path dell'endpoint
foreach ($uri as $key => $value) {
    if (!array_key_exists($value, $supported)) {
        array_shift($uri);
    } else {
        break; // Non sprechiamo cicli nella mia dimora 😎
    }
}

if (isset($uri[1]) && isset($uri[2]) && isset($supported[$uri[1]])) {
    $entity = $supported[$uri[1]];
    require __DIR__ . "/controller/api/".$entity."Controller.php";
}

// Uso una stringa per instanziare la classe controller, il fatto che PHP me lo lasci fare è veramente strano
$controller = $entity."Controller";
$controller = new $controller;

// Uso un ternary operator per evitare errori se non c'è un'azione
$action = isset($uri[2])? $uri[2] : null;

// Uso una stringa per chiamare il metodo, ripeto, il fatto che PHP me lo lasci fare è veramente strano
$method = $action."Action";
$controller->{$method}();
