function estNombrePremier(nombre) {
    if (nombre <= 1) return false;
    for (let diviseur = 2; diviseur <= Math.sqrt(nombre); diviseur++) {
        if (nombre % diviseur === 0) return false;
    }
    return true;
}

// Fonction qui prend deux nombres, vérifie s'ils sont premiers, et retourne leur somme ou false
function sommeDesNombresPremiers(nombre1, nombre2) {
    if (estNombrePremier(nombre1) && estNombrePremier(nombre2)) {
        return nombre1 + nombre2;
    } else {
        return false;
    }
}

// Gestion de l'événement de soumission du formulaire
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('primeForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Empêche la soumission par défaut du formulaire

        // Récupération des valeurs saisies par l'utilisateur
        const premierNombre = parseInt(document.getElementById('num1').value);
        const secondNombre = parseInt(document.getElementById('num2').value);
        
        // Calcul de la somme ou affichage d'un message d'erreur
        const resultat = sommeDesNombresPremiers(premierNombre, secondNombre);

        // Affichage du résultat dans la page
        if (resultat !== false) {
            document.getElementById('result').textContent = "La somme des deux nombres premiers est : " + resultat;
        } else {
            document.getElementById('result').textContent = "false";
        }
    });
});
