<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Travail - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-gray-100">
    <div class="h-screen flex overflow-hidden">
        <div class="absolute bg-gray-800 text-white w-56 min-h-screen overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300"
            id="sidebar">
            <div class="p-4">
                <div class="flex items-center m-4">
                    <i class="fas fa-school text-xl mr-2"></i>
                    <span class="text-md font-semibold">School Manager</span>
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
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-white mr-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="text-xl font-semibold">Professseur</span>
                    </div>
                </div>
            </div>

            <div class="flex-1 overflow-auto p-4">
                <main class="p-2">
                    <h1 class="text-2xl font-semibold mb-6">Travail</h1>

                    <div class="bg-white p-6 rounded shadow-md">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Nom</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Cote/20</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Cotation</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">John</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">12</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <button onclick="showCotationForm()"
                                            class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                            <i class="fas fa-plus"></i> Coter
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">John</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">12</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <button onclick="showCotationForm()"
                                            class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                            <i class="fas fa-plus"></i> Coter
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>

                <div id="cotation-form" class="hidden bg-white p-6 rounded shadow-md mt-4">
                    <h2 class="text-xl font-semibold mb-4">Coter l'élève John</h2>
                    <form action="#" method="post">
                        <div class="mb-4">
                            <label for="cote" class="block text-sm font-medium text-gray-700">Cote/20 :</label>
                            <input type="number" name="cote" id="cote" min="0" max="20"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <button type="submit"
                            class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Soumettre
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openSidebarButton = document.getElementById('open-sidebar');
        const cotationForm = document.getElementById('cotation-form');

        openSidebarButton.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.toggle('-translate-x-full');
        });

        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
                sidebar.classList.add('-translate-x-full');
            }
        });

        function showCotationForm() {
            cotationForm.classList.toggle('hidden');
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
