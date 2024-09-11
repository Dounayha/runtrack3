var button = document.getElementById('monButton');
console.log(button);

const afficherButton = document.getElementById('afficherButton');
const texteContainer = document.getElementById('texteContainer');
const cacherButton = document.getElementById('cacherButton');

afficherButton.addEventListener('click', function() {
    texteContainer.style.display = 'block';  // Faire apparaître le texte
    afficherButton.style.display = 'none';   // Cacher le bouton "Afficher"
});

cacherButton.addEventListener('click', function() {
    texteContainer.style.display = 'none';   // Cacher le texte
    afficherButton.style.display = 'block';  // Faire réapparaître le bouton "Afficher"
});