<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <main class="p-6">
                <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Liste des Catégories</h2>
                <div class="flex justify-end mb-2">
                    <a href="ajouts_categorie.php" class="bg-gray-600 mr-2 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-plus"></i> Ajouter
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded shadow-md">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="py-3 px-4 text-center text-gray-600">Désignation</th>
                                <th class="py-3 px-4 text-center text-gray-600">Salaire</th>
                                <th class="py-3 px-4 text-center text-gray-600">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-3 px-4 text-center">permanent</td>
                                <td class="py-3 px-4 text-center">500 $</td>
                                <td class="py-3 px-4 text-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-700 mr-2">
                                        <i class="fas fa-edit"></i> Éditer
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
