<?php
@$nom=$_POST['nom'];
@$prenom=$_POST['prenom'];
@$login=$_POST['login'];
@$pass=$_POST['pass'];
@$repass=$_POST['repass'];//les mots de pass seront en caractere nonvisible et si possible cryptés (sha1 ou md5)
@$valider=$_POST['valider'];
$message="";//pour lister les erreurs
if(isset($valider)){
  if(empty($nom)) $message="<li>Saisie nom invalide</li>";
  if(empty($prenom)) $message.="<li>Saisie prenom incorrecte</li>";
  if(empty($login)) $message.="<li>Saisie login incorrecte</li>";
  if(empty($pass)) $message.="<li>Saisie pass incorrecte</li>";
  if($pass != $repass) $message.="<li>Mots de passe non identique</li>";
  if(empty($message)){
    include("connexion.php");
    $req=$pdo->prepare('SELECT id FROM inscrits WHERE login=? limit 1');
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute(array($login));
    $tab=$req->fetchAll();//ici un element le login
    if(count($tab)>0){//si le login existe
      $message="<li>Le Login existe déjà</li>";
    }
    else{//inserer les données dans la base
      $insert=$pdo->prepare("insert into inscrits(date,nom,prenom,login,pass) values(now(),?,?,?,?)");
      $insert->execute(array($nom,$prenom,$login,md5($pass)));
      header("location:login.php");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/gestionConnexion.css">
  <title>Inscription</title>
</head>
<body>
  <header>
    Inscription
    <a href="login.php">Déjà inscrit</a>
  </header>
  <form class="form-inscription" action="" method="post">
    <div class="label">Nom</div>
    <input type="text" name="nom" value="<?php echo $nom?>" />
    <div class="label">Prenom</div>
    <input type="text" name="prenom" value="<?php echo $prenom?>" />
    <div class="label">Login</div>
    <input type="text" name="login" value="<?php echo $login?>" />
    <div class="label">Mot de passe</div>
    <input type="password" name="pass" value="<?php echo $pass?>" />
    <div class="label">Confirmer votre mot de passe</div>
    <input type="password" name="repass" value="<?php echo $repass?>" />
    <input type="submit" name="valider" value="S'inscrire" />
  </form>
  <?php
  if(!empty($message)){?>
    <div id="message">
      <?php echo $message ?>
    </div>
    <?php
  }
  ?>
</body>
</html>
