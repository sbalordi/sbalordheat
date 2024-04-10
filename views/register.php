<?php

$model = new UserModel;

?>

<!doctype html>

<hmtl>
    <head>
        <title>SbalordHEAT: Registrazione</title>
    </head>
    <body>
        <h1>Registrazione</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $model->addUser($username, $email, $password);
        }
        ?>
        <form action="/register" method="POST">
            <input type="text" name="email" placeholder="E-Mail" required><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br>
            <input type="submit">
        </form>
    </body>
</html>