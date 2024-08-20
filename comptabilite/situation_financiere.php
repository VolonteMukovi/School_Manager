<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situation Financière - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="bg-white p-6 rounded shadow-md w-full max-w-3xl mx-auto mb-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-700 font-semibold mb-2">
                                <i class="fas fa-chart-line mr-2"></i> Seuil en %:<span class="border px-3 py-2 rounded w-24 text-center text-gray-700 font-bold"> 75%</span>
                            </p>
                            
                        </div>
                        <button onclick="window.print()" class="bg-gray-800 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            <i class="fas fa-print mr-2"></i> Imprimer
                        </button>
                    </div>
                </div>

                <div class="text-center mb-6">
                    <button onclick="window.print()" class="bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-stamp mr-2"></i> Imprimer Macaron
                    </button>
                </div>

                <div class="bg-white p-6 rounded shadow-md w-full max-w-3xl mx-auto">
                    <p class="text-gray-700 font-semibold mb-2">
                        <i class="fas fa-school mr-2"></i> Classe
                    </p>
                    <div class="border px-3 py-2 rounded w-full text-gray-700 mb-4">
                        5 ieme sciences
                    </div>
                    <a href="consulter_situation_financiere.php" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-search mr-2"></i> Consulter
                    </a>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
