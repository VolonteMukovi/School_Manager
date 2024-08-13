<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Périodes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <?php include "sidebar.php"; ?>

    <div class="flex-grow">
        <?php include "header.php"; ?>       

            <main class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-700">Périodes Enregistrées</h2>
                    <a href="ajout_periode.php" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        Ajouter
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg">
                        <thead>
                            <tr class="w-full bg-gray-200 text-gray-700 text-center">
                                <th class="py-3 px-4 border-b">Désignation</th>
                                <th class="py-3 px-4 border-b">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 text-center">1 ere periode</td>
                                <td class="py-3 px-4 text-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-700 mr-2">
                                        <i class="fas fa-edit text-center"></i> Éditer
                                    </a>
                                    <a href="#" class="text-red-500 hover:text-red-700 mr-2">
                                        <i class="fas fa-trash-alt"></i> Supprimer
                                    </a>
                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
