<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Répartition Budgétaire - School Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <?php include "sidebar.php"; ?>

        <div class="flex-1 space-y-2">
            <?php include "header.php"; ?>

            <main class="flex-1 p-6">
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-300 w-1/2 mb-6">
                    <form id="etatBudgetaireForm">
                        <div class="flex flex-col space-y-4">
                            <div class="flex-1">
                                <label for="etatBudgetaire" class="text-gray-700 font-semibold mb-2">État Budgétaire:</label>
                                <input type="number" id="etatBudgetaire" name="etatBudgetaire" required
                                    class="w-full bg-gray-200 p-2 border border-gray-300 rounded">
                            </div>
                            <button type="submit"
                                class="bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                                Définir l'état budgétaire
                            </button>
                        </div>
                    </form>
                </div>

                <div id="etatBudgetaireSection" class="mb-6"></div>

                <div id="subdivisionFormSection" class="mb-6"></div>

                <div id="resultSubdivisionsSection"></div>
            </main>
        </div>
    </div>

    <script>
        const etatBudgetaireForm = document.getElementById('etatBudgetaireForm');
        const etatBudgetaireSection = document.getElementById('etatBudgetaireSection');
        const subdivisionFormSection = document.getElementById('subdivisionFormSection');
        const resultSubdivisionsSection = document.getElementById('resultSubdivisionsSection');

        let etatBudgetaire = 0;

        etatBudgetaireForm.addEventListener('submit', function (e) {
            e.preventDefault();
            etatBudgetaire = parseFloat(document.getElementById('etatBudgetaire').value);
            afficherEtatBudgetaire();
            afficherSubdivisionForm();
        });

        function afficherEtatBudgetaire() {
            etatBudgetaireSection.innerHTML = `
                <div class="bg-gray-100 p-4 border border-gray-300 rounded">
                    <p class="text-gray-800 font-semibold">État Budgétaire: ${etatBudgetaire.toFixed(2)} $</p>
                    <button id="subdiviserBtn"
                        class="bg-gray-700 text-white font-semibold py-2 px-4 mt-4 rounded shadow hover:bg-gray-400">
                        Modifier
                    </button>
                </div>
            `;
        }

        function afficherSubdivisionForm() {
            subdivisionFormSection.innerHTML = `
                <form id="subdivisionForm" class="bg-white p-6 rounded-lg shadow-md border border-gray-300">
                    <div class="flex flex-col space-y-4">
                        <div class="flex-1">
                            <label for="nombreSubdivisions" class="text-gray-700 font-semibold mb-2">Nombre de Subdivisions:</label>
                            <input type="number" id="nombreSubdivisions" name="nombreSubdivisions" required
                                class="w-full bg-gray-200 p-2 border border-gray-300 rounded">
                        </div>
                        <div id="libellesSubdivisionsSection"></div>
                        <button type="button" id="voirSubdivisionBtn"
                            class="bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow hover:bg-gray-400">
                            Voir Subdivision
                        </button>
                    </div>
                </form>
            `;

            const nombreSubdivisionsInput = document.getElementById('nombreSubdivisions');
            nombreSubdivisionsInput.addEventListener('change', afficherLibellesEtMontantsForm);
        }

        function afficherLibellesEtMontantsForm() {
            const nombreSubdivisions = parseInt(document.getElementById('nombreSubdivisions').value);
            const libellesSubdivisionsSection = document.getElementById('libellesSubdivisionsSection');
            libellesSubdivisionsSection.innerHTML = '';

            for (let i = 1; i <= nombreSubdivisions; i++) {
                const subdivisionDiv = document.createElement('div');
                subdivisionDiv.className = 'flex space-x-4 mb-4';

                subdivisionDiv.innerHTML = `
                    <div class="flex-1">
                        <label for="libelleSubdivision${i}" class="text-gray-700 font-semibold">Libellé Subdivision ${i}:</label>
                        <input type="text" id="libelleSubdivision${i}" name="libelleSubdivision${i}" required
                            class="w-full bg-gray-200 p-2 border border-gray-300 rounded">
                    </div>
                    <div class="flex-1">
                        <label for="montantSubdivision${i}" class="text-gray-700 font-semibold">Montant Subdivision ${i}:</label>
                        <input type="number" id="montantSubdivision${i}" name="montantSubdivision${i}" required
                            class="w-full bg-gray-200 p-2 border border-gray-300 rounded">
                    </div>
                `;

                libellesSubdivisionsSection.appendChild(subdivisionDiv);
            }
        }

        subdivisionFormSection.addEventListener('click', function (e) {
            if (e.target && e.target.id === 'voirSubdivisionBtn') {
                afficherResultatSubdivisions();
            }
        });

        function afficherResultatSubdivisions() {
            resultSubdivisionsSection.innerHTML = '';  

            const nombreSubdivisions = parseInt(document.getElementById('nombreSubdivisions').value);
            let totalMontantSubdivise = 0;

            for (let i = 1; i <= nombreSubdivisions; i++) {
                const libelle = document.getElementById(`libelleSubdivision${i}`).value;
                const montant = parseFloat(document.getElementById(`montantSubdivision${i}`).value);
                const pourcentage = (montant / etatBudgetaire) * 100;
                totalMontantSubdivise += montant;

                const resultDiv = document.createElement('div');
                resultDiv.className = 'bg-gray-100 p-4 border border-gray-300 rounded mb-4';
                resultDiv.innerHTML = `
                    <div class="flex justify-between items-center">
                        <div class="flex-1 text-gray-800 font-semibold">Subdivision ${i}:</div>
                        <div class="flex-1">
                            <p class="text-gray-700">Libellé: <span class="font-medium">${libelle}</span></p>
                        </div>
                        <div class="flex-1">
                            <p class="text-gray-700">Montant: <span class="font-medium">${montant.toFixed(2)} $</span></p>
                        </div>
                        <div class="flex-1">
                            <p class="text-gray-700">Pourcentage: <span class="font-medium">${pourcentage.toFixed(2)}%</span></p>
                        </div>
                    </div>
                `;
                resultSubdivisionsSection.appendChild(resultDiv);
            }

            if (totalMontantSubdivise !== etatBudgetaire) {
                alert(`Le total des montants subdivisés (${totalMontantSubdivise} $) ne correspond pas à l'état budgétaire (${etatBudgetaire} $). Veuillez vérifier les montants.`);
            }
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
