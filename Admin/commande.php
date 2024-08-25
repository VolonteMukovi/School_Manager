<?php
// ======================================================== LOGIN ADMIN =======================================================================================================
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
        $anneeEncours = 'Annee en cours';
        $req = $db->query("SELECT * FROM `tb_annee_scholaire` WHERE tb_annee_scholaire.status = '" . $anneeEncours . "' ORDER BY `annee` DESC");
        if ($req->rowCount() > 0) {
?>
            <script>
                alert("Il existe déjà L'année en cours , Pour Commencer l'autre Cloturer se qui est En cours");
                window.location.href = "dasboard.php";
            </script>
            <?php

        } else {
            $req = $db->prepare("INSERT INTO `tb_annee_scholaire`(`annee`) VALUES (?)");
            $req->execute(array($anne));
            header("location: dasboard.php");
        }
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

function AfficheAnneePasser($db)
{
    try {
        $annee = 'Annee en cours';
        $req = $db->query("SELECT * FROM `tb_annee_scholaire` WHERE tb_annee_scholaire.status='" . $annee . "' ORDER BY `annee` DESC");
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
        $req->execute(array("Cloturer", $id));
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== INSCRIPTION ELEVE ===============================================================

function saveEleve($db, $matricule_eleve, $nom_eleve, $postnom, $code, $genre_eleve, $lieuNaissance_eleve, $dateNaissance_eleve, $adress_eleve, $ecoleOrigine_eleve, $numePerma_eleve, $nomTuteur_eleve, $numeTelTuteur_eleve, $nationalite_eleve, $photo, $id_classes_inscript, $anneeScholair_inscript)
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
                        $req->execute(array($matricule_eleve, $nom_eleve, $postnom, $code, $genre_eleve, $lieuNaissance_eleve, $dateNaissance_eleve, $adress_eleve, $ecoleOrigine_eleve, $numePerma_eleve, $nomTuteur_eleve, $numeTelTuteur_eleve, $nationalite_eleve, basename($photo['name'])));
                        $id_eleve_inscript = $db->lastInsertId();
                        $req =  $db->prepare("INSERT INTO `tb_inscription`(`id_eleve_inscript`, `id_classes_inscript`, `anneeScholair_inscript`) VALUES (?,?,?)");
                        $req->execute(array($id_eleve_inscript, $id_classes_inscript, $anneeScholair_inscript));
                        unset($_POST);
            ?>
                        <script>
                            alert("Enrégistrement Réussit Avec Succèss")
                        </script>
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
        $annee = "Annee en cours";
        $req = $db->query("SELECT * FROM tb_inscription JOIN tb_eleve ON tb_inscription.id_eleve_inscript = tb_eleve.ID_eleve JOIN tb_classes ON tb_inscription.id_classes_inscript = tb_classes.ID_classes JOIN tb_annee_scholaire ON tb_inscription.anneeScholair_inscript = tb_annee_scholaire.ID_anne_scholaire JOIN tb_option ON tb_classes.id_option = tb_option.ID_option JOIN tb_section ON tb_option.id_section = tb_section.ID_section WHERE tb_annee_scholaire.status='" . $annee . "'");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheEleveEdit($db, $id_eleve)
{
    try {
        $annee = "Annee en cours";
        $req = $db->query("SELECT * FROM tb_inscription JOIN tb_eleve ON tb_inscription.id_eleve_inscript = tb_eleve.ID_eleve JOIN tb_classes ON tb_inscription.id_classes_inscript = tb_classes.ID_classes JOIN tb_annee_scholaire ON tb_inscription.anneeScholair_inscript = tb_annee_scholaire.ID_anne_scholaire JOIN tb_option ON tb_classes.id_option = tb_option.ID_option JOIN tb_section ON tb_option.id_section = tb_section.ID_section WHERE tb_annee_scholaire.status='" . $annee . "' and tb_eleve.ID_eleve = '" . $id_eleve . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function eleveEdit($db, $matricule_eleve, $nom_eleve, $postnom, $code, $genre_eleve, $lieuNaissance_eleve, $dateNaissance_eleve, $adress_eleve, $ecoleOrigine_eleve, $numePerma_eleve, $nomTuteur_eleve, $numeTelTuteur_eleve, $nationalite_eleve, $photo, $id_classes_inscript, $anneeScholair_inscript, $ide_eleve, $id_inscription)
{
    if (isset($photo) and $photo['error'] == 0) {
        if ($photo['size'] <= 1000000000000000000000000000000000000000000000000000000000000) {
            $infosfichier = pathinfo($photo['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('png', 'jpg', 'jpeg', "avif");
            if (in_array($extension_upload, $extensions_autorisees)) {
                if (move_uploaded_file($photo['tmp_name'], './Images/' . basename($photo['name']))) {
                    try {
                        $req =  $db->prepare("UPDATE `tb_eleve` SET `Matricule_eleve`=?,`Nom_eleve`=?,`postnom`=?,`code`=?,`genre_eleve`=?,`lieuNaissance_eleve`=?,`dateNaissance_eleve`=?,`adress_eleve`=?,`ecoleOrigine_eleve`=?,`numePerma_eleve`=?,`nomTuteur_eleve`=?,`numeTelTuteur_eleve`=?,`Nationalite_eleve`=?, `Photo_eleve`=? WHERE `ID_eleve`=?");
                        $req->execute(array($matricule_eleve, $nom_eleve, $postnom, $code, $genre_eleve, $lieuNaissance_eleve, $dateNaissance_eleve, $adress_eleve, $ecoleOrigine_eleve, $numePerma_eleve, $nomTuteur_eleve, $numeTelTuteur_eleve, $nationalite_eleve, basename($photo['name']), $ide_eleve));
                        $req =  $db->prepare("UPDATE `tb_inscription` SET `id_classes_inscript`=?,`anneeScholair_inscript`=? WHERE `ID_inscription` =?");
                        $req->execute(array($id_classes_inscript, $anneeScholair_inscript, $id_inscription));
                        unset($_POST);
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

        try {
            $req =  $db->prepare("UPDATE `tb_eleve` SET `Matricule_eleve`=?,`Nom_eleve`=?,`postnom`=?,`code`=?,`genre_eleve`=?,`lieuNaissance_eleve`=?,`dateNaissance_eleve`=?,`adress_eleve`=?,`ecoleOrigine_eleve`=?,`numePerma_eleve`=?,`nomTuteur_eleve`=?,`numeTelTuteur_eleve`=?,`Nationalite_eleve`=? WHERE `ID_eleve`=?");
            $req->execute(array($matricule_eleve, $nom_eleve, $postnom, $code, $genre_eleve, $lieuNaissance_eleve, $dateNaissance_eleve, $adress_eleve, $ecoleOrigine_eleve, $numePerma_eleve, $nomTuteur_eleve, $numeTelTuteur_eleve, $nationalite_eleve, $ide_eleve));
            $req =  $db->prepare("UPDATE `tb_inscription` SET `id_classes_inscript`=?,`anneeScholair_inscript`=? WHERE `ID_inscription` =?");
            $req->execute(array($id_classes_inscript, $anneeScholair_inscript, $id_inscription));
            unset($_POST);
            header("location: inscrits.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

function deleteEleve($db, $id_eleve)
{
    try {
        $req = $db->query("DELETE FROM `tb_eleve` WHERE `ID_eleve` = '" . $id_eleve . "' ");
        header("location: inscrits.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function AfficheAnneePasserEleve($db, $annee, $status)
{
    try {
        $req = $db->query("SELECT * FROM tb_inscription JOIN tb_eleve ON tb_inscription.id_eleve_inscript = tb_eleve.ID_eleve JOIN tb_classes ON tb_inscription.id_classes_inscript = tb_classes.ID_classes JOIN tb_annee_scholaire ON tb_inscription.anneeScholair_inscript = tb_annee_scholaire.ID_anne_scholaire JOIN tb_option ON tb_classes.id_option = tb_option.ID_option JOIN tb_section ON tb_option.id_section = tb_section.ID_section WHERE tb_annee_scholaire.annee ='" . $annee . "' AND `status`='" . $status . "'");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function countEleve($db)
{
    try {
        $annee = "Annee en cours";
        $req = $db->query("SELECT COUNT(*) AS nbrEleve FROM tb_inscription JOIN tb_eleve ON tb_inscription.id_eleve_inscript = tb_eleve.ID_eleve JOIN tb_classes ON tb_inscription.id_classes_inscript = tb_classes.ID_classes JOIN tb_annee_scholaire ON tb_inscription.anneeScholair_inscript = tb_annee_scholaire.ID_anne_scholaire JOIN tb_option ON tb_classes.id_option = tb_option.ID_option JOIN tb_section ON tb_option.id_section = tb_section.ID_section WHERE tb_annee_scholaire.status = '".$annee."'");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== SALLE DE CLASSES ===============================================================
function saveClasses($db, $designation_class, $id_section, $id_option, $titulaire_class, $montaPayer)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_classes`(`designation_classes`, `id_section`, `id_option`, `titulaire_classes`,`montantPayeClass`) VALUES (?,?,?,?,?)");
        $req->execute(array($designation_class, $id_section, $id_option, $titulaire_class, $montaPayer));
        header("location: ajouts_classes.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheClassesEdit($db, $id_classes)
{
    try {
        $req = $db->query("SELECT * FROM `tb_classes` INNER JOIN tb_section ON tb_section.ID_section=tb_classes.id_section INNER JOIN tb_option ON tb_option.ID_option=tb_classes.id_option INNER JOIN tb_professeur ON tb_professeur.ID_prof=tb_classes.titulaire_classes  WHERE `ID_classes`='" . $id_classes . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
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


function editClasses($db, $designation_class, $id_section, $id_option, $titulaire_class, $montaPayer, $id_class)
{
    try {
        $req = $db->prepare("UPDATE `tb_classes` SET `designation_classes`=?,`id_section`=?,`id_option`=?,`titulaire_classes`=?,`montantPayeClass`=? WHERE `ID_classes`=?");
        $req->execute(array($designation_class, $id_section, $id_option, $titulaire_class, $montaPayer, $id_class));
        header("location: ajouts_classes.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function deleteClasses($db, $id_class)
{
    try {
        $req = $db->prepare("DELETE FROM `tb_classes` WHERE `ID_classes`=?");
        $req->execute(array($id_class));
        header("location: classes.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}



// ==================================================================== OPTIONS ===============================================================
function saveOption($db, $designation_option, $id_section)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_option`(`designation_option`, `id_section`) VALUES (?,?)");
        $req->execute(array($designation_option, $id_section));
        header("location: ajout_option.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheOption($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_option` INNER JOIN tb_section ON tb_section.ID_section = tb_option.id_section");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}
function updateOption($db, $designation_option, $id_section)
{
    try {
        $req =  $db->prepare("UPDATE `tb_option` SET = `designation_option`=?,`id_section`=? WHERE `ID_option`=?");
        $req->execute(array($db, $designation_option, $id_section));
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function afficheOptionEdit($db, $id_option)
{
    try {
        $req = $db->query("SELECT * FROM `tb_option` INNER JOIN tb_section ON tb_section.ID_section = tb_option.id_section WHERE `ID_option` = '" . $id_option . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function optionDelete($db, $id_section)
{
    try {
        $req = $db->prepare("DELETE FROM `tb_option` WHERE `ID_option` = '" . $id_section . "' ");
        $req->execute(array($id_section));
        header("location: options.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function countOption($db)
{
    try {
        $req = $db->query("SELECT COUNT(*) AS nbrOption FROM `tb_option`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== SECTIONS ===============================================================
function saveSection($db, $designation_section)
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

function afficheSectionEdit($db, $id_section)
{
    try {
        $req = $db->query("SELECT * FROM `tb_section` WHERE `ID_section`= '" . $id_section . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function sectionEdit($db, $id_section, $designationSection)
{
    try {
        $req = $db->prepare("UPDATE `tb_section` SET `designation_section`=? WHERE `ID_section`=? ");
        $req->execute(array($designationSection, $id_section));
        header("location: section.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function sectionDelete($db, $id_section)
{
    try {
        $req = $db->prepare("DELETE FROM `tb_section` WHERE `ID_section`=?");
        $req->execute(array($id_section));
        header("location: section.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== PROFFESEURS ===============================================================

function saveProf($db, $matricule_prof, $nom_prof, $postNom_prof, $categorie_prof, $salaire_prof, $numtel_prof, $adress_prof, $photo)
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
                        $req->execute(array($matricule_prof, $nom_prof, $postNom_prof, $categorie_prof, $salaire_prof, $numtel_prof, $adress_prof, basename($photo['name'])));
                        unset($_POST);
                    ?>
                        <script>
                            alert("Enrégistrement Réussit Avec Succèss")
                        </script>
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


function editProf($db, $matricule_prof, $nom_prof, $postNom_prof, $categorie_prof, $salaire_prof, $numtel_prof, $adress_prof, $photo, $id_prof)
{
    if (isset($photo) and $photo['error'] == 0) {
        if ($photo['size'] <= 1000000000000000000000000000000000000000000000000000000000000) {
            $infosfichier = pathinfo($photo['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('png', 'jpg', 'jpeg', "avif");
            if (in_array($extension_upload, $extensions_autorisees)) {
                if (move_uploaded_file($photo['tmp_name'], './Images/' . basename($photo['name']))) {
                    try {
                        $req =  $db->prepare("UPDATE `tb_professeur` SET `Matricule_prof`=?,`Nom_prof`=?,`PostNom_prof`=?,`categorie_prof`=?,`salaire_prof`=?,`Numtel_prof`=?,`Adress_prof`=?,`photo_prof`=? WHERE `ID_prof`=?");
                        $req->execute(array($matricule_prof, $nom_prof, $postNom_prof, $categorie_prof, $salaire_prof, $numtel_prof, $adress_prof, basename($photo['name']), $id_prof));
                        unset($_POST);
                        header("location: listes_prof.php");
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
        try {
            $req =  $db->prepare("UPDATE `tb_professeur` SET `Matricule_prof`=?,`Nom_prof`=?,`PostNom_prof`=?,`categorie_prof`=?,`salaire_prof`=?,`Numtel_prof`=?,`Adress_prof`=? WHERE `ID_prof`=?");
            $req->execute(array($matricule_prof, $nom_prof, $postNom_prof, $categorie_prof, $salaire_prof, $numtel_prof, $adress_prof, $id_prof));
            unset($_POST);
            header("location: ajouts_prof.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
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

function afficheProfEdit($db, $id_prof)
{
    try {
        $req = $db->query("SELECT * FROM `tb_professeur` WHERE `ID_prof`= '" . $id_prof . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function afficheProfInfos($db, $id_prof)
{
    try {
        $req = $db->query("SELECT * FROM `tb_cours` INNER JOIN tb_professeur ON tb_professeur.ID_prof = tb_cours.id_enseignat WHERE `ID_prof`= '" . $id_prof . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheProfCours($db, $id_prof)
{
    try {
        $req = $db->query("SELECT * FROM `tb_professeur` WHERE `ID_prof`= '" . $id_prof . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function deleteProf($db, $id_prof)
{
    try {
        $req = $db->query("DELETE FROM `tb_professeur` WHERE `ID_prof` = '" . $id_prof . "' ");
        header("location: listes_prof.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function countPofesseur($db)
{
    try {
        $annee = "Annee en cours";
        $req = $db->query("SELECT COUNT(*) AS nbrProf FROM `tb_professeur`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


// ============================================================================= COURS ==================================================================

function saveCours($db, $cotetotal_cour, $nbHeur_cour, $id_enseignat, $iD_classes, $id_option, $designation_cours, $code_cours)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_cours`(`cotetotal_cour`, `nbHeur_cour`, `id_enseignat`, `ID_classes`, `id_option`, `code_cours`, `designation_cours`) VALUES (?,?,?,?,?,?,?)");
        $req->execute(array($cotetotal_cour, $nbHeur_cour, $id_enseignat, $iD_classes, $id_option, $code_cours, $designation_cours));
        header("location: ajouter_cours.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function deleteCours($db, $id_prof)
{
    try {
        $req = $db->query("DELETE FROM `tb_cours` WHERE `ID_cours` = '" . $id_prof . "' ");
        header("location: cours.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheCours($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_cours` INNER JOIN tb_option ON tb_option.ID_option = tb_cours.id_option JOIN tb_section ON tb_section.ID_section = tb_option.id_section JOIN tb_classes ON tb_classes.ID_classes = tb_cours.ID_classes JOIN tb_professeur ON tb_professeur.ID_prof = tb_cours.id_enseignat");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheCouredit($db, $id_cours)
{
    try {
        $req = $db->query("SELECT * FROM `tb_cours` INNER JOIN tb_option ON tb_option.ID_option = tb_cours.id_option JOIN tb_section ON tb_section.ID_section = tb_option.id_section JOIN tb_classes ON tb_classes.ID_classes = tb_cours.ID_classes JOIN tb_professeur ON tb_professeur.ID_prof = tb_cours.id_enseignat WHERE `ID_cours`='" . $id_cours . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function coursEdit($db, $cotetotal_cour, $nbHeur_cour, $id_enseignat, $iD_classes, $id_option, $code_cours, $designation_cours, $id_cour)
{
    try {
        $req = $db->prepare("UPDATE `tb_cours` SET `cotetotal_cour`=?,`nbHeur_cour`=?,`id_enseignat`=?,`ID_classes`=?,`id_option`=?,`code_cours`=?,`designation_cours`=? WHERE `ID_cours`=?");
        $req->execute(array($cotetotal_cour, $nbHeur_cour, $id_enseignat, $iD_classes, $id_option, $code_cours, $designation_cours, $id_cour));
        header("location: cours.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function courCount($db)
{
    try {
        $req = $db->query("SELECT COUNT(*) AS nbrCours FROM `tb_cours`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

// ==================================================================== PERIODE =======================================================================
function savePeriode($db, $epreuve)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_periode`(`periode`) VALUES (?)");
        $req->execute(array($epreuve));
        header("location: periode.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function affichePeriodEdit($db, $id_periode)
{
    try {
        $req = $db->query("SELECT * FROM `tb_periode` WHERE `id_periode`= '" . $id_periode . "' ");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function affichePeriode($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_periode`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function periodEdit($db, $id_periode, $periode)
{
    try {
        $req = $db->prepare("UPDATE `tb_periode` SET `periode`=? WHERE `id_periode`=?");
        $req->execute(array($periode, $id_periode));
        header("location: periode.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function deletPeriode($db, $id_periode)
{
    try {
        $req = $db->query("DELETE FROM `tb_periode` WHERE `id_periode`='" . $id_periode . "'");
        header("location: periode.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}


// ==================================================================== EPREUVE =======================================================================
function saveEpreuve($db, $epreuve)
{
    try {
        $req = $db->prepare("INSERT INTO `tb_epreuve`(`epreuve`) VALUES (?)");
        $req->execute(array($epreuve));
        header("location: epreuve.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function afficheEpreuvedit($db, $id_epreuve)
{
    try {
        $req = $db->query("SELECT * FROM `tb_epreuve` WHERE `Id_epreuve`='" . $id_epreuve . "'");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}


function afficheEpreuve($db)
{
    try {
        $req = $db->query("SELECT * FROM `tb_epreuve`");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function epreuvedit($db, $id_epreuve, $epreuve)
{
    try {
        $req = $db->prepare("UPDATE `tb_epreuve` SET `epreuve`=? WHERE `Id_epreuve`=?");
        $req->execute(array($epreuve, $id_epreuve));
        header("location: epreuve.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function deletEpreuve($db, $id_epreuve)
{
    try {
        $req = $db->query("DELETE FROM `tb_epreuve` WHERE `Id_epreuve` = '" . $id_epreuve . "' ");
        header("location: epreuve.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}
