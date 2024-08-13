<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex">
    <aside class="w-64 bg-gray-800 text-white flex flex-col h-screen flex-shrink-0">
        <div class="flex items-center p-4">
            <i class="fas fa-school text-2xl mr-2"></i> 
            <span class="text-xl font-semibold">School Manager</span>
        </div>
        <nav class="flex-grow">
            <ul>
                <li class="px-6 py-2 hover:bg-gray-700">
                    <a href="paiement_frais.php" class="flex items-center">
                        <i class="fas fa-credit-card mr-3"></i> Paiement
                    </a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-700">
                    <a href="payer_salaire.php" class="flex items-center">
                        <i class="fas fa-money-bill mr-3"></i> Payer Salaire
                    </a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-700">
                    <a href="situation_financiere.php" class="flex items-center">
                        <i class="fas fa-chart-line mr-3"></i> Situation Financière
                    </a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-700">
                    <a href="budget.php" class="flex items-center">
                        <i class="fas fa-wallet mr-3"></i> Budget
                    </a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-700">
                    <a href="identifiant.php" class="flex items-center">
                        <i class="fas fa-id-badge mr-3"></i> Identifiants
                    </a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-700">
                    <a href="#" class="flex items-center">
                        <i class="fas fa-sign-out-alt mr-3"></i> Se déconnecter
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
