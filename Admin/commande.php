<?php
// ================================= LOGIN ADMIN ======================================
function loginAdmin($db, $pseudo, $pwd)
{
    try {
        $req = $db->query("SELECT * FROM `tb_adnim` WHERE `Pseudo`='".$pseudo."' AND `mot_de_passe`='".$pwd."'");
        if ($req->rowCount() > 0) {
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            setcookie("admin", serialize($data), time() + (365 * 24 * 60 * 60));
            return TRUE;
        } else {
            return FALSE;
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function AfficheAdmin($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_adnim`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function editAdmin($db,$pseudo,$pwd)
{
    try {
        $req = $db->prepare("UPDATE `tb_adnim` SET `Pseudo` = ?,`mot_de_passe`=? ");
        $req->execute(array($pseudo,$pwd));
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ================================= ANNEE SCHOLAIRE ======================================

function saveAnne($db,$anne)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_annee_scholaire`(`annee`) VALUES (?)");
        $req->execute(array($anne));
        header("location: dasboard.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function editAnne($db,$anne,$status,$id)
{
    try {
        $req = $db->prepare("UPDATE `tb_annee_scholaire` SET `annee`=?,`status`=? WHERE `ID_anne_scholaire`=?");
        $req->execute(array($anne,$status,$id));
        header("location: dasboard.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function AfficheAnnee($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_annee_scholaire` ORDER BY `annee` DESC");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function anneeEncours($db)
{       $status = "Annee en cours";
    try {
        $req = $db->query("SELECT * FROM `tb_annee_scholaire` WHERE `status` = '" . $status. "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function clotureAnne($db,$id)
{
    try {
        $req = $db->prepare("UPDATE `tb_annee_scholaire` SET `status`=? WHERE `ID_anne_scholaire`=?");
        $req->execute(array("Clôturer",$id));
    } catch (Exception $e) {
        $e->getMessage();
    }
}
 