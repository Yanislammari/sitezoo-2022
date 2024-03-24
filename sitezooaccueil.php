<?php
if(isset($pseudo) && isset($mdp)) 
{
include 'c_connexion.php';
session_start();
}
else
{
session_start();
}

?>








<!-- partial -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <div class="bienvenue"><h1>Gestion employé/animaux</h1></div>
  <a href="gestionanimaux.php">
  <div class="gestionanimaux">
  <h2>Gestion Animaux</h2>
  </div> 
  </a>
  <a href="gestionemploye.php">
  <div class="gestionemploye">
    <h2>Gestion Employe</h2>
    </div> 
  </a>
</body>

    <div class="barre">
    <br>
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br>
    </div>
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <footer>
</footer>
</html>