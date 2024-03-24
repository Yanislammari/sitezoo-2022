<HTML>
</HEAD>
<BODY>
<?php
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");

$ID = $_GET['ID'];
$nom = $_GET['Nom'];
$prenom = $_GET['Prenom'];
$date = $_GET['Date'];
$sexe = $_GET['Sexe'];
$fonction = $_GET['Fonction'];
$salaire = $_GET['Salaire'];

?>

<div class="formulaire">
    <form action="cmodify2.php" method="post">
        <label>ID :</label>
            <input type="text", value="<?php echo $ID ?>" name="ID" readonly>           
          <div  class="divinput">
          <label>Nom :</label>
            <input type="text", value="<?php echo $nom ?>" name="nom">  
            <label>Prenom :</label>
            <input type="text", value="<?php echo $prenom ?>" name="prenom">
          <label>Date de naissance :</label>
            <input type="date" value="<?php echo $date ?>" name="date">     
          </div>     

            <label>Sexe :</label>
            <div  class="divinput"> <label>HOMME :</label>
            <?php 
            if($sexe == "H")
            {
                ?>
                <input type="checkbox" name="H" checked></div>
                <div class="divinput"> <label>FEMME :</label>
                <input type="checkbox" name="F"></div>
                <?php
            }
            else
            {
                ?>
                <input type="checkbox" name="H" ></div>
                <div class="divinput"> <label>FEMME :</label>
                <input type="checkbox" name="F" checked></div>
                <?php
            }
            ?>

            <label>Fonction :</label>
            <input type="text" value="<?php echo $fonction ?>" name="fonction">

            <br>
            <label>Salaire :</label>
            <input type="text" value="<?php echo $salaire ?>"  name="salaire">
            <div class="divinput"> <input type="submit" name="valid" value="Modifier l'employé"></div>
    </form>
    </div>

<?php
#$sql = "DELETE FROM animaux WHERE ID = $id";
#mysqli_query($idc,$sql);
#header('Location:affiche.php');
#    exit;

mysqli_close ($idc) ;
?>
</BODY>
</HTML>

<?php 
    if(isset($_GET['erreur']))
    {
        echo "<p align='center'><b><font size='7' color='#FF3399'> Erreur ! Attention deux options sont coches pour les animaux </font></b></p> ";
    }
?>

<?php 
    if(isset($_GET['erreur2']))
    {
        echo "<p align='center'><b><font size='7' color='#FF3399'> Erreur ! Vous n'avez coche aucune option pour les animaux </font></b></p> ";
    }
?>