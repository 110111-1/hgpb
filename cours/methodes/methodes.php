<?php
session_start();
if($_SESSION['autoriser']!='oui'){
  header("location:../../../gestionConnexion/login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/coursHistoire.css">
  <link rel="stylesheet" href="../../../css/menu.css">
  <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');</style>
  <title>HGPB </title>
</head>
<body>
  <header class="container-fluid header">
    <div class="container">
      <img src="../../../img/logo_HGPB.png" class="logo"alt="logo_HGPB"/>
    <?php include("../../gestionConnexion\menu.php");?>
    </div>
  </header>
  <section class="container-fluid banner">
    <div class="container ban">
      <img src="ressources/ban.jpg" alt="">
      <div class="inner-banner">
        <h1>Les méthodes de travail </h1>
      </div>
    </div>
  </section>

  <section class="container-fluid ressources">
    <div class="container">
      <h2>Les ressources</h2>
      <hr class="separator">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>methodes générales</h2>
          <a href="ressources/methodeGenerale.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>methodes en 6ème</h2>
          <a href="ressources/Methodologie6.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Organiser le cahier</h2>
          <a href="ressources/cahier.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
      </div>
    </div>
    <hr class="separator">
  </section>
  <section class="container-fluid ressources">
    <div class="container">
      <h2>Outils</h2>
      <hr class="separator">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Vocabulaire</h2>
          <a href="ressources/VocabulaireDesConsignes.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>redaction simple</h2>
          <a href="ressources/compétenceEcriture.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>les Transitions</h2>
          <a href="ressources/formulationDesTransitions.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
      </div>
    </div>
    <hr class="separator">
  </section>
  <section class="container-fluid ressources">
    <div class="container">
      <h2>Aller plus loin ...</h2>
      <hr class="separator">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Le commentaires</h2>
          <a href="ressources/commentaire.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>La dissertation en histoire</h2>
          <a href="ressources/dissertation.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Courant et genre comprendre</h2>
          <a href="ressources/Genreetc.pdf">
            <img src="../../../img/pdf.png" alt="" class="logo_ressources">
          </a>
        </div>
      </div>
    </div>
    <hr class="separator">
  </section>
  <br>
  <br>
  <footer class="container-fluid footer">
    <p></p>
  </footer>
</body>
</html>
