<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>État Budgétaire - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-semibold text-gray-800">État Budgétaire</h1>
                </div>

                <div class="flex justify-center mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-300">
                        <div class="flex gap-4">
                            <a href="elaboreration_budgetaire.php" class="bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400 flex items-center">
                                <i class="fas fa-file-alt mr-2"></i> Élaborer
                            </a>
                            <a href="subdivision_budgetaire.php" class="bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400 flex items-center">
                                <i class="fas fa-search mr-2"></i> Consulter
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
