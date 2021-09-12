<?php
  session_start();
  if($_SESSION['autoriser_admin']!='oui'){
    header("location:\login.php");
    exit();
  }
?>
<?php
@$nom=$_POST['nom'];
include("connexion_admin.php");
$sql = "DELETE FROM `inscrits` WHERE `nom` = $nom";
//Préparez notre déclaration DELETE
$stmt = $pdo->prepare($sql);
//Exécuter notre instruction DELETE
$res = $stmt->execute();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Suppression</title>
  </head>
  <body>
    <form class="fosupp" action="" method="post">
      <label for="nom">Nom a supprimer :</label>
      <input type="text" name="nom">
      <input type="submit" value="supprimer">
    </form>
  </body>
</html>
