<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <?php
    include __DIR__ . "/../inc/style.php";
    ?>
</head>
<body>
    <?php include __DIR__ . "/../style_components/navbar.php"; ?>
    <div class="container w-50 mx-auto mt-6">
        <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
                <h1>Contatti</h1>
                <p>Per qualsiasi informazione, contattateci all'indirizzo email <i>sbalordheat@smail.com</i></p>
                <p>Oppure chiamateci al numero <i>+39 3334444555555</i></p>
            </div>
        </div>
    </div>    
    
</body>
</html>
<?php
ob_end_flush();
?>