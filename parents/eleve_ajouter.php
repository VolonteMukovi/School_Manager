<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élève Déjà Ajouté - School Manager</title>
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
            <h1 class="text-2xl font-semibold">Élève Déjà Ajouté</h1>
            <a href="ajout_eleves.php" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-400">
                <i class="fas fa-plus"></i> Ajouter mon élève
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="periode_eleve.php">
                <div class="bg-white p-4 rounded shadow-md">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-user-graduate fa-3x text-gray-500"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-center">Nom: John</h2>
                    <p class="text-gray-700 text-center">Postnom: kimbadau</p>
                    <p class="text-gray-700 text-center">Section: Scientifique</p>
                    <p class="text-gray-700 text-center">Option: Mathématiques</p>
                    <p class="text-gray-700 text-center">Classe: 6ème</p>
                </div>
            </a>
            

            <a href="periode_eleve.php">
                <div class="bg-white p-4 rounded shadow-md">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-user-graduate fa-3x text-gray-500"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-center">Nom: John</h2>
                    <p class="text-gray-700 text-center">Postnom: kimbadau</p>
                    <p class="text-gray-700 text-center">Section: Scientifique</p>
                    <p class="text-gray-700 text-center">Option: Mathématiques</p>
                    <p class="text-gray-700 text-center">Classe: 6ème</p>
                </div>
            </a>
            <a href="periode_eleve.php">
                <div class="bg-white p-4 rounded shadow-md">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-user-graduate fa-3x text-gray-500"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-center">Nom: John</h2>
                    <p class="text-gray-700 text-center">Postnom: kimbadau</p>
                    <p class="text-gray-700 text-center">Section: Scientifique</p>
                    <p class="text-gray-700 text-center">Option: Mathématiques</p>
                    <p class="text-gray-700 text-center">Classe: 6ème</p>
                </div>
            </a>
            <a href="periode_eleve.php">
                <div class="bg-white p-4 rounded shadow-md">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-user-graduate fa-3x text-gray-500"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-center">Nom: John</h2>
                    <p class="text-gray-700 text-center">Postnom: kimbadau</p>
                    <p class="text-gray-700 text-center">Section: Scientifique</p>
                    <p class="text-gray-700 text-center">Option: Mathématiques</p>
                    <p class="text-gray-700 text-center">Classe: 6ème</p>
                </div>
            </a>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
