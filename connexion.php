<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"rel="stylesheet"/>
  </head>
  <body background="fondepage2.png">
    <div class="message">
      <h2>ZOO</h2>
      <h3>CONNEXION</h3>
    </div>
    <div class="login-box">
      <h1>Connexion</h1>
      <!-- Formulaire -->
      <form method="post" action="c_connexion.php">
        <label>Utilisateur</label>
        <input type="text" name="Pseudo"/>
        <label>Mot de passe</label>
        <!-- Mettre en type password pour que le mdp ne s'affiche pas -->
        <input type="password" name="mdp"/>
        <input type="submit" value="Se connecter" />
      </form>
    </div>
    <p class="para-2">
      Pas de compte ? <a href="inscription.php">Cliquez ici</a>
    </p>
  </body>
</html>

<?php
  //afficher erreur si les codes ne correspondent pas
    if (isset($_GET['erreur']))
    {
      echo "L'utilisateur ou le mot de passe est incorrect";
    }
    ?>
