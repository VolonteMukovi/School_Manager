<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Paiements - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ddd;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-700">Historique des Paiements</h1>
                    <div class="flex items-center space-x-4">
                        <label for="date" class="text-gray-700 font-semibold">Date :</label>
                        <input type="date" id="date" name="date" class="px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="mb-6 flex justify-end relative">
                    <div class="dropdown">
                        <button class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Filtrer
                        </button>
                        <div class="dropdown-content mt-2 rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">par date</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">par mois</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">par annee</a>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 border-b text-center">ID Paiement</th>
                                <th class="py-3 px-4 border-b text-center">Élève</th>
                                <th class="py-3 px-4 border-b text-center">Catégorie Frais</th>
                                <th class="py-3 px-4 border-b text-center">Montant</th>
                                <th class="py-3 px-4 border-b text-center">Date</th>
                                <th class="py-3 px-4 border-b text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4 border-b text-center">001</td>
                                <td class="py-3 px-4 border-b text-center">Gust</td>
                                <td class="py-3 px-4 border-b text-center">Frais Scolaires</td>
                                <td class="py-3 px-4 border-b text-center">100 $</td>
                                <td class="py-3 px-4 border-b text-center">2024-08-12</td>
                                <td class="border-t py-2 px-4 text-center">
                                <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i> Éditer</button>
                                <button class="text-red-500 hover:text-red-700 ml-2"><i class="fas fa-trash"></i> Supprimer</button>
                                <a href="infos_eleves_cours.php" class="text-green-500 hover:text-green-700 ml-2"><i class="fas fa-eye"></i> Consulter</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
