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
