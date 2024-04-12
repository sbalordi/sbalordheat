<?php
ob_start();
session_start();
$model = new UserModel;

?>

<!DOCTYPE html>
<hmtl>
  <head>
      <?php include __DIR__ . "/../inc/style.php"; ?>
  </head>
  <body>
    <?php 
    include __DIR__ . "/../style_components/navbar.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      try {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
          
        $model->addUser($username, $email, $password);

        $id = $model->login($email, $password);
        if ($id != null) {
            $_SESSION["id"] = $id;
            header( $header = "Location: /login");
        }
      } catch (Exception $e) {
          echo "<div class='alert alert-danger' role='alert'>Errore: " . $e->getMessage() . "</div>";
      }
    }
    ?>
    <div class="container mt-6 w-50 mx-auto">
      <form action="/register" method="POST">
        <input type="email" name="email" class="form-control" placeholder="name@example.com" required><br>
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" class="form-control" required><br>
        <div class="d-inline-flex flex-row align-items-center"><input type="submit" class="btn btn-primary" value="Registratevi"><p class="m-2">Disponete già di un account? <a href="/login">Effettuate il login</a></p>
      </form>
    </div>
  </body>
</html>
<?php
ob_end_flush();
?>
