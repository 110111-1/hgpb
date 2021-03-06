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
      <?php include("../../../gestionConnexion/menu.php");?>
    </div>
  </header>
  <section class="container-fluid banner">
    <div class="container ban">
      <img src="ressources/04/ban.jpg">>
      <div class="inner-banner">
        <h1>Chapitre 4 : La France défaite et occupée</h1>
      </div>
    </div>
  </section>

  <section class="container-fluid ressources">
    <div class="container">
      <h2>Les ressources</h2>
      <hr class="separator">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Chrono</h2>
          <a href="ressources/04/chrono.pdf">
            <img src="../../../img/timeline.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Définitions</h2>
          <a href="ressources/04/Définitions.pdf">
            <img src="../../../img/definitions.png" alt="" class="logo_ressources">
          </a>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-ressources">
          <h2>Cours</h2>
          <a href="ressources/04/Cours.pdf">
            <img src="../../../img/cours.png" alt="" class="logo_ressources">
          </a>
        </div>
      </div>
    </div>
    <hr class="separator">
  </section>
<!--
  <section class="container-fluid vocab">
    <div class="container">
      <h2>Vocaburaire</h2>
      <iframe ></iframe>
      <hr class="separator">
    </div>
-->
  </section>
  <section>
    <div class="container-fluid videosNet">
      <div class="container">
        <div class="row">
          <h2>Les vidéos du net</h2>
          <hr class="separator">
          <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-video">
            <h2>Video 1</h2>
            <iframe src="https://www.youtube.com/embed/V2zMVSKjntM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-video">
            <h2>Video 2</h2>
            <iframe src="https://www.youtube.com/embed/aM5faIoZ4_s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item-video">
            <h2>Video 3</h2>
          <iframe src="https://www.youtube.com/embed/uWieIGElNqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <footer class="container-fluid footer">
    <p></p>
  </footer>
</body>
</html>
