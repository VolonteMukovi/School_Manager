<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Répartition Budgétaire - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-300">
                    <div class="mb-6">
                        <p class="text-gray-700 font-semibold">Subdivision:</p>
                        <div class="bg-gray-200 p-4 border border-gray-300 rounded">
                            <p class="text-gray-800 font-medium">4</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-gray-700 font-semibold">Subdivisions:</p>
                        <div class="bg-gray-200 p-4 border border-gray-300 rounded">
                            <p class="text-gray-800 font-medium">1</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-gray-700 font-semibold">Pourcentage:</p>
                        <div class="bg-gray-200 p-4 border border-gray-300 rounded">
                            <p class="text-gray-800 font-medium">À remplir</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
