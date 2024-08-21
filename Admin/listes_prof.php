<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Professeurs - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-700 mb-6">Liste des Professeurs</h1>
                <div class="flex justify-end mb-2">
                    <a href="ajouts_prof.php" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                        <i class="fas fa-plus"></i> Ajouter
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-md">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">Photo</th>
                                <th class="py-3 px-6 text-center">Matricule</th>
                                <th class="py-3 px-6 text-center">Nom</th>
                                <th class="py-3 px-6 text-center">Postnom</th>
                                <th class="py-3 px-6 text-center">Catégorie</th>
                                <th class="py-3 px-6 text-center">Salaire</th>
                                <th class="py-3 px-6 text-center">Téléphone</th>
                                <th class="py-3 px-6 text-center">Adresse</th>
                                <th class="py-3 px-6 text-center">Action</th>
                            </tr>
                        </thead>
                        <?php $afficheProf = afficheProf($db); ?>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php foreach ($afficheProf as $prof) { ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">
                                        <img src="./Images/<?php echo $prof->photo_prof ?>" alt="Photo Prof" class="w-10 h-10 rounded-full">
                                    </td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->Matricule_prof ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->Nom_prof ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->PostNom_prof ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->categorie_prof ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->salaire_prof ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->Numtel_prof ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo $prof->Adress_prof ?></td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-start">
                                            <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <a href="infos_prof.php" class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>