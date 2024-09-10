// Attendre que tout le DOM soit chargé avant d'exécuter le script
document.addEventListener("DOMContentLoaded", function() {
    function addone() {
        // Récupère l'élément <p> ayant l'id "compteur"
        var compteurElement = document.getElementById("compteur");
        
        // Convertit le contenu actuel en nombre 
        var compteur = parseInt(compteurElement.textContent);

        compteur += 1;

        compteurElement.textContent = compteur;
    }

    document.getElementById("button").addEventListener("click", addone);
});
