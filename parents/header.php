<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Parents - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="bg-gray-800 text-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo Section -->
            <div class="flex items-center">
                <i class="fas fa-school text-2xl mr-2"></i> <!-- Remplacez l'icône avec une correspondant au projet -->
                <span class="text-xl font-semibold">School Manager</span>
            </div>

            <!-- Navigation Section -->
            <nav class="hidden md:flex space-x-6">
                <a href="dashboard_parent.php" class="hover:text-gray-300 flex items-center">
                    <i class="fas fa-home mr-2"></i> Accueil
                </a>
                <a href="travaux_enfants.php" class="hover:text-gray-300 flex items-center">
                    <i class="fas fa-file-alt mr-2"></i> Travaux de mes enfants
                </a>
                <a href="notes_enfants.php" class="hover:text-gray-300 flex items-center">
                    <i class="fas fa-chart-line mr-2"></i> Notes
                </a>
                <a href="messages.php" class="hover:text-gray-300 flex items-center">
                    <i class="fas fa-envelope mr-2"></i> Messages
                </a>
                <a href="profil.php" class="hover:text-gray-300 flex items-center">
                    <i class="fas fa-user mr-2"></i> Profil
                </a>
                <a href="se_deconnecter.php" class="hover:text-red-400 flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="md:hidden" id="mobile-menu">
        <nav class="bg-gray-800 text-white">
            <a href="dashboard_parent.php" class="block px-4 py-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-home mr-2"></i> Accueil
            </a>
            <a href="travaux_enfants.php" class="block px-4 py-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-file-alt mr-2"></i> Travaux de mes enfants
            </a>
            <a href="notes_enfants.php" class="block px-4 py-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chart-line mr-2"></i> Notes
            </a>
            <a href="messages.php" class="block px-4 py-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-envelope mr-2"></i> Messages
            </a>
            <a href="profil.php" class="block px-4 py-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-user mr-2"></i> Profil
            </a>
            <a href="se_deconnecter.php" class="block px-4 py-2 hover:bg-gray-700 flex items-center text-red-400">
                <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
            </a>
        </nav>
    </div>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>

