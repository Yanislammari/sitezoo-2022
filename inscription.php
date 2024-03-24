<!DOCTYPE html>
<html lang="en">
  <head>
    <title>inscription</title>
    <link rel="stylesheet" href="inscription.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"rel="stylesheet"/>
  </head>
  <body background="fondepage2.png">
    <div class="message">
      <h2>ZOO</h2>
      <h3>INSCRIPTION</h3>
    </div>
    <div class="login-box">
      <h1>Inscription</h1>
      <!-- Formulaire -->
      <form method="post" action="c_inscription.php">
        <label>Utilisateur</label>
        <input type="text" name="pseudo"/>
        <label>Email</label>
        <input type="email" name="email"/>
        <label>Mot de passe</label>
        <!-- Mettre en type password pour que le mdp ne s'affiche pas -->
        <input type="password" name="mdp"/>
        Type du compte : <select name="type">
          <option value="Visiteur">Visiteur</option>
          <option value="Admin">Admin</option>
        <input type="submit" value="S'inscrire" />
      </form>
    </div>
    <p class="para-2">
      Deja un compte ? <a href="connexion.php">Cliquez ici</a>
    </p>
  </body>
</html>