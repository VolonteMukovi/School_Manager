<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes de classes - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow ">
            <?php include "header.php"; ?>

            <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Listes de classes</h1>
            <div class="flex justify-end mb-2 mr-2">
                <a href="ajouts_classes.php" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                    <i class="fas fa-plus"></i> Ajouter
                </a>
            </div>
            <div class="overflow-x-auto bg-white rounded shadow-md">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-center">Code</th>
                            <th class="py-3 px-6 text-center">Désignation</th>
                            <th class="py-3 px-6 text-center">Option</th>
                            <th class="py-3 px-6 text-center">Titulaire</th>
                            <th class="py-3 px-6 text-center">Nbre Inscrits</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-center whitespace-nowrap">001</td>
                            <td class="py-3 px-6 text-center">6 ieme A</td>
                            <td class="py-3 px-6 text-center">Scientifique</td>
                            <td class="py-3 px-6 text-center">EXAU</td>
                            <td class="py-3 px-6 text-center">45</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <a href="consulter_classes.php" class="w-4 transform hover:text-blue-500 hover:scale-110">
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
</body>

</html>
