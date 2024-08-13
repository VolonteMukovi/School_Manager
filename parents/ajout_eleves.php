<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Mon Élève - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
</head>

<body class="bg-gray-100 min-h-screen" x-data="{ open: false }">
    <header class="bg-white shadow-md">
        <?php include "header.php"?>
    </header>

    <main class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-center mb-6">Ajouter Mon Élève</h1>

        <form class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
            <div class="mb-4">
                <label for="code-eleve" class="block text-gray-700 text-sm font-bold mb-2">Code de l'élève</label>
                <input type="text" id="code-eleve" name="code-eleve" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Entrez le code de l'élève" required>
            </div>

            <div class="text-center">
                <a href="periode_eleve.php"  class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-400">
                    Ajouter mon élève
                </a>
            </div>
        </form>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
