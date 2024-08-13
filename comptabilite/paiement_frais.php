<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
            <div class="flex justify-end mb-2">
                    <a href="historique.php" class="bg-gray-600 mr-2 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-plus"></i> historique
                    </a>
                </div>
                <form class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                    <div class="mb-6">
                        <label for="eleve" class="block text-gray-700 font-semibold mb-2 flex items-center">
                            <i class="fas fa-user mr-2 text-gray-600"></i>
                            Élève
                        </label>
                        <select id="eleve" name="eleve" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <option value="" disabled selected>Choisir un élève</option>
                            <option value="Gust">Gust</option>
                            <option value="exo">exo</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="categorie" class="block text-gray-700 font-semibold mb-2 flex items-center">
                            <i class="fas fa-tags mr-2 text-gray-600"></i>
                            Catégorie des frais
                        </label>
                        <input type="text" id="categorie" name="categorie" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Catégorie des frais" required>
                    </div>

                    <div class="mb-6">
                        <label for="montant" class="block text-gray-700 font-semibold mb-2 flex items-center">
                            <i class="fas fa-dollar-sign mr-2 text-gray-600"></i>
                            Montant
                        </label>
                        <input type="number" id="montant" name="montant" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Montant en $ ou CDF" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
