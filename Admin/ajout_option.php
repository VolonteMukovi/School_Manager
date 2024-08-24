<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Période</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php";
            if (isset($_GET["option"])) {
                $affoptionEdit = afficheOptionEdit($db, $_GET["option"]);
                if (isset($_GET["action"]) and $_GET["action"] == "editer") {
                    foreach ($affoptionEdit as $option) {
                        $option = $option->designation_option;
                        $section = $option->ID_option;
                    }
            ?>
                    <main class="p-6">
                        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Option</h2>
                        <!-- designation_section -->
                        <form action="action.php" method="post" class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                            <div class="mb-4 flex items-center">
                                <div class="w-full">
                                    <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation</label>
                                    <input value="<?php echo $option; ?>" type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: Biochimie" required>
                                </div>
                            </div>
                            <div class="mb-4 flex items-center">
                                <div class="w-full">
                                    <label for="option" class="block text-gray-700 font-bold mb-2">
                                        <i class="fas fa-book mr-2"></i>Section
                                    </label>
                                    <?php $affichesection = afficheSection($db); ?>
                                    <select id="section" name="section" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                        <option value="<?php echo $id_section;   ?>"><?php echo $section  ?></option>
                                        <?php foreach ($affichesection as $section) { ?>
                                            <option value="<?php echo $section->ID_section ?>"><?php echo $section->designation_section ?></option>
                                        <?php }  ?>

                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button name="btnSaveOption" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                    Ajouter
                                </button>
                            </div>
                        </form>
                    </main>
                <?php
                }
            } else {  ?>
                <main class="p-6">
                    <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Option</h2>
                    <!-- designation_section -->
                    <form action="action.php" method="post" class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                        <div class="mb-4 flex items-center">
                            <div class="w-full">
                                <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation</label>
                                <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: Biochimie" required>
                            </div>
                        </div>
                        <div class="mb-4 flex items-center">
                            <div class="w-full">
                                <label for="option" class="block text-gray-700 font-bold mb-2">
                                    <i class="fas fa-book mr-2"></i>Section
                                </label>
                                <?php $affichesection = afficheSection($db); ?>
                                <select id="section" name="section" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                    
                                    <?php foreach ($affichesection as $section) { ?>
                                        <option value="<?php echo $section->ID_section ?>"><?php echo $section->designation_section ?></option>
                                    <?php }  ?>

                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button name="btnSaveOption" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                Ajouter
                            </button>
                        </div>
                    </form>
                </main>
            <?php   }
            ?>


        </div>
    </div>
</body>

</html>