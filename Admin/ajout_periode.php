<?php session_start();   ?>
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
            if (isset($_GET["epreuve"])) {
                if (isset($_GET["action"]) and $_GET["action"] == "editer") {
                    $periodes = affichePeriodEdit($db, $_GET["epreuve"]);
                    foreach ($periodes as $periode) {
                        $periode = $periode->periode;
                        @$id_periode = $periode->id_periode;
                       
                    }
                    $_SESSION["idPeriode"] = $_GET["epreuve"];
            ?>  
                    <main class="p-6">
                        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Période</h2>
                        <form method="post" action="action.php" class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                            <div class="mb-4 flex items-center">
                                <div class="w-full">
                                    <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation</label>
                                    <input value="<?php  echo $periode   ?>" type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: Semestre 1" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button name="btnEditPeriode" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                    Modifier
                                </button>
                            </div>
                        </form>
                    </main>
                <?php
                }
            } else {  ?>
                <main class="p-6">
                    <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Période</h2>

                    <form method="post" action="action.php" class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                        <div class="mb-4 flex items-center">
                            <div class="w-full">
                                <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation</label>
                                <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: Semestre 1" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button name="btnSavePeriode" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                Enregistre
                            </button>
                        </div>
                    </form>
                </main>
            <?php  }
            ?>
        </div>
    </div>
</body>

</html>