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
    <link rel="stylesheet" href="/css/session.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
        <table>
          <tr>
            <td>
              <a href="\cours\3\hist\01.laPremiereGuerreMondiale.php">chapitre 1 : La Première Guerre mondiale (1914-1918)</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="\cours\3\hist\02.lesEtatsTotalitaires.php">chapitre 2 : Les Etats totalitaires</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="\cours\3\hist\03.laSecondeGuerreMondiale.php">chapitre 3 : La Seconde Guerre mondiale (1939-1945)</a>
            </td>
          </tr>
        </table>
      </div>

    </section>



    <footer class="container-fluid footer">
      <p></p>
    </footer>
  </body>
  </html>

  </body>
</html>
