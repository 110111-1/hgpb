<?php
session_start();
@$login=$_POST['login'];
@$pass=$_POST['pass'];
@$valider=$_POST['valider'];
$message='';
if(isset($valider)){
  include("connexion.php");
  $res=$pdo->prepare("SELECT * FROM inscrits WHERE login=? AND pass=? LIMIT 1");
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $res->execute(array($login,md5($pass)));
  $tab=$res->fetchAll();
  if(count($tab)==0){
    $message="<li>Mauvais Identifiant ou mot de passe</li>";
  }
  else{
    $_SESSION['autoriser']="oui";
    $_SESSION['nomPrenom']=strtoupper($tab[0]['nom'].' '.$tab[0]['prenom']);
    header("location:session.php");
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
      Identification
      <a href="inscription.php">S'inscrire</a>
    </div>
  </header>
  <section class="container-fluid">
    <div class="container">
      <form class="form-login" name="fo" action="" method="post">
        <div class="label">Login</div>
        <input type="text" name="login" value="<?php echo $login?>">
        <div class="label">Mot de passe</div>
        <input type="password" name="pass">
        <input type="submit" name="valider" value="S'authentifier">
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
