document.addEventListener('keydown', function(event) {
    // Récupérer la zone de texte
    var textarea = document.getElementById('keylogger');

    // Vérifier si la touche tapée est une lettre (entre 'a' et 'z')
    if (event.key >= 'a' && event.key <= 'z') {
        // Vérifier si le focus est déjà dans le textarea
        if (document.activeElement === textarea) {
            // Ajouter la lettre deux fois
            textarea.value += event.key ;
        } else {
            // Ajouter la lettre une seule fois
            textarea.value += event.key;
        }
    }
});

