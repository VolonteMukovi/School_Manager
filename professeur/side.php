<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Travail - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" min-h-screen">
<div class="bg-gray-100">

<div class="h-screen flex overflow-hidden bg-gray-200">
    <div class="absolute bg-gray-800 text-white w-56 min-h-screen overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300"
        id="sidebar">
        <div class="p-4">
        <div class="p-6">
                <h2 class="text-2xl font-semibold text-center">School Manager</h2>
        </div>
            <nav class="flex-grow">
                <ul>
                    <li class="px-6 py-2 hover:bg-gray-700">
                        <a href="cours.php" class="flex items-center">
                            <i class="fas fa-book mr-3"></i> Mes Cours
                        </a>
                    </li>
                    <li class="px-6 py-2 hover:bg-gray-700">
                        <a href="identifiants.php" class="flex items-center">
                            <i class="fas fa-id-badge mr-3"></i> Mes Identifiants
                        </a>
                    </li>
                    <li class="px-6 py-2 hover:bg-gray-700">
                        <a href="se_deconnecter.php" class="flex items-center">
                            <i class="fas fa-sign-out-alt mr-3"></i> Se Déconnecter
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="flex-1 flex flex-col overflow-hidden">
        <div class="bg-white shadow">
        <div class="flex justify-between items-center py-4 px-2">
                    <button class="text-gray-500 hover:text-gray-600" id="open-sidebar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-white mr-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="text-xl font-semibold">Professeur</span>
                    </div>                   
                </div>
        </div>
        <div class="flex-1 overflow-auto p-4">
        <main class="p-6">
                <h1 class="text-2xl font-semibold text-center mb-8">Ajouter un Nouveau Travail</h1>

                <div class="bg-white p-6 rounded shadow-md">
                    <form action="ajouter_travail_action.php" method="post">
                        <div class="mb-4">
                            <label for="designation" class="block text-gray-700 text-sm font-semibold mb-2">Désignation</label>
                            <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="cote" class="block text-gray-700 text-sm font-semibold mb-2">Côte</label>
                            <input type="number" id="cote" name="cote" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="categorie" class="block text-gray-700 text-sm font-semibold mb-2">categorie</label>
                            <input type="text" id="designation" name="designation" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="bg-gray-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                Créer
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
const openSidebarButton = document.getElementById('open-sidebar');

openSidebarButton.addEventListener('click', (e) => {
    e.stopPropagation();
    sidebar.classList.toggle('-translate-x-full');
});

document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
        sidebar.classList.add('-translate-x-full');
    }
});
</script>

</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
