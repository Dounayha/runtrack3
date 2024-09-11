// Tableau du code Konami
const konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
let konamiPosition = 0;

// Fonction pour styliser la page lorsque le code Konami est entré
function activateKonamiMode() {
    document.body.classList.add("konami-active"); // Appliquer la classe au body
    const content = document.getElementById("content");
    content.classList.add("konami-active"); // Appliquer la classe au contenu
    content.innerHTML = `
        <h1>Bienvenue à La Plateforme_ !</h1>
        <p>Le code Konami a été entré avec succès !</p>
    `;
}

// Ecouteur d'événements sur le document pour capter les touches du clavier
document.addEventListener("keydown", function(event) {
    // Vérifier si la touche tapée correspond à la prochaine dans le code Konami
    if (event.keyCode === konamiCode[konamiPosition]) {
        konamiPosition++;
        // Si le code est entièrement entré, activer le mode Konami
        if (konamiPosition === konamiCode.length) {
            activateKonamiMode();
            konamiPosition = 0; // Réinitialiser la position pour permettre de le refaire
        }
    } else {
        konamiPosition = 0; // Réinitialiser si la séquence est brisée
    }
});