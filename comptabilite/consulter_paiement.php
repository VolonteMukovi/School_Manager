<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Paiement - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1">
            <?php include "header.php"; ?>

            <main class="p-6">
                <div class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto mb-6">
                    <p class="text-gray-700 font-semibold mb-2">
                        <i class="fas fa-user mr-2"></i> Nom: <span class="font-normal">exo vgh</span>
                    </p>
                    <p class="text-gray-700 font-semibold">
                        <i class="fas fa-calendar-alt mr-2"></i> Mois: <span class="font-normal">Août </span>
                    </p>
                </div>

                <div class="bg-white p-6 rounded shadow-md w-full max-w-4xl mx-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-100 border-b  text-center text-gray-600 font-semibold">Date</th>
                                <th class="py-2 px-4 bg-gray-100 border-b  text-center text-gray-600 font-semibold">Montant </th>
                                <th class="py-2 px-4 bg-gray-100 border-b  text-center text-gray-600 font-semibold">Motif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b text-center">12/08/2024</td>
                                <td class="py-2 px-4 border-b text-center">150 $</td>
                                <td class="py-2 px-4 border-b text-center">Frais de scolarité</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b text-center">12/08/2024</td>
                                <td class="py-2 px-4 border-b text-center">150 $</td>
                                <td class="py-2 px-4 border-b text-center">Frais de scolarité</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
