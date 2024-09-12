document.getElementById('button').addEventListener('click', function() {
    fetch('expression.txt')  // Récupère le fichier
        .then(response => response.text())  // Convertit la réponse en texte
        .then(data => {
            document.getElementById('expression').innerText = data;  // Affiche le contenu dans le paragraphe
        })
        .catch(error => console.error('Erreur lors de la récupération du fichier:', error));  // Gère les erreurs
});
