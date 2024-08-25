<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Professeur - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="flex">
        <?php include "sidebar.php";
        ?>

        <div class="flex-grow">
            <?php include "header.php";
            if (isset($_GET["prof"])) {
                if (isset($_GET["action"]) and $_GET["action"] == "consulter") {

                    $_SESSION["idprof"] = $_GET["prof"];
                    $profs = afficheProfInfos($db, $_GET["prof"]);

                    foreach ($profs as $prof) {
                        $matricule =  $prof->Matricule_prof;
                        $nom =  $prof->Nom_prof;
                        $postnom =  $prof->PostNom_prof;
                        $categorie =  $prof->categorie_prof;
                        $salaire =  $prof->salaire_prof;
                        $tele =  $prof->Numtel_prof;
                        $designation_cours = $prof->designation_cours;
                        $adress = $prof->Adress_prof;
                    }
                }
            }
            ?>

            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-700 mb-6">Informations Professeur</h1>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4"><?php echo $nom   ?></h2>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4"><?php echo $postnom  ?></h2>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Cours enseignés :</h3>

                    <ul class="list-disc pl-5 text-gray-600">
                        <?php
                        foreach ($profs as $prof) {  ?>
                            <li> <?php echo $designation_cours = $prof->designation_cours  ?></li>
                        <?php  }

                        ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>