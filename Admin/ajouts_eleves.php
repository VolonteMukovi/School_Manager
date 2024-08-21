<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un élève - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #photo-preview {
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 190px;
            width: 190px;
            border: 2px dashed #cbd5e0;
        }

        #photo-preview img {
            height: 95%;
            width: 95%;
            object-fit: cover;
            display: none;
        }

        #photo-preview .icon-user {
            font-size: 4rem;
            color: #a0aec0;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow ">
            <?php include "header.php"; ?>

            <h1 class="text-2xl font-bold text-center text-gray-700 mb-3">Ajouter un élève</h1>

            <div class="flex">
                <div style="float: right; margin-right: 25px;" id="photo-preview" class="ml-6">
                    <i class="fas fa-user icon-user"></i>
                    <img id="photo-output" alt="Prévisualisation de la photo">
                </div>
                <form action="action.php" method="post" class="w-2/3 bg-white p-6 rounded shadow-md flex flex-wrap ml-6" enctype="multipart/form-data">
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="matricule">
                            <i class="fas fa-id-badge mr-2"></i> Matricule
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="matricule" id="matricule" type="text" placeholder="Matricule">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="code">
                            <i class="fas fa-key mr-2"></i> Code
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="code" id="code" type="text" placeholder="Code">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="nom">
                            <i class="fas fa-user mr-2"></i> Nom
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nom" id="nom" type="text" placeholder="Nom">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="postnom">
                            <i class="fas fa-user mr-2"></i> Postnom
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="postnom" id="postnom" type="text" placeholder="Postnom">
                    </div>

                    <div class="w-1/2 px-3 mb-2">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="classe">
                            <i class="fas fa-user mr-2"></i> Genre
                        </label>
                        <select required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="genre" id="classe">
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select>
                        <!-- <fieldset>
                            <legend>
                                 <span class="block text-gray-700 font-bold mb-2 flex items-center" ><i class="fas fa-user mr-2"></i> Genre</span>
                                <label class="block text-gray-700 font-bold mb-2 flex items-center" for="masculin">Masculin</label>
                                <input value="Masculin" type="radio" name="genre" id="masculin">
                                <label class="block text-gray-700 font-bold mb-2 flex items-center" for="feminin">Feminin</label>
                                <input value="Feminin" type="radio" name="genre" id="feminin">
                            </legend>
                        </fieldset> -->
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="nom">
                            <i class="fas fa-user mr-2"></i> Lieu de Naissance
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="lieuNaissance" id="nom" type="text" placeholder="Lieu de Naissance">
                    </div>

                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="nom">
                            <i class="fas fa-user mr-2"></i> Date de Naissance
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="dateNaissance" id="nom" type="date">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="photo">
                            <i class="fas fa-camera mr-2"></i> Photo
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="photo" id="photo" type="file" accept="image/*" onchange="previewPhoto(event)">
                    </div>

                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="matricule">
                            <i class="fas fa-id-badge mr-2"></i> Adresse
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="adresse" id="matricule" type="text" placeholder="Adresse">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="option">
                            <i class="fas fa-graduation-cap mr-2"></i> Classe
                        </label>
                        <?php $listeClass = afficheClasses($db);   ?>
                        <select required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="classes" id="option">
                            <option value="classe1">Sélectionner Une Classe</option>
                           <?php  foreach($listeClass as $classe) {  ?>
                                <option value="<?php echo $classe->ID_classes  ?>"><?php echo $classe->designation_classes ."   ".$classe->designation_option	 ?></option>
                         <?php  } ?>
                            
                        </select>
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="code">
                            <i class="fas fa-key mr-2"></i> Ecole D'origine
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ecoleOrigine" id="code" type="text" placeholder="Ecole D'origine">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="nom">
                            <i class="fas fa-user mr-2"></i> Numéro Permenant
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="numeroPermanent" id="nom" type="text" placeholder="Numéro Permenant">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="postnom">
                            <i class="fas fa-user mr-2"></i> Nationalité
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nationaliter" id="postnom" type="text" placeholder="Nationaliter">
                    </div>

                    <div class="w-1/2 px-3 mb-6">
                    <label class="block text-gray-700 font-bold mb-2 flex items-center" for="postnom">
                            <i class="fas fa-user mr-2"></i> Nom du Tuteur
                        </label>
                        <input name="nomTuteur" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postnom" type="text" placeholder="Nom du Tuteur">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                    <label class="block text-gray-700 font-bold mb-2 flex items-center" for="postnom">
                            <i class="fas fa-user mr-2"></i> Numéro Téléphone
                        </label>
                        <input name="numTel" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postnom" type="text" placeholder="Numero Telephone">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="option">
                            <i class="fas fa-graduation-cap mr-2"></i> Annee
                        </label>
                        <?php $annees = AfficheAnnee($db);   ?>
                        <select required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="anneInscription" id="option">
                            <option value="classe1">Sélectionner L'Année</option>
                           <?php  foreach($annees as $annee) {  ?>
                                <option value="<?php echo $annee->ID_anne_scholaire  ?>"><?php echo $annee->annee."  ".$annee->status  ?></option>
                         <?php  } ?>
                            
                        </select>
                    </div>
                    <div class="w-full px-3 mb-6 flex justify-end">
                        <button name="btnSaveEleve" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewPhoto(event) {
            const preview = document.getElementById('photo-output');
            const iconUser = document.querySelector('#photo-preview .icon-user');

            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                iconUser.style.display = 'none';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        let btnSuivant = document.querySelector(".suivants");
        let page1 = document.querySelector(".page-1");
        let page2 = document.querySelector(".page-2");
        btnSuivant.addEventListener("click", (e) => {
            e.preventDefault();
            page1.classList.toggle("hidden");
            page2.classList.toggle("hidden");

        })
    </script>
</body>

</html>