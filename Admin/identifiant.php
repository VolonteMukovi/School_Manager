<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les Identifiants</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include "sidebar.php";
        include("../DataBase/connexion_DB.php");
        include("commande.php") ?>
        <div class="flex-grow">
            <?php include "header.php";
            if(isset($_POST["btnEditAdmin"])){

                $pseudo = htmlspecialchars($_POST["identifiant"]);
                $pwd = htmlspecialchars($_POST["motdepasse"]);
                editAdmin($db,$pseudo,$pwd);
                $affiche = AfficheAdmin($db);
            }
            $affiche = AfficheAdmin($db);
            ?>
            <main class="p-6">
                <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Modifier les Identifiants</h2>

                <form method="post" class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
                    <?php foreach ($affiche as $admin) { ?>
                        <div class="mb-4">
                            <label for="identifiant" class="block text-gray-700 font-semibold mb-2">Identifiant</label>
                            <input value="<?php echo $admin->Pseudo  ?>" type="text" id="identifiant" name="identifiant" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="ex: utilisateur" required>
                        </div>
                        <div class="mb-4">
                            <label for="motdepasse" class="block text-gray-700 font-semibold mb-2">Mot de Passe</label>
                            <input value="<?php echo $admin->mot_de_passe  ?>" type="password" id="motdepasse" name="motdepasse" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="********" required>
                        </div>
                    <?php } ?>
                    <div class="text-center">
                        <button name="btnEditAdmin" type="submit" class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Modifier
                        </button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>

</html>