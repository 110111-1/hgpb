<?php
  session_start();
  if($_SESSION['autoriser']!='oui'){
    header("location:login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/gestionConnexion.css">
  </head>
  <body>
    <header>
      Espace Privé
      <a href="deconnexion.php">Quitter la session</a>
    </header>
    <h1>
      <?php
        echo (date("H")<19)?("Bonjour"):("Bonsoir");
      ?>
      <span><?=$_SESSION['nomPrenom']?></span>
    </h1>
  </body>
</html>
