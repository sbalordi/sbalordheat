<?php
require __DIR__ . "/../controller/api/UserController.php";

$id = $_GET["id"];

$model = new UserModel;

$user = $model->getUser($id);

if ($user) {
    echo "<p>".$user["username"]."</p>";
    echo "<p>".$user["email"]."</p>";
} else {
    require __DIR__ . "/404.php";
}