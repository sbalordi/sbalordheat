<?php
session_start();
$model = new UserModel;

?>

<!doctype html>

<hmtl>
    <head>
        <?php include __DIR__ . "/../inc/style.php"; ?>
    </head>
    <body>
        <?php include __DIR__ . "/../style_components/navbar.php"; ?>
        <h1>Registrazione</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $model->addUser($username, $email, $password);
        }
        ?>
        <div class="container mt-6">
        <form action="/register" method="POST">
            <input type="email" name="email" class="form-control" placeholder="name@example.com" required><br>
            <input type="text" name="username" class="form-control" placeholder="Username" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" class="form-control" required><br>
            <input type="submit">
            <input type="submit" value="Login" onclick="window.location.href='/login'">
        </form>
        </div>
    </body>
</html>