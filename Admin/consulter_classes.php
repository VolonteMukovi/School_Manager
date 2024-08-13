<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Classe - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow ">
            <?php include "header.php"; ?>

            <div class="bg-white p-6 rounded shadow-md max-w-4xl mx-auto">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <div class="mb-4">
                            <h2 class="text-lg font-bold text-gray-700">Classe : <span class="text-gray-600">Première A</span>
                            </h2>
                        </div>
                        
                        <div class="mb-4">
                            <h2 class="text-lg font-bold text-gray-700">Option :<span class="text-gray-600">scientifique</span></h2>
                        </div>
                        
                        <div class="mb-4">
                            <h2 class="text-lg font-bold text-gray-700">Titulaire :<span class="text-gray-600">august</span>
                            </h2>
                        </div>
                    </div>
                    
                    <div>
                        <div class="mb-4">
                            <h2 class="text-lg font-bold text-gray-700 text-left">Période :</h2>
                            <div class="border border-gray-300 p-3 rounded">
                                <p class="text-gray-600">1ère Période</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-center">Ordre</th>
                                <th class="px-4 py-2 border-b text-center">Nom</th>
                                <th class="px-4 py-2 border-b text-center">Postnom</th>
                                <th class="px-4 py-2 border-b text-center">Pourcentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border-b text-center">1</td>
                                <td class="px-4 py-2 border-b text-center">August</td>
                                <td class="px-4 py-2 border-b text-center">Musande</td>
                                <td class="px-4 py-2 border-b text-center">85%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
