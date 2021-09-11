<?php
  session_start();
  if($_SESSION['autoriser_admin']!='oui'){
    header("location:\login.php");
    exit();
  }
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/session.css">
    <link rel="stylesheet" href="/css/menu.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');</style>
    <title>Administration</title>
  </head>
  <body>
    <header class="container-fluid header">
      <div class="container">
        <img src="../../../img/logo_HGPB.png" class="logo"alt="logo_HGPB"/>
        <?php include("menu_admin.php");
        ?>
      </div>
    </header>
    <section class="container-fluid bienvenue">
      <div class="container presentation">
        <h1>Page accueil ADMINISTRATION</h1>
      </div>
    </section>

    <footer class="container-fluid footer">
      <p></p>
    </footer>
  </body>
</html>
