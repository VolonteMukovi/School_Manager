<?php

        include("commande.php");
        include("..//DataBase/connexion_DB.php");
        if (isset($_GET["action"]) and $_GET["action"] == "supprimer") {
            $eleveSup = deleteEleve($db,$_GET["eleve"]);
        }
      ?>
