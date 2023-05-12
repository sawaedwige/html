<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_de_naissance=$_POST['naissance'];
require'connexion.php';
$sawa="INSERT INTO `liste`(Nom, prénom, Date_de_naissance) VALUES ('$nom','$prenom','$date_de_naissance')";
    if($connexion->query($sawa)===True){
        echo "succes";

    }
    else{
        echo "erreur";

    }
?>