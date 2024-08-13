<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours étudiés par Gust Musande - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6">
                
                <h1 class="text-2xl font-bold text-gray-700 mb-6">Cours étudiés par Gust Musande</h1>

                <div class="space-y-4">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-700">Cours : Mathématiques</h2>
                        <p class="text-gray-600 mt-2">Enseignant : M. Ndenga</p>
                        <div class="flex justify-end mt-4">
                        <a href="infos_cours_notes.php" class="bg-gray-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-500 focus:outline-none">
                        Consulter
                        </a>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-700">Cours : Histoire</h2>
                        <p class="text-gray-600 mt-2">Enseignant : Mme Waridi</p>
                        <div class="flex justify-end mt-4">
                        <a href="infos_cours_notes.php" class="bg-gray-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-500 focus:outline-none">
                        Consulter
                        </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
