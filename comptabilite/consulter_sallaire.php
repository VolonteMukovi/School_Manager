<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Salaires - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="bg-white p-6 rounded shadow-md mb-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-lg text-gray-600 ">Paiements Mois de:<span class="font-bold text-gray-800">janvier</span></p>
                            <p class="text-gray-600">Total Payé: <span class="font-bold text-green-600">120 $</span></p>
                            <p class="text-gray-600">Total à Payer: <span class="font-bold text-red-600">80 $</span></p>
                        </div>

                        <div class="flex flex-col">
                            <label for="professeurs" class="block text-gray-700 font-semibold mb-2">Choisir un Professeur</label>
                            <select id="professeurs" name="professeurs" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <option value="" disabled selected>Choisir un professeur</option>
                                <option value="prof1">Waridi</option>
                                <option value="prof2">vd</option>
                                <option value="prof3">exo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 text-right">
                        <button onclick="window.print()" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            <i class="fas fa-print mr-2"></i> Imprimer Rapport
                        </button>
                    </div>
                </div>

                <div class="bg-white p-6 rounded shadow-md">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-700">
                                <th class="px-4 py-2 text-center">Nom</th>
                                <th class="px-4 py-2 text-center">Postnom</th>
                                <th class="px-4 py- text-center">Téléphone</th>
                                <th class="px-4 py-2 text-center">Salaire</th>
                                <th class="px-4 py-2 text-center">Payé</th>
                                <th class="px-4 py-2 text-center">Surplus/Avance</th>
                                <th class="px-4 py-2 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-4 py-2 text-center">kasereka</td>
                                <td class="px-4 py-2 text-center">Drake</td>
                                <td class="px-4 py-2 text-center">+243 971171463</td>
                                <td class="px-4 py-2 text-center">200 $</td>
                                <td class="px-4 py-2 text-center">140 $</td>
                                <td class="px-4 py-2 text-center text-green-600">60$</td>
                                <td class="px-4 py-2 text-center">
                                    <a href="ajouts_salaire.php" class="bg-gray-600 text-white px-2 py-1 rounded mr-2 hover:bg-gray-400">
                                        <i class="fas fa-plus"></i> Ajouter
                                    </a>
                                    <a href="consulter_paiement.php" class="bg-gray-600 text-white px-2 py-1 rounded mr-2 hover:bg-gray-400">
                                        <i class="fas fa-eye"></i> Consulter
                                    </a>
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
