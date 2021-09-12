<?php

try{
  // On se connecte à MySQL
 $sql = "SELECT * FROM inscrits";

  $pdo = new PDO('mysql:host=localhost;dbname=hgpb;charset=utf8', 'root', '');
  $stmt = $pdo->query($sql);

  if($stmt === false){
   die("Erreur");
  }
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}
?>
