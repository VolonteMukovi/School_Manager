<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Périodes - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
</head>

<body class="bg-gray-100 min-h-screen" x-data="{ open: false }">
    <header class="bg-white shadow-md">
        <?php include "header.php"?>
    </header>
       

    <main class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-center mb-6">Périodes</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <a href="cours_eleves.php" class="bg-white p-6 rounded-lg shadow hover:bg-blue-100">
                <h2 class="text-lg font-semibold text-gray-800">Période 1</h2>
            </a>

            <a href="cours_eleves.php" class="bg-white p-6 rounded-lg shadow hover:bg-blue-100">
                <h2 class="text-lg font-semibold text-gray-800">Période 2</h2>
            </a>

            <a href="cours_eleves.php" class="bg-white p-6 rounded-lg shadow hover:bg-blue-100">
                <h2 class="text-lg font-semibold text-gray-800">Examens 1</h2>
            </a>

            <a href="cours_eleves.php" class="bg-white p-6 rounded-lg shadow hover:bg-blue-100">
                <h2 class="text-lg font-semibold text-gray-800">Période 3</h2>
            </a>

            <a href="cours_eleves.php" class="bg-white p-6 rounded-lg shadow hover:bg-blue-100">
                <h2 class="text-lg font-semibold text-gray-800">Période 4</h2>
            </a>

            <a href="cours_eleves.php" class="bg-white p-6 rounded-lg shadow hover:bg-blue-100">
                <h2 class="text-lg font-semibold text-gray-800">Examens 2</h2>
            </a>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
