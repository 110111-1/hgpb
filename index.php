
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');</style>
    <title>HGPB</title>
  </head>
  <body>
    <header class="container-fluid header">
      <div class="container">
        <img src="img/logo_HGPB.png" class="logo"alt="logo_HGPB"/>
      </div>
    </header>
    <section class="container-fluid bienvenue">
      <div class="container presentation">
        <p>Bienvenue sur le site de monsieur Moty </p>
        <p>Ce site vous permet d'avoir accès aux ressources du cours d'histoire. <span class="avertissement">Il ne remplace en rien les cours</span> mais permet d'avoir accès a des synthèses, des méthodes, et quelques vidéos du net. </p>
        <p>Pour profiter de toutes les ressources vous aurez besoin d'un lecteur de fichier pdf que vous avez déjà sur vos tablettes</p>
        <p>Pour entrer sur le site vous aurez besoin de votre identifiant et votre mot de passe, merci de ne pas diffuser ces informations</p>
      </div>
    </section>

    <section class="container-fluid seconnecter">
      <div class="container connect">
        <p class="entete">S'identifier</p>
        <form class="connection" action="" method="post">
          <table>
            <tr>
              <td>
                <label for="login">Nom</label>
              </td>
              <td>
                <input type="text" name="login">
              </td>
            </tr>
            <tr>
              <td>
                <label for="psw">Mot de passe </label>
              </td>
              <td>
                <input type="password" name="psw">
              </td>
            </tr>
          </table>
          <br />
          <input type=submit>
        </form>
      </div>
    </section>
    <div class="separation">
      <p> <hr> </p>
    </div>
    <section class="container-fluid Acces">
      <div class="container demandeAcces">
        <p class="entete">Créer un accès</p>
        <form class="formulaireDeDemande" action="" method="post">
          <table>
            <tr>
              <td>  <label for="nom">Nom</label></td>
              <td><input type="text" name="nom"></td>
            </tr>
            <tr>
              <td>
                <label for="psw">Mot de passe </label>
              </td>
              <td>
                <input type="password" name="psw">
              </td>
            </tr>
            <tr>
              <td>  <label for="prenom">Prénom</label></td>
              <td>  <input type="text" name="prenom"></td>
            </tr>
            <td>  <label for="login">Pseudo</label></td>
            <td><input type="text" name="login"></td>
          </tr>
            <tr>
              <td><label for="class">Classe</label></td>
              <td><input type="text" name="classe"></td>
            </tr>
            <tr>
              <td>  <label for="email">Email</label></td>
              <td><input type="email" name="email"></td>
            </tr>
          </table>
          <br />
          <input type="submit" name="submit" value="Envoyer">
        </form>
      </div>
    </section>
    <div class="separation">
      <p> <hr> </p>
    </div>
    <footer class="container-fluid footer">
      <p></p>
    </footer>
  </body>
</html>
