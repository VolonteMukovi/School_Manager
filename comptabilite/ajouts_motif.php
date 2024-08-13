<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Mois - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="mb-6 text-center">
                    <h1 class="text-2xl font-bold text-gray-700">Ajouter un Mois</h1>
                </div>

                <form class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                    <div class="mb-4">
                        <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation du Mois</label>
                        <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Nom du Mois" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Ajouter
                        </button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
