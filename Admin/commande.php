<?php
// ================================= LOGIN ADMIN ======================================
function loginAdmin($db, $pseudo, $pwd)
{
    try {
        $req = $db->query("SELECT * FROM `tb_adnim` WHERE `Pseudo`='" . $pseudo . "' AND `mot_de_passe`='" . $pwd . "'");
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


function editAdmin($db, $pseudo, $pwd)
{
    try {
        $req = $db->prepare("UPDATE `tb_adnim` SET `Pseudo` = ?,`mot_de_passe`=? ");
        $req->execute(array($pseudo, $pwd));
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ======================================================================= ANNEE SCHOLAIRE =======================================================================

function saveAnne($db, $anne)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_annee_scholaire`(`annee`) VALUES (?)");
        $req->execute(array($anne));
        header("location: dasboard.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function editAnne($db, $anne, $status, $id)
{
    try {
        $req = $db->prepare("UPDATE `tb_annee_scholaire` SET `annee`=?,`status`=? WHERE `ID_anne_scholaire`=?");
        $req->execute(array($anne, $status, $id));
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
{
    $status = "Annee en cours";
    try {
        $req = $db->query("SELECT * FROM `tb_annee_scholaire` WHERE `status` = '" . $status . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function clotureAnne($db, $id)
{
    try {
        $req = $db->prepare("UPDATE `tb_annee_scholaire` SET `status`=? WHERE `ID_anne_scholaire`=?");
        $req->execute(array("Clôturer", $id));
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== INSCRIPTION ELEVE ===============================================================

function saveEleve($db,$matricule_eleve,$nom_eleve,$postnom,$code,$genre_eleve,$lieuNaissance_eleve,$dateNaissance_eleve,$adress_eleve,$ecoleOrigine_eleve,$numePerma_eleve,$nomTuteur_eleve,$numeTelTuteur_eleve,$nationalite_eleve,$photo,$id_classes_inscript,$anneeScholair_inscript)
{
    if (isset($photo) and $photo['error'] == 0) {
        if ($photo['size'] <= 1000000000000000000000000000000000000000000000000000000000000) {
            $infosfichier = pathinfo($photo['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('png', 'jpg', 'jpeg', "avif");
            if (in_array($extension_upload, $extensions_autorisees)) {
                if (move_uploaded_file($photo['tmp_name'], './Images/' . basename($photo['name']))) {
                    try {
                        $req =  $db->prepare("INSERT INTO `tb_eleve`(`Matricule_eleve`, `Nom_eleve`, `postnom`, `code`, `genre_eleve`, `lieuNaissance_eleve`, `dateNaissance_eleve`, `adress_eleve`, `ecoleOrigine_eleve`, `numePerma_eleve`, `nomTuteur_eleve`, `numeTelTuteur_eleve`, `Nationalite_eleve`, `Photo_eleve`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                        $req->execute(array($matricule_eleve,$nom_eleve,$postnom,$code,$genre_eleve,$lieuNaissance_eleve,$dateNaissance_eleve,$adress_eleve,$ecoleOrigine_eleve,$numePerma_eleve,$nomTuteur_eleve,$numeTelTuteur_eleve,$nationalite_eleve,basename($photo['name'])));
                        $id_eleve_inscript = $db->lastInsertId();
                        $req =  $db->prepare("INSERT INTO `tb_inscription`(`id_eleve_inscript`, `id_classes_inscript`, `anneeScholair_inscript`) VALUES (?,?,?)");
                        $req->execute(array($id_eleve_inscript,$id_classes_inscript,$anneeScholair_inscript));
                        unset($_POST);
                        ?>
                            <script>alert("Enrégistrement Réussit Avec Succèss")</script>
                        <?php
                        header("location: ajouts_eleves.php");
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                } else {
                    echo "Votre image n'as pas pui etre envoiye au serveur veillez ressayer";
                }
            } else {
                echo "L'extension est incorrect";
            }
        } else {
            echo "Veille verifier la taille de votre image peut etre il esg grand par rapport a la taille autorise";
        }
    } else {
        echo "Votre image n'as pas pu etre trouver ou elle eroner rassayer svp";
    }
}

function afficheEleve($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_adnim`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


// ==================================================================== SALLE DE CLASSES ===============================================================
function saveClasses($db,$designation_class,$id_section,$id_option,$titulaire_class)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_classes`(`designation_classes`, `id_section`, `id_option`, `titulaire_classes`) VALUES (?,?,?,?)");
        $req->execute(array($designation_class,$id_section,$id_option,$titulaire_class));
        header("location: ajouts_classes.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheClasses($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_classes` INNER JOIN tb_section ON tb_section.ID_section=tb_classes.id_section INNER JOIN tb_option ON tb_option.ID_option=tb_classes.id_option INNER JOIN tb_professeur ON tb_professeur.ID_prof=tb_classes.titulaire_classes");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}



// ==================================================================== OPTIONS ===============================================================
function saveOption($db,$designation_option,$id_section)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_option`(`designation_option`, `id_section`) VALUES (?,?)");
        $req->execute(array($designation_option,$id_section));
        header("location: ajout_option.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheOption($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_option`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== SECTIONS ===============================================================
function saveSection($db,$designation_section)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_section`(`designation_section`) VALUES (?)");
        $req->execute(array($designation_section));
        header("location: ajout_section.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheSection($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_section`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


// ==================================================================== PROFFESEURS ===============================================================

function saveProf($db,$matricule_prof,$nom_prof,$postNom_prof,$categorie_prof,$salaire_prof,$numtel_prof,$adress_prof,$photo)
{
    if (isset($photo) and $photo['error'] == 0) {
        if ($photo['size'] <= 1000000000000000000000000000000000000000000000000000000000000) {
            $infosfichier = pathinfo($photo['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('png', 'jpg', 'jpeg', "avif");
            if (in_array($extension_upload, $extensions_autorisees)) {
                if (move_uploaded_file($photo['tmp_name'], './Images/' . basename($photo['name']))) {
                    try {
                        $req =  $db->prepare("INSERT INTO `tb_professeur`(`Matricule_prof`, `Nom_prof`, `PostNom_prof`, `categorie_prof`, `salaire_prof`, `Numtel_prof`, `Adress_prof`, `photo_prof`) VALUES (?,?,?,?,?,?,?,?)");
                        $req->execute(array($matricule_prof,$nom_prof,$postNom_prof,$categorie_prof,$salaire_prof,$numtel_prof,$adress_prof, basename($photo['name'])));
                        unset($_POST);
                        ?>
                            <script>alert("Enrégistrement Réussit Avec Succèss")</script>
                        <?php
                        header("location: ajouts_prof.php");
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                } else {
                    echo "Votre image n'as pas pui etre envoiye au serveur veillez ressayer";
                }
            } else {
                echo "L'extension est incorrect";
            }
        } else {
            echo "Veille verifier la taille de votre image peut etre il esg grand par rapport a la taille autorise";
        }
    } else {
        echo "Votre image n'as pas pu etre trouver ou elle eroner rassayer svp";
    }
}


function afficheProf($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_professeur`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


