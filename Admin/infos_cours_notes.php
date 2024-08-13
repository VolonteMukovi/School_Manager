<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Épreuves: Math - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6">

                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-700">Liste des Épreuves: Math</h1>
                    
                    <div class="flex items-center">
                        <label for="periode" class="mr-2 font-semibold text-gray-700">Période :</label>
                        <select id="periode" name="periode" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
                            <option value="1">1ère Période</option>
                            <option value="2">2ème Période</option>
                            <option value="3">3ème Période</option>
                        </select>
                    </div>
                </div>


                <h2 class="text-lg font-bold text-gray-700 mb-4">Élève :</h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-md">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">Numéro</th>
                                <th class="py-3 px-6 text-center">Désignation</th>
                                <th class="py-3 px-6 text-center">Total</th>
                                <th class="py-3 px-6 text-center">Cote</th>
                                <th class="py-3 px-6 text-center">Date</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-center whitespace-nowrap">1</td>
                                <td class="py-3 px-6 text-center">Interro 1</td>
                                <td class="py-3 px-6 text-center">100</td>
                                <td class="py-3 px-6 text-center">85</td>
                                <td class="py-3 px-6 text-center">12/08/2024</td>
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
