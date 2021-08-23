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
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/session.css">
    <link rel="stylesheet" href="/css/menu.css">
  </head>
  <body>
      <header class="container-fluid header">
          <div class="container head">
            <img src="../../../img/logo_HGPB.png" class="logo"alt="logo_HGPB"/>
            <?php include("menu.php");?>
          </div>
    </header>
    <div class="container-fluid hello">
      <div class="container">
        <h1>
          <?php
            echo (date("H")<19)?("Bonjour"):("Bonsoir");
          ?>
          <span><?=$_SESSION['nomPrenom']?></span>
        </h1>
      </div>
    </div>
    <section class="container-fluid">
      <div class="container classe">
        <h2>Troisième</h2>
        <a class="dropdown-item" href="\cours\3\hist\01.laPremiereGuerreMondiale.php">chap.1 : La Première Guerre mondiale</a>
        <a class="dropdown-item" href="\cours\3\hist\02.lesEtatsTotalitaires.php">chap.2 : les Etats totalitaires</a>
        <a class="dropdown-item" href="\cours\3\hist\03.laSecondeGuerreMondiale.php">chap.3 : La Seconde Guerre mondiale</a>
        <a class="dropdown-item" href="\cours\3\hist\04.laFranceDefaiteEtOccupee.php">chap.4 : La France défaite et occupée</a>
        <a class="dropdown-item" href="\cours\3\hist\05.leMondeBipolaire.php">chap.5 : Le monde Bipolaire</a>
        <a class="dropdown-item" href="\cours\3\hist\06.independanceEtNouveauxEtats.php">chap.6 : Indépendance et nouveaux Etats</a>
        <a class="dropdown-item" href="\cours\3\hist\07.lEurope.php">chap.7 : L'Europe</a>
        <a class="dropdown-item" href="\cours\3\hist\08.leMondeApres1989.php">chap.8 : Le monde après 1989</a>
        <a class="dropdown-item" href="\cours\3\hist\09.refondreLaRepublique.php">chap.9 : Refondre la République</a>
        <a class="dropdown-item" href="\cours\3\hist\10.laVRepublique.php">chap.10: La Vème République</a>
      </div>

    </section>



    <footer class="container-fluid footer">
      <p></p>
    </footer>
  </body>
  </html>

  </body>
</html>
