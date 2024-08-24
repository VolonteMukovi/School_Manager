<?php
session_start();
include("commande.php");
include("..//DataBase/connexion_DB.php");

if (isset($_GET["eleve"])) {
  if (isset($_GET["action"]) and $_GET["action"] == "supprimer") {
    deleteEleve($db,$_GET["eleve"]);
  
  }
}
else if (isset($_GET["cour"])) {
  $id_Prof = $_GET["cour"];
  if (isset($_GET["actions"]) and $_GET["actions"] == "supprimer") {
    $eleveSup = deleteCours($db, $id_Prof);
  }

}

if(isset($_GET["epreuve"])){
  if (isset($_GET["action"]) and $_GET["action"]=="suppression")
  {
    deletEpreuve($db,$_GET["epreuve"]);
  }
}


if(isset($_GET["periode"])){
  if (isset($_GET["action"]) and $_GET["action"]=="suppression")
  {
    deletPeriode($db,$_GET["periode"]);
  }
}


if(isset($_GET["section"])){
  if (isset($_GET["action"]) and $_GET["action"]=="suppression")
  {
    sectionDelete($db,$_GET["section"]);
  }
}



if(isset($_GET["option"])){
  if (isset($_GET["action"]) and $_GET["action"]=="suppression")
  {
    optionDelete($db,$_GET["option"]);
  }
}

if(isset($_GET["prof"])){
  if (isset($_GET["actions"]) and $_GET["actions"]=="supprimer")
  {
    deleteProf($db,$_GET["prof"]);
  }
}