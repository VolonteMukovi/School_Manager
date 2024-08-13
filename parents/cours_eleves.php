<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Élève - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
</head>

<body class="bg-gray-100 min-h-screen" x-data="{ open: false }">
    <header class="bg-white shadow-md">
        <?php include "header.php"?>
    </header>

          

    <main class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-center mb-6">Cours Élève</h1>

        <div class="grid grid-cols-1 gap-6">
            <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Mathématiques</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-800 font-semibold">Moyenne: 12/20</span>
                    <a href="periode.php" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-400">Consulter</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Physique</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-800 font-semibold">Moyenne: 15/20</span>
                    <a href="periode.php" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-400">Consulter</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Histoire</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-800 font-semibold">Moyenne: 10/20</span>
                    <a href="periode.php" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-400">Consulter</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Chimie</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-800 font-semibold">Moyenne: 17/20</span>
                    <a href="periode.php" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-400">Consulter</a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</htgray