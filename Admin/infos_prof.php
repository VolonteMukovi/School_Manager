<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Professeur - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-700 mb-6">Informations Professeur</h1>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Nom : exo</h2>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Postnom : vgh</h2>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Cours enseignés :</h3>

                    <ul class="list-disc pl-5 text-gray-600">
                        <li>Mathématiques</li>
                        <li>Physique</li>
                        <li>Informatique</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
