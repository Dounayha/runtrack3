function showhide() {
    // Récupérer l'élément avec l'id 'citation' si existe
    var article = document.getElementById('citation');

    if (article) {
        // Si l'article existe, le retirer du DOM
        article.remove();
    } else {
        // Si l'article n'existe pas, le créer et l'ajouter
        var newArticle = document.createElement('article');
        newArticle.id = 'citation';  // Définir l'id pour l'article créé
        newArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage.";

        // Ajouter l'article au body du document
        document.body.appendChild(newArticle);
    }
}

// Ajouter un écouteur d'événement au bouton
document.getElementById("button").addEventListener("click", showhide);
