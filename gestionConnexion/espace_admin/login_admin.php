<?php
session_start();
@$login_admin=$_POST['login_admin'];
@$pass_admin=$_POST['pass_admin'];
@$valider_admin=$_POST['valider_admin'];
$message='';

if(isset($valider_admin)){
  include("connexion_admin.php");
  $res=$pdo->prepare("SELECT * FROM administration WHERE login_admin=? AND pass_admin=? LIMIT 1");
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $res->execute(array($login_admin,$pass_admin));
  $tab=$res->fetchAll();
  if(count($tab)==0){
    $message="<li>Mauvais Identifiant ou mot de passe</li>";
  }
  else{
    $_SESSION['autoriser_admin']="oui";
    $_SESSION['autoriser']="oui";
    header("location:session_admin.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/gestionConnexion.css">
</head>
<body onload="document.fo.login.focus">
  <header class="container-fluid">
    <div class="container">
      Espace Administration -
      <a href="\index.php">retour au site</a>
    </div>
  </header>
  <section class="container-fluid">
    <div class="container">
      <form class="form-login" name="fo" action="" method="post">
        <div class="label">Login</div>
        <input type="text" name="login_admin" value="<?php echo $login_admin?>">
        <div class="label">Mot de passe</div>
        <input type="password" name="pass_admin">
        <input type="submit" name="valider_admin" value="S'authentifier">
      </form>
    </div>
  </section>
  <?php
  if(!empty($message)) {
    ?>
    <div id="message">
      <?php echo $message ?>
    </div>
  <?php }?>
</body>
</html>
