<?php
session_start();

$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");


$pseudo = $_POST['Pseudo'];
$password = $_POST['mdp'];



    $exe = ("SELECT * FROM comptes WHERE Pseudo ='".$pseudo."'"); 
    $execution = mysqli_query($idc, $exe); 
    $exec = mysqli_fetch_array($execution);

    if($pseudo == $exec['Pseudo'] and $password == $exec['mdp'])
    {   
        echo "VRAI";
        $ever = $_SESSION['profil'] = $exec['Pseudo'];
        $ever2 = $_SESSION['type'] = $exec['types'];
        header('Location: description.php');
    }
    else
    {
        header('location:connexion.php?erreur=existe');
	  }

?>