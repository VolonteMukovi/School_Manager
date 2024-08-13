<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-semibold text-gray-700">Cours</h1>
                    <a href="ajouter_cours.php" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-400">
                        <i class="fas fa-plus mr-2"></i> Ajouter un cours
                    </a>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 ">
                            <tr>
                                <th class="w-1/6 px-4 py-2 text-left text-gray-300">Code</th>
                                <th class="w-1/6 px-4 py-2 text-left text-gray-300">Désignation</th>
                                <th class="w-1/6 px-4 py-2 text-left text-gray-300">Enseignant</th>
                                <th class="w-1/6 px-4 py-2 text-left text-gray-300">Cote totale</th>
                                <th class="w-1/6 px-4 py-2 text-left text-gray-300">Classe</th>
                                <th class="w-1/6 px-4 py-2 text-left text-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border-t">001</td>
                                <td class="px-4 py-2 border-t">Mathématiques</td>
                                <td class="px-4 py-2 border-t">Mr. Dupont</td>
                                <td class="px-4 py-2 border-t">100</td>
                                <td class="px-4 py-2 border-t">3ème A</td>
                                <td class="px-4 py-2 border-t">
                                    <div class="flex space-x-2">
                                        <a href="#" class="text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a href="consulter_cours.php" class="text-green-500 hover:text-green-700">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
