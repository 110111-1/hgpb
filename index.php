<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');</style>
    <title>HGPB </title>
  </head>
  <body>

    <header class="container-fluid header">
        <div class="container">
          <img src="img/logo_HGPB.png" class="logo"alt="logo_HGPB"/>
            <?php include("menu.php");?>
        </div>
      </header>

  <section class="container-fluid bienvenue">
    <div class="container presentation">
      <p>Bienvenue sur le site de monsieur Moty <br /> Ce site vous permet d'avoir accès aux ressources du cours d'histoire</p>
      <p>Il ne remplace en rien les cours mais permet d'avoir accès a des synthèses, des méthodes, et quelques vidéos du net</p>
      <p class="avertissement">Pour profiter de toutes les ressources vous aurez besoin d'un lecteur de fichier pdf que vous avez déjà sur vos tablettes</p>
      <p>Pour entrer sur le site vous aurez besoin de votre identifiant et votre mot de passe, merci de ne pas diffuser ces informations</p>
    </div>
  </section>
  <section class="container-fluid seconnecter">
    <div class="container connect">
      <form class="connection" action="login.php" method="post">
        <label for="nom">Identifiant : </label>
        <input type="text" name="nom">
        <label for="psw">Mot de passe : </label>
        <input type="text" name="psw">
        <input type=submit>
      </form>
    </div>
    </section>
    <section class="container-fluid dA">
      <div class="container demandeAcces">
        <form class="formulaireDeDemande" action="demandeAcces.php" method="post">

        </form>

      </div>

    </section>
    <footer class="container-fluid footer">
      <hr>
    </footer>
  </body>
</html>
