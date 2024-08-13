<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Professeur - School Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #photo-preview {
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            width: 200px;
            border: 2px dashed #cbd5e0;
        }

        #photo-preview img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            display: none;
        }

        #photo-preview .icon-user {
            font-size: 4rem;
            color: #a0aec0;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-grow">
            <?php include "header.php"; ?>

            <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Ajouter un Professeur</h1>

            <div class="flex">
                <form class="w-2/3 bg-white p-6 rounded shadow-md flex flex-wrap ml-6">
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="matricule">
                            <i class="fas fa-id-badge mr-2"></i> Matricule
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="matricule" type="text" placeholder="Matricule">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="nom">
                            <i class="fas fa-user mr-2"></i> Nom
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Nom">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="postnom">
                            <i class="fas fa-user mr-2"></i> Postnom
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postnom" type="text" placeholder="Postnom">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="categorie">
                            <i class="fas fa-briefcase mr-2"></i> Catégorie
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="categorie" type="text" placeholder="Catégorie">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="salaire">
                            <i class="fas fa-dollar-sign mr-2"></i> Salaire
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="salaire" type="number" placeholder="Salaire">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="telephone">
                            <i class="fas fa-phone mr-2"></i> Téléphone
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telephone" type="text" placeholder="Téléphone">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="adresse">
                            <i class="fas fa-map-marker-alt mr-2"></i> Adresse
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adresse" type="text" placeholder="Adresse">
                    </div>
                    <div class="w-1/2 px-3 mb-6">
                        <label class="block text-gray-700 font-bold mb-2 flex items-center" for="photo">
                            <i class="fas fa-camera mr-2"></i> Photo
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" type="file" accept="image/*" onchange="previewPhoto(event)">
                    </div>
                    <div class="w-full px-3 mb-6 flex justify-end">
                        <button class="bg-gray-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Enregistrer
                        </button>
                    </div>
                </form>

                <div id="photo-preview" class="ml-6">
                    <i class="fas fa-user icon-user"></i>
                    <img id="photo-output" alt="Prévisualisation de la photo">
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewPhoto(event) {
            const preview = document.getElementById('photo-output');
            const iconUser = document.querySelector('#photo-preview .icon-user');

            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                iconUser.style.display = 'none';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>
