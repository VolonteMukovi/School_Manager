<?php
include("..//DataBase/connexion_DB.php");include("commande.php");
// ================================= AJOUT ANNEE ======================================

if(isset($_POST["btnAjoutAnne"]))
{
    $anne = htmlspecialchars($_POST["designation"]);
    saveAnne($db,$anne);

}

if(isset($_POST["btnAeditAnne"]))
{
    $anne = htmlspecialchars($_POST["designation"]);
    $status = htmlspecialchars($_POST["status"]);
    $id = htmlspecialchars($_POST["idAnne"]);
    editAnne($db,$anne,$status,$id);

}











?>