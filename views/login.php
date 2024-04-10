<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    $model = new UserModel();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $model->login($email, $password);
    }
    ?>
    <form action="/login" method="POST">
        <input type="text" name="email" placeholder="E-Mail" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" required><br>
        <input type="submit">
    </form>
</body>
</html>