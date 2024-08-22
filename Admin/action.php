<?php
session_start();
include("..//DataBase/connexion_DB.php");
include("commande.php");
// ================================= AJOUT ANNEE ======================================

if (isset($_POST["btnAjoutAnne"])) {
    $anne = htmlspecialchars($_POST["designation"]);
    saveAnne($db, $anne);
}

if (isset($_POST["btnAeditAnne"])) {
    $anne = htmlspecialchars($_POST["designation"]);
    $status = htmlspecialchars($_POST["status"]);
    $id = htmlspecialchars($_POST["idAnne"]);
    editAnne($db, $anne, $status, $id);
}

// ===================================================================================== ELEVE ================================================================================================

if (isset($_POST["btnSaveEleve"])) {
    $matricule = htmlspecialchars(ucwords($_POST["matricule"]));
    $code = htmlspecialchars(ucwords($_POST["code"]));
    $nom = htmlspecialchars(ucwords($_POST["nom"]));
    $postnom = htmlspecialchars(ucwords($_POST["postnom"]));
    // $section = htmlspecialchars(ucwords($_POST["section"]));
    $classe = htmlspecialchars(ucwords($_POST["classes"]));
    $option = htmlspecialchars(ucwords($_POST["option"]));
    $photo = $_FILES["photo"];
    $dateNaissance = $_POST["dateNaissance"];
    $genre = $_POST["genre"];
    $lieuNaissance = htmlspecialchars(ucwords($_POST["lieuNaissance"]));
    $adresse = htmlspecialchars(ucwords($_POST["adresse"]));
    $ecoleOrigine = htmlspecialchars(ucwords($_POST["ecoleOrigine"]));
    $numeroPermanent = htmlspecialchars(ucwords($_POST["numeroPermanent"]));
    $nationaliter = htmlspecialchars(ucwords($_POST["nationaliter"]));
    $nomTuteur = htmlspecialchars(ucwords($_POST["nomTuteur"]));
    $numTel = htmlspecialchars(ucwords($_POST["numTel"]));
    $anneInscription = htmlspecialchars(ucwords($_POST["anneInscription"]));
    saveEleve($db,$matricule,$nom,$postnom,$code,$genre,$lieuNaissance,$dateNaissance,$adresse,$ecoleOrigine,$numeroPermanent,$nomTuteur,$numTel,$nationaliter,$photo,$classe,$anneInscription);
}

if (isset($_POST["btnEditEleve"])) {
    $id_eleve = $_SESSION["idEleve"];
    $id_inscription=$_SESSION["idInscriptio"];
    $matricule = htmlspecialchars(ucwords($_POST["matricule"]));
    $code = htmlspecialchars(ucwords($_POST["code"]));
    $nom = htmlspecialchars(ucwords($_POST["nom"]));
    $postnom = htmlspecialchars(ucwords($_POST["postnom"]));
    // $section = htmlspecialchars(ucwords($_POST["section"]));
    $classe = htmlspecialchars(ucwords($_POST["classes"]));
    // $option = htmlspecialchars(ucwords($_POST["option"]));
    $photo = $_FILES["photo"];
    $dateNaissance = $_POST["dateNaissance"];
    $genre = $_POST["genre"];
    $lieuNaissance = htmlspecialchars(ucwords($_POST["lieuNaissance"]));
    $adresse = htmlspecialchars(ucwords($_POST["adresse"]));
    $ecoleOrigine = htmlspecialchars(ucwords($_POST["ecoleOrigine"]));
    $numeroPermanent = htmlspecialchars(ucwords($_POST["numeroPermanent"]));
    $nationaliter = htmlspecialchars(ucwords($_POST["nationaliter"]));
    $nomTuteur = htmlspecialchars(ucwords($_POST["nomTuteur"]));
    $numTel = htmlspecialchars(ucwords($_POST["numTel"]));
    $anneInscription = htmlspecialchars(ucwords($_POST["anneInscription"]));
    eleveEdit($db,$matricule,$nom,$postnom,$code,$genre,$lieuNaissance,$dateNaissance,$adresse,$ecoleOrigine,$numeroPermanent,$nomTuteur,$numTel,$nationaliter,$photo,$classe,$anneInscription,$id_eleve,$id_inscription);
}

if (isset($_GET["action"]) and $_GET["action"] == "supprimer") {
    $eleveSup = deleteEleve($db,$_GET["eleve"]);
}
// ==================================================================== SALLE DE CLASSES ===============================================================


if (isset($_POST["btnAjoutClasses"])) {
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $option = htmlspecialchars($_POST["option"]);
    $section = htmlspecialchars($_POST["section"]);
    $titulaire = htmlspecialchars($_POST["titulaire"]);
    saveClasses($db, $designation, $section, $option, $titulaire);
}




// ==================================================================== OPTION ===============================================================


if (isset($_POST["btnSaveOption"])) {
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $section = htmlspecialchars($_POST["section"]);
    saveOption($db,$designation,$section);
}



// ==================================================================== SECTION ===============================================================


if (isset($_POST["btnSaveSection"])) {
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    saveSection($db,$designation);
}



// ===================================================================================== PROFFESEURS ================================================================================================

if (isset($_POST["btnSaveProf"])) {
    $matricule = htmlspecialchars(ucwords($_POST["matricule"]));
    $nom = htmlspecialchars(ucwords($_POST["nom"]));
    $postNom = htmlspecialchars(ucwords($_POST["postNom"]));
    $categorie = htmlspecialchars(ucwords($_POST["categorie"]));
    $salaire = htmlspecialchars(ucwords($_POST["salaire"]));
    $numTele = htmlspecialchars(ucwords($_POST["numTele"]));
    $adress = htmlspecialchars(ucwords($_POST["adress"]));
    $photo = $_FILES["photo"];
    saveProf($db, $matricule, $nom, $postNom,$categorie,$salaire,$numTele,$adress,$photo);
}