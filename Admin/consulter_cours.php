<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter un Cours - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6 space-y-6"> 
                
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Informations du Cours</h2>
                    
                    <div class="mb-4">
                        <h2 class="text-lg font-bold text-gray-700">Cours : <span class="text-gray-600">Histoire</span></h2>
                    </div>

                    <div class="mb-4">
                        <h2 class="block text-gray-700 font-bold">Enseignant : <span class="text-gray-600">Waridi</span></h2>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">Classe : <span class="text-gray-600">5ème A</span></label>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">Cote Totale : <span class="text-gray-600">50</span></label>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Période</h2>

                    <div class="mb-4">
                        <label for="periode" class="block text-gray-700 font-medium">Sélectionnez la période :</label>
                        <select id="periode" name="periode" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
                            <option value="1">1ère Période</option>
                            <option value="2">2ème Période</option>
                            <option value="3">3ème Période</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-center text-lg font-semibold text-gray-700">Situation de la 1ère Période</h2>
                        
                        <div class="overflow-x-auto mt-4">
                            <table class="min-w-full bg-white rounded-lg shadow-md">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-center">Ordre</th>
                                        <th class="py-3 px-6 text-center">Nom & Postnom</th>
                                        <th class="py-3 px-6 text-center">Cote Totale</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-center whitespace-nowrap">1</td>
                                        <td class="py-3 px-6 text-center">August</td>
                                        <td class="py-3 px-6 text-center">85/100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
