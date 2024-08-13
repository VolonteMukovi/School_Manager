<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horaire</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
    <?php include "sidebar.php"; ?>

<div class="flex-grow">
    <?php include "header.php"; ?> 

            <main class="p-6">
                <div class="flex items-center mb-6 space-x-4">
                    <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-green-600 flex items-center">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Générer
                    </button>
                    <button class="bg-gray-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-600 flex items-center">
                        <i class="fas fa-print mr-2"></i>
                        Imprimer
                    </button>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-gray-700 mb-4">Aperçu du Document</h2>
                    <div class="border border-gray-300 rounded-lg overflow-hidden">
                        <iframe src="assets/4422_MUYISA_VAGHENI_L2_TERRORISM_TRACK.pdf" class="w-full h-96" ></iframe>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
