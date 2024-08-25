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
        <?php include "sidebar.php" ?>


        <div class="flex-grow ">
            <?php include "header.php" ?>

            </header>
            <?php if (isset($_GET["action"]) and $_GET["action"] == "cloturer") {
                $id = $_GET["status"];
                clotureAnne($db, $id);
            ?>
                <script>
                    window.location.href = "dasboard.php";
                </script>
            <?php
            } else {  ?>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6 cursor-pointer">
                    <div class="bg-gray-400 text-white p-4 shadow-md ml-2">
                        <div class="flex justify-between items-center">
                            <?php $nbrEleve = countEleve($db);
                            foreach ($nbrEleve as $eleve) {
                                $nbreEleve = $eleve->nbrEleve;
                            }
                            ?>
                            <h3 class="text-2xl font-bold"><?php echo $nbreEleve;    ?></h3>
                            <i class="fas fa-user-graduate text-4xl"></i>
                        </div>
                        <p class="mt-2 text-lg font-semibold">Élèves inscrits</p>
                    </div>
                    <div class="bg-gray-500 text-white p-4 rounded-lg shadow-md cursor-pointer">
                        <div class="flex justify-between items-center">
                            <?php $nbrProf = countPofesseur($db);
                            foreach ($nbrProf as $prof) {
                                $prof = $prof->nbrProf;
                            }
                            ?>
                            <h3 class="text-2xl font-bold"><?php echo $prof    ?></h3>
                            <i class="fas fa-chalkboard-teacher text-4xl"></i>
                        </div>
                        <p class="mt-2 text-lg font-semibold">Professeurs</p>
                    </div>
                    <div class="bg-gray-600 text-white p-4 rounded-lg shadow-md cursor-pointer">
                        <div class="flex justify-between items-center">
                            <?php
                            $nbrCours = courCount($db);
                            foreach ($nbrCours as $cour) {
                                $cours = $cour->nbrCours;
                            }
                            ?>
                            <h3 class="text-2xl font-bold"><?php echo $cours;  ?></h3>
                            <i class="fas fa-book text-4xl"></i>
                        </div>
                        <p class="mt-2 text-lg font-semibold">Cours offerts</p>
                    </div>
                    <div class="bg-gray-700 text-white p-4 rounded-lg shadow-md mr-3 cursor-pointer">
                        <div class="flex justify-between items-center">
                        <?php
                            $nbrOption = countOption($db);
                            foreach ($nbrOption  as $option) {
                                $options = $option->nbrOption;
                            }
                            ?>
                            <h3 class="text-2xl font-bold"><?php echo $options;   ?></h3>
                            <i class="fas fa-stream text-4xl"></i>
                        </div>
                        <p class="mt-2 text-lg font-semibold">Options disponibles</p>
                    </div>
                </div>

                <div class="flex justify-end mb-6 mr-3">
                    <a href="ajouts_annee.php?action=ajouter" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-500">
                        <i class="fas fa-plus mr-2"></i> Ajouter
                    </a>
                </div>

                <?php $annees = AfficheAnnee($db);
                foreach ($annees as $annee) {
                    if ($annee->status == "Cloturer") { ?>
                        <div class="flex items-center justify-between bg-white p-4 rounded shadow-md mx-2 mb-2">
                            <span class="text-lg font-semibold text-gray-700"><?php echo $annee->status ?> : <span class="font-bold text-[#16C8FF]"><?php echo $annee->annee ?></span></span>
                            <div>
                                <span disabled class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-yellow-600">
                                    <i class="fas fa-edit mr-2"></i> Éditer
                                </span> <?php
                                        $affWhere = anneeEncours($db);
                                        foreach ($affWhere as $where) {
                                            $where = $where;
                                        } ?>
                                <span disabled class=" ml-4 bg-red-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-red-600">
                                    <i class="fas fa-times-circle mr-2"></i> Clôturer
                                </span>

                                <span class=" ml-4 bg-green-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-green-600">
                                    <a href="inscrits.php?action=consulter&annee=<?php echo $annee->annee  ?>&status=<?php echo $annee->status ?>"><i class="fas fa-eye"></i> Consulter</a>
                                </span>

                            </div>
                        </div>
                    <?php } else {
                    ?>
                        <div class="flex items-center justify-between bg-white p-4 rounded shadow-md mx-2 mb-2">
                            <span class="text-lg font-semibold text-gray-700"><?php echo $annee->status ?> : <span class="font-bold text-[#16C8FF]"><?php echo $annee->annee ?></span></span>
                            <div>
                                <button class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-yellow-600">
                                    <i class="fas fa-edit mr-2"></i> <a href="ajouts_annee.php?action=editer">Éditer</a>
                                </button> <?php
                                            $affWhere = anneeEncours($db);
                                            foreach ($affWhere as $where) {
                                                $where = $where;
                                            } ?>
                                <a href="?action=cloturer&status=<?php echo $where->ID_anne_scholaire ?>" class=" ml-4 bg-red-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-red-600">
                                    <i class="fas fa-times-circle mr-2"></i>Clôturer
                                </a>
                            </div>
                        </div>
                <?php }
                }
                ?>
        </div>
    <?php } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>