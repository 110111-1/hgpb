<?php
session_start();
@$login=$_POST['login'];
@$pass=$_POST['pass'];
@$valider=$_POST['valider'];
$message='';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/gestionConnexion.css">
</head>
<body onload="document.fo.login.focus">
  <header>
    Authentification
    <a href="inscription.php">S'iscrire</a>
  </header>
  <form class="form-login" name="fo" action="" method="post">
    <div class="label">Login</div>
    <input type="text" name="login" value="<?php echo $login?>">
    <div class="label">Mot de passe</div>
    <input type="password" name="pass">
    <input type="submit" name="valider" value="S'authentifier">
  </form>
  <?php
    if(!empty($message)) {
      ?>
    <div id="message">
      <?php echo $message ?>
    </div>
    <?php }?>
</body>
</html>
