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
     deleteEleve($db,$_GET["eleve"]);
}
// ==================================================================== SALLE DE CLASSES ===============================================================


if (isset($_POST["btnAjoutClasses"])) {
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $option = htmlspecialchars($_POST["option"]);
    $section = htmlspecialchars($_POST["section"]);
    $titulaire = htmlspecialchars($_POST["titulaire"]);
    $montatPaye = htmlspecialchars($_POST["montatPayer"]);
    saveClasses($db, $designation, $section, $option, $titulaire,$montatPaye);
}

if (isset($_POST["btnEditClass"])) {
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $option = htmlspecialchars($_POST["option"]);
    $section = htmlspecialchars($_POST["section"]);
    $titulaire = htmlspecialchars($_POST["titulaire"]);
    $montatPaye = htmlspecialchars($_POST["montatPayer"]);
    editClasses($db,$designation,$section,$option,$titulaire,$montatPaye,$_SESSION["idClass"]);
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

if (isset($_POST["btnUpdateSection"])) {
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $idSection = $_SESSION["idSection"];
    sectionEdit($db,$idSection,$designation);
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

if (isset($_POST["btneditProf"])) {
    $matricule = htmlspecialchars(ucwords($_POST["matricule"]));
    $nom = htmlspecialchars(ucwords($_POST["nom"]));
    $postNom = htmlspecialchars(ucwords($_POST["postNom"]));
    $categorie = htmlspecialchars(ucwords($_POST["categorie"]));
    $salaire = htmlspecialchars(ucwords($_POST["salaire"]));
    $numTele = htmlspecialchars(ucwords($_POST["numTele"]));
    $adress = htmlspecialchars(ucwords($_POST["adress"]));
    $photo = $_FILES["photo"];
   
    $id_Prof = $_SESSION["idprof"];

    $eleveSup = editProf($db,$matricule, $nom, $postNom,$categorie,$salaire,$numTele,$adress,$photo,$id_Prof);

}
$id_Prof = $_SESSION["idprof"];
if (isset($_GET["actions"]) and $_GET["actions"] == "supprimer") {
    $eleveSup = deleteEleve($db,$id_Prof);
}


// ============================================================ COURS ====================================================

if(isset($_POST["btnSaveCour"]))
{
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $enseignant = htmlspecialchars(ucwords($_POST["titulaire"]));
    $cote_totale = htmlspecialchars(ucwords($_POST["cote_totale"]));
    $classe = htmlspecialchars(ucwords($_POST["classes"]));
    $option = htmlspecialchars(ucwords($_POST["option"]));
    $nb_heures = htmlspecialchars(ucwords($_POST["nb_heures"]));
    $codeCour = htmlspecialchars(ucwords($_POST["codeCour"]));
    $nb_heures = htmlspecialchars(ucwords($_POST["nb_heures"]));


    saveCours($db,$cote_totale,$nb_heures,$enseignant,$classe,$option,$designation,$codeCour);
}



if(isset($_POST["btneditCour"]))
{
    $designation = htmlspecialchars(ucwords($_POST["designation"]));
    $enseignant = htmlspecialchars(ucwords($_POST["titulaire"]));
    $cote_totale = htmlspecialchars(ucwords($_POST["cote_totale"]));
    $classe = htmlspecialchars(ucwords($_POST["classes"]));
    $option = htmlspecialchars(ucwords($_POST["option"]));
    $nb_heures = htmlspecialchars(ucwords($_POST["nb_heures"]));
    $codeCour = htmlspecialchars(ucwords($_POST["codeCour"]));
    $nb_heures = htmlspecialchars(ucwords($_POST["nb_heures"]));

    coursEdit($db,$cote_totale,$nb_heures,$enseignant,$classe,$option,$designation,$codeCour,$_SESSION["idcour"]);

   
}


// ====================================================== EPREUVE ==============================================================
if (isset($_POST["btnSave"])) {
    $epreuve = htmlspecialchars($_POST["designation"]);
    saveEpreuve($db,$epreuve);
}

if (isset($_POST["btnUpdate"])) {
    $epreuve = htmlspecialchars($_POST["designation"]);
    $id_epreuve = $_SESSION["idEpreuve"];
    epreuvedit($db,$id_epreuve,$epreuve);
    
}



// ====================================================== PERIODE ==============================================================
if (isset($_POST["btnSavePeriode"])) {
    $periode = htmlspecialchars($_POST["designation"]);
    savePeriode($db,$periode);
}

if (isset($_POST["btnEditPeriode"])) {
    $periode = htmlspecialchars($_POST["designation"]);

   $id_periode = $_SESSION["idPeriode"];


    echo $id_periode;


    periodEdit($db,$id_periode,$periode);  
    
    
    
}