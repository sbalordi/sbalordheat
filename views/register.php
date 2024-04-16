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
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $email = $_POST["email"];
        $pw = $_POST["pw"];
        $conferma_pw = $_POST["conferma_pw"];
        $azienda = $_POST["azienda"];
        if ($pw != $conferma_pw) {
            throw new Exception("Le password non coincidono");
        }
        $model->addUser($username, $email, $pw, $nome, $cognome, $azienda);

        $id = $model->login($email, $pw);
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
      <div class="card text-black" style="border-radius: 25px;">
        <div class="card-body p-md-5">
          <form action="/register" method="POST">
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" class="form-control" placeholder="Nome" required><br>
            
            <label for="cognome">Cognome</label><br>  
            <input type="text" name="cognome" class="form-control" placeholder="Cognome" required><br>
            
            <label for="username">Username</label><br>
            <input type="text" name="username" class="form-control" placeholder="Username" required><br>

            <label for="azienda">Nome Azienda</label><br>
            <input type="text" name="azienda" class="form-control" placeholder="Nome Azienda" required><br>
            
            <label for="email">Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="name@example.com" required><br>
            
            <label for="pw">Password</label><br>
            <input type="password" name="pw" class="form-control" placeholder="Password" required><br>

            <label for="pw">Conferma Password</label><br>
            <input type="password" name="conferma_pw" class="form-control" placeholder="Password" required><br>
            
            <div class="d-inline-flex flex-row align-items-center"><input type="submit" class="btn btn-primary" value="Registratevi"><p class="m-2">Disponete già di un account? <a href="/login">Effettuate il login</a></p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
ob_end_flush();
?>
