<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Cotes Élève - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
</head>

<body class="bg-gray-100 min-h-screen" x-data="{ open: false }">
    <header class="bg-white shadow-md">
        <?php include "header.php"?>
    </header>
           

    <main class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Cours : Mathématiques</h1>
            <span class="text-lg text-gray-600">Période : 1</span>
        </div>

        <h2 class="text-xl font-semibold text-center mb-4">Travaux</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="text-left py-3 px-4 text-gray-600 font-semibold uppercase text-center">Numéro</th>
                        <th class="text-left py-3 px-4 text-gray-600 font-semibold uppercase text-center">Désignation</th>
                        <th class="text-left py-3 px-4 text-gray-600 font-semibold uppercase text-center">Cote obtenue</th>
                        <th class="text-left py-3 px-4 text-gray-600 font-semibold uppercase text-center">Cote totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-3 px-4 text-gray-800 text-center">1</td>
                        <td class="py-3 px-4 text-gray-800 text-center">Examen de mi-semestre</td>
                        <td class="py-3 px-4 text-gray-800 text-center">15/20</td>
                        <td class="py-3 px-4 text-gray-800 text-center">20/20</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 px-4 text-gray-800 text-center">2</td>
                        <td class="py-3 px-4 text-gray-800 text-center">Travail Pratique 1</td>
                        <td class="py-3 px-4 text-gray-800 text-center">14/20</td>
                        <td class="py-3 px-4 text-gray-800 text-center">20/20</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 px-4 text-gray-800 text-center">3</td>
                        <td class="py-3 px-4 text-gray-800 text-center">Travail Pratique 2</td>
                        <td class="py-3 px-4 text-gray-800 text-center">16/20</td>
                        <td class="py-3 px-4 text-gray-800 text-center">20/20</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 px-4 text-gray-800 text-center">4</td>
                        <td class="py-3 px-4 text-gray-800 text-center">Test</td>
                        <td class="py-3 px-4 text-gray-800 text-center">13/20</td>
                        <td class="py-3 px-4 text-gray-800 text-center">20/20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>