<?php
// ================================= LOGIN ADMIN ======================================
function loginAdmin($db, $pseudo, $pwd)
{
    try {
        $req = $db->prepare("SELECT * FROM `tb_adnim` WHERE `Pseudo`=? AND `mot_de_passe`=?");
        $req = $req->execute(array($pseudo, $pwd));
        if ($req->rowCount() > 0) {
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            setcookie("admin", serialize($data), time() + (365 * 24 * 60 * 60));
            return $data;
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
