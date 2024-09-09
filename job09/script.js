// Votre fonction tri
function tri(numbers, order) {
    if (order !== "asc" && order !== "desc") {
        return "L'ordre doit être 'asc' ou 'desc'";
    }

    if (order === "asc") {
        numbers.sort(function(a, b) {
            return a - b; // Tri croissant (asc)
        });
    } else if (order === "desc") {
        numbers.sort(function(a, b) {
            return b - a; // Tri décroissant (desc)
        });
    }

    return numbers;
}

// Gestion de l'événement de soumission du formulaire
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('triForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Empêche la soumission par défaut du formulaire

        // Récupération des valeurs saisies par l'utilisateur
        const numbersInput = document.getElementById('numbers').value;
        const order = document.getElementById('order').value;

        // Transformation de la chaîne de nombres en tableau de nombres
        const numbersArray = numbersInput.split(',').map(num => parseFloat(num.trim()));

        // Calcul du tableau trié
        const result = tri(numbersArray, order);

        // Affichage du résultat dans la page
        if (typeof result === 'string') {
            document.getElementById('result').textContent = result;
        } else {
            document.getElementById('result').textContent = "Tableau trié : " + result.join(', ');
        }
    });
});
