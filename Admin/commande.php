<?php
include("../DataBase/connexion_DB.php");
$db = $db;
// ================================= LOGIN ADMIN ======================================
function loginAdmin($pseudo, $pwd)
{
    global $db;
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

function AfficheAdmin()
{
    global $db;
    try {
        $req = $db->query("SELECT * FROM `tb_adnim`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function editAdmin($pseudo,$pwd)
{
    global $db;
    try {
        $req = $db->prepare("UPDATE `tb_adnim` SET `Pseudo` = ?,`mot_de_passe`=? ");
        $req->execute(array($pseudo,$pwd));
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ================================= ANNEE SCHOLAIRE ======================================

function saveAnne($db, $pseudo, $pwd)
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
 