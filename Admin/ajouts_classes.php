<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une classe - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow ">
            <?php include "header.php"; ?>

            <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Ajouter une classe</h1>

            <div class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
                <form action="action.php" method="post">
                    <div class="mb-4">
                        <label for="designation" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-tag mr-2"></i>Désignation
                        </label>
                        <input type="text" id="designation" name="designation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ex: Première A" required>
                    </div>

                    <div class="mb-4">
                        <label for="option" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-book mr-2"></i>Option
                        </label>
                        <?php  $afficheOption = afficheOption($db); ?>
                        <select id="option" name="option" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Sélectionnez une option</option>
                            <?php foreach($afficheOption as $option){?>
                            <option value="<?php echo $option->ID_option ?>"><?php echo $option->designation_option ?></option>
                           <?php }  ?>

                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="section" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-building mr-2"></i>Section
                        </label>
                           <?php  $affichesection = afficheSection($db); ?>
                        <select id="section" name="section" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Sélectionnez une section</option>
                            <?php foreach($affichesection as $section){?>
                            <option value="<?php echo $section->ID_section ?>"><?php echo $section->designation_section ?></option>
                           <?php }  ?>    
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="titulaire" class="block text-gray-700 font-bold mb-2">
                            <i class="fas fa-chalkboard-teacher mr-2"></i>Titulaire
                        </label>
                        <?php  $afficheProf = afficheProf($db); ?>
                        <select id="titulaire" name="titulaire" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Sélectionnez un titulaire</option>
                            <?php foreach($afficheProf as $prof){?>
                            <option value="<?php echo $prof->ID_prof ?>"><?php echo $prof->PostNom_prof." ".$prof->Nom_prof ?></option>
                           <?php }  ?>
                        </select>
                    </div>

                    <div class="flex items-center justify-center">
                        <button name="btnAjoutClasses" type="submit" class="bg-gray-600 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
