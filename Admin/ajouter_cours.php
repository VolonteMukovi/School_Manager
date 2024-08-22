<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Cours - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6">
                <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">Ajouter un Cours</h1>

                <form action="action.php" method="POST" class="bg-white shadow-md rounded-lg p-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="designation" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-book mr-2"></i> Désignation du cours
                            </label>
                            <input type="text" id="designation" name="designation" required
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="designation" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-book mr-2"></i> Désignation du cours
                            </label>
                            <input type="text" id="designation" name="designation" required
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="enseignant" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-chalkboard-teacher mr-2"></i> Enseignant
                            </label>
                            <?php  $afficheProf = afficheProf($db); ?>
                        <select id="titulaire" name="titulaire" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Sélectionnez un titulaire </option>
                            <?php foreach($afficheProf as $prof){?>
                            <option value="<?php echo $prof->ID_prof ?>"><?php echo $prof->PostNom_prof." ".$prof->Nom_prof ?></option>
                           <?php }  ?>
                        </select>
                        </div>

                        <div>
                            <label for="cote_totale" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-calculator mr-2"></i> Cote totale
                            </label>
                            <input type="number" id="cote_totale" name="cote_totale" required
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="classe" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-school mr-2"></i> Classe
                            </label>
                            <?php $listeClass = afficheClasses($db);   ?>
                            <select required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="classes" id="option">
                                <option value="classe1">Sélectionner Une Classe </option>
                                <?php foreach ($listeClass as $classe) {  ?>
                                    <option value="<?php echo $classe->ID_classes  ?>"><?php echo $classe->designation_classes . "   " . $classe->designation_option     ?></option>
                                <?php  } ?>

                            </select>
                        </div>
                        <div>
                            <label for="option" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-th-list mr-2"></i> Option
                            </label>
                            <?php  $afficheOption = afficheOption($db); ?>
                        <select id="option" name="option" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Sélectionnez une option</option>
                            <?php foreach($afficheOption as $option){?>
                            <option value="<?php echo $option->ID_option ?>"><?php echo $option->designation_option ?></option>
                           <?php }  ?>

                        </select>
                        </div>

                        <div>
                            <label for="nb_heures" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-clock mr-2"></i> Nombre d'heures par semaine
                            </label>
                            <input type="number" id="nb_heures" name="nb_heures" required
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <div class="mt-6 text-right">
                        <button name="btnSaveCour" type="submit" class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-400">
                            <i class="fas fa-plus mr-2"></i> Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        document.getElementById('classe').addEventListener('change', function () {
            var classe = this.value;
        });

        document.getElementById('section').addEventListener('change', function () {
            var section = this.value;
        });
    </script>
</body>
</html>
