<?php
        session_start();
        include("commande.php");
        include("..//DataBase/connexion_DB.php");
        $id_Prof = $_GET["prof"];
        if (isset($_GET["actions"]) and $_GET["actions"] == "supprimer") {
            $eleveSup = deleteEleve($db,$id_Prof);
            // echo $id_Prof;
        }
        
      ?>
