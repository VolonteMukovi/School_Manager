<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter les travaux - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" min-h-screen">
<div class="bg-gray-100">

<div class="h-screen flex overflow-hidden bg-gray-200">
    <div class="absolute bg-gray-800 text-white w-56 min-h-screen overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300"
        id="sidebar">
        <div class="p-4">
        <div class="flex items-center m-4 ">
                <i class="fas fa-school text-xl mr-2"></i> 
                <span class="text-md font-semibold ">School Manager</span>
        </div>
            <nav class="flex-grow">
                <ul>
                    <li class="px-6 py-2 hover:bg-gray-700">
                        <a href="cours.php" class="flex items-center">
                            <i class="fas fa-book mr-3"></i> Mes Cours
                        </a>
                    </li>
                    <li class="px-6 py-2 hover:bg-gray-700">
                        <a href="periode.php" class="flex items-center">
                            <i class="fas fa-clock mr-3"></i> Périodes
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
                <h1 class="text-2xl font-semibold mb-6">Consulter les Travaux</h1>
                <div class="flex justify-end mb-2">
                    <a href="ajout_travail.php" class="bg-gray-600 mr-2 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-plus"></i> Nouveau
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-16">
                    <div class="bg-white p-4 rounded shadow-md flex flex-col">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-hashtag text-gray-500 mr-3"></i>
                            <span class="text-lg font-semibold">Numéro: 1</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-book text-gray-500 mr-3"></i>
                            <span class="text-lg">Désignation: Géo</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-star text-gray-500 mr-3"></i>
                            <span class="text-lg">Côte: 15</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-clipboard-list text-gray-500 mr-3"></i>
                            <span class="text-lg">Catégorie: Géographie</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-calendar-alt text-gray-500 mr-3"></i>
                            <span class="text-lg">Date: 2024-08-12</span>
                        </div>
                        <div class="flex justify-between">
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="voir_travail.php" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded shadow-md flex flex-col">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-hashtag text-gray-500 mr-3"></i>
                            <span class="text-lg font-semibold">Numéro: 1</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-book text-gray-500 mr-3"></i>
                            <span class="text-lg">Désignation: Géo</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-star text-gray-500 mr-3"></i>
                            <span class="text-lg">Côte: 15</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-clipboard-list text-gray-500 mr-3"></i>
                            <span class="text-lg">Catégorie: Géographie</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-calendar-alt text-gray-500 mr-3"></i>
                            <span class="text-lg">Date: 2024-08-12</span>
                        </div>
                        <div class="flex justify-between">
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="voir_travail.php" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
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
