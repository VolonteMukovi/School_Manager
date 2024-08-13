<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow ">
            <?php include "header.php"; ?> 

            <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Élèves inscrits</h1>
            <div class="flex justify-end mb-2">
                <a href="ajouts_eleves.php" class="bg-gray-600 mr-2 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                    <i class="fas fa-plus"></i> Ajouter
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded ">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-2 px-4 text-center">Photo</th>
                            <th class="py-2 px-4 text-center">Matricule</th>
                            <th class="py-2 px-4 text-center">Code</th>
                            <th class="py-2 px-4 text-center">Nom</th>
                            <th class="py-2 px-4 text-center">Postnom</th>
                            <th class="py-2 px-4 text-center">Classe</th>
                            <th class="py-2 px-4 text-center">Parents/Tuteur</th>
                            <th class="py-2 px-4 text-center">Telephone</th>
                            <th class="py-2 px-4 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-t py-2 px-4">
                                <img src="assets/téléchargement.jpg" alt="Photo de l'élève" class="w-10 h-10 rounded-full">
                            </td>
                            <td class="border-t py-2 px-4 text-center">4339</td>
                            <td class="border-t py-2 px-4 text-center">A001</td>
                            <td class="border-t py-2 px-4 text-center">AUGUST</td>
                            <td class="border-t py-2 px-4 text-center">MUSANDE</td>
                            <td class="border-t py-2 px-4 text-center">6ème A</td>
                            <td class="border-t py-2 px-4 text-center">Mr EXAUDIE</td>
                            <td class="border-t py-2 px-4 text-center">+243971171463</td>
                            <td class="border-t py-2 px-4 text-center">
                                <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i> Éditer</button>
                                <button class="text-red-500 hover:text-red-700 ml-2"><i class="fas fa-trash"></i> Supprimer</button>
                                <a href="infos_eleves_cours.php" class="text-green-500 hover:text-green-700 ml-2"><i class="fas fa-eye"></i> Consulter</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

           
        </div>
    </div>
</body>
</html>
