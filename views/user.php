<?php
ob_start();
if(session_id() == '' || !isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
  header("Location: /login");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <?php include __DIR__ . "/../inc/style.php"; ?>
  </head>
  <body>
    <?php
    include __DIR__ . "/../style_components/navbar.php";

    require __DIR__ . "/../controller/api/UserController.php";

    $id = $_SESSION["id"];
    $model = new UserModel;
    $user = $model->getUser($id);

    if ($user) {
    ?>
    <div class="container mt-6 w-50 mx-auto">
      <h1>Profilo</h1>
      <p>Benvenuto, <?php echo $user["username"]; ?></p>
      <p>Email: <?php echo $user["email"]; ?></p>
      <p>Nome: <?php echo $user["name"]; ?></p>
      
    <?php
    } else {
      require __DIR__ . "/404.php";
    }
    ?>
    <div class="container mt-6 w-50 mx-auto">
      
  </body>
</html>

<?php
ob_end_flush();
?>
