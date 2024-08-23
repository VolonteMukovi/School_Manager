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
