<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Année Scolaire</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <aside class=" bg-gray-800 text-white min-h-screen p-4">
            <nav class="">
                <?php include "sidebar.php" ?>
            </nav>
        </aside>
        <div class="flex-1">
            <header class=" ">
                <div class="flex justify-between items-center">
                    <?php include "header.php" ?>
                </div>
            </header>

            <main class="p-6">
                <?php if (isset($_GET["action"]) and $_GET["action"] == "ajouter") { ?>
                    <div class="flex justify-center">
                        <div class="w-full max-w-lg">
                            <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Année Scolaire</h2>

                            <form method="post" action="action.php" class="bg-white p-6 rounded shadow-md w-full">
                                <div class="mb-4">
                                    <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation de l'Année Scolaire</label>
                                    <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: 2021-2022" required>
                                </div>
                                <div class="text-center">
                                    <button name="btnAjoutAnne" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                        Créer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php  } else if (isset($_GET["action"]) and $_GET["action"] == "editer") { ?>
                    <div class="flex justify-center">
                        <div class="w-full max-w-lg">
                            <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Année Scolaire</h2>

                            <form method="post" action="action.php" class="bg-white p-6 rounded shadow-md w-full">
                                <div class="mb-2">
                                    <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation de l'Année Scolaire</label>
                                    <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: 2021-2022" required>
                                </div>
                                <div class="mb-4">
                                    <label for="designation" class="block text-gray-700 font-semibold mb-2">Status</label>
                                    <input type="text" id="designation" name="status" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: Année en cours ou Clôturer" required>
                                </div>
                                <div class="text-center">
                                    <button name="btnAjoutAnne" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                        Modifier
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="flex justify-center">
                        <div class="w-full max-w-lg">
                            <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Ajouter une Année Scolaire</h2>

                            <form method="post" action="action.php" class="bg-white p-6 rounded shadow-md w-full">
                                <div class="mb-4">
                                    <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation de l'Année Scolaire</label>
                                    <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: 2021-2022" required>
                                </div>
                                <div class="text-center">
                                    <button name="btnAjoutAnne" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                        Créer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </main>
        </div>
    </div>
</body>

</html>