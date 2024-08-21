<?php
include("..//DataBase/connexion_DB.php");include("commande.php");
// ================================= AJOUT ANNEE ======================================

if(isset($_POST["btnAjoutAnne"]))
{
    $anne = htmlspecialchars($_POST["designation"]);
    saveAnne($db,$anne);

}











?>