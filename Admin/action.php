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

// ================================= ELEVE ======================================

if(isset($_POST["btnSaveEleve"]))
{
    $matricule = htmlspecialchars(ucwords($_POST["matricule"]));
    $code = htmlspecialchars(ucwords($_POST["code"]));
    $nom = htmlspecialchars(ucwords($_POST["nom"]));
    $postnom = htmlspecialchars(ucwords($_POST["postnom"]));
    $section = htmlspecialchars(ucwords($_POST["section"]));
    $classe = htmlspecialchars(ucwords($_POST["classe"]));
    $option = htmlspecialchars(ucwords($_POST["option"]));
    $photo = $_FILES["photo"];
    saveEleve($db,$matricule,$nom,$postnom,$code,$section,$option,$classe,$photo);

}









?>