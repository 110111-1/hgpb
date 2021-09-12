<?php
  session_start();
  if($_SESSION['autoriser_admin']!='oui'){
    header("location:\login.php");
    exit();
  }
?>
<?php include("connexion_admin.php"); ?>
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
        <h1>Page ADMINISTRATION</h1>
        <h1>Liste des utilisateurs</h1>
       <table>
         <thead>
           <tr>
             <th>ID</th>
             <th>Name</th>
           </tr>
         </thead>
         <tbody>
           <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
           <tr>
             <td><?php echo htmlspecialchars($row['nom']); ?></td>
             <td><?php echo htmlspecialchars($row['prenom']); ?></td>
             <td><?php echo htmlspecialchars($row['date']); ?></td>
           </tr>
           <?php endwhile; ?>
         </tbody>
       </table>
      </div>
    </section>
    <section class=container-fluid>
      <h1>Actions</h1>
      <button type="btn btn-warning" name="button">
        <a href="suppression.php">Supprimer un utilisateur</button>
    </section>

    <footer class="container-fluid footer">
      <p></p>
    </footer>
  </body>
</html>
