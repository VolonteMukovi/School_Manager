<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos sur l'élève - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6 space-y-6">
                
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-700">Infos sur l'élève : Gust Musande</h1>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none">
                        Bulletin
                    </button>
                </div>

                <div class="space-y-6">
                    <a href="infos_eleves_cours.php" class="mb-4">
                    <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer m-12">
                        <h2 class="text-xl font-semibold text-gray-700 mb-4 ">1ère Période</h2>
                    </div>
                    </a>
                   

                    <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer m-12">
                        <h2 class="text-xl font-semibold text-gray-700 mb-4 ">2ème Période</h2>
                    </div>

                    <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer m-12">
                        <h2 class="text-xl font-semibold text-gray-700 mb-4 ">3ème Période</h2>
                    </div>

                    <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer m-12">
                        <h2 class="text-xl font-semibold text-gray-700 mb-4 ">4ème Période</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
