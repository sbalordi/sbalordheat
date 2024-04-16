<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <?php 
    include __DIR__ . "/../inc/style.php"; 
    ?>
  </head>
  <body>
    <?php include __DIR__ . "/../style_components/navbar.php"; ?>
    <div class="container w-50 mx-auto mt-6">
      <div class="card text-black" style="border-radius: 25px;">
        <div class="card-body p-md-5">
      <form action="/login" method="POST">
          <label for="email">E-Mail</label><br>
          <input type="email" class="form-control" name="email" placeholder="name@example.com" required><br>
          <label for="password">Password</label><br>
          <input type="password" class="form-control" name="password" required><br>
          <div class="d-inline-flex flex-row align-items-center"><input type="submit" class="btn btn-primary" value="Login"><p class="m-2">Non disponete di un account? <a href="/register">Registratevi</a></p></div>
      </form>
      <?php
      $model = new UserModel();
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
          $email = $_POST["email"];
          $password = $_POST["password"];

          $id = $model->login($email, $password);
          if ($id != null) {
              $_SESSION["id"] = $id;
              header( $header = "Location: /user");
          }
        } catch (Exception $e) {
              echo "<div class='alert alert-danger' role='alert'>Errore: " . $e->getMessage() . "</div>";
        }
      }
      ?>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
ob_end_flush();
?>
