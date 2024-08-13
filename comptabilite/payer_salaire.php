<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payer Salaire - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
            <h2 class="text-2xl font-bold text-gray-700 text-center">mois creer Enregistrées</h2>

                <div class="flex justify-end mb-2">
                    <a href="ajouts_motif.php" class="bg-gray-600 mr-2 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-plus"></i> Ajouter
                    </a>
                </div>

                <div class="bg-white p-4 rounded shadow-md flex justify-between items-center mb-4">
                    <span class="text-gray-700 font-semibold text-lg">Janvier</span>
                    <a href="consulter_sallaire.php" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-500">
                        Consulter
                    </a>
                </div>
                <div class="bg-white p-4 rounded shadow-md flex justify-between items-center mb-2">
                    <span class="text-gray-700 font-semibold text-lg">Janvier</span>
                    <a href="consulter_sallaire.php" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-500">
                        Consulter
                    </a>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
