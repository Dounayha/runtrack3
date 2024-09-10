document.addEventListener('scroll', function() {
    
    var documentHeight = document.documentElement.scrollHeight;
    
    // Récupérer la hauteur actuelle du viewport
    var viewportHeight = window.innerHeight;
    
    // Récupérer la position de défilement actuelle
    var scrollTop = window.scrollY;
    
    // Calculer le pourcentage de défilement
    var scrollPercent = (scrollTop / (documentHeight - viewportHeight)) * 100;
    
    var footer = document.getElementById('footer');

    footer.innerText = `Pourcentage : ${Math.round(scrollPercent)}%`;

    
    // Changer la couleur du footer en fonction du pourcentage de défilement
    footer.style.backgroundColor = `hsl(${scrollPercent}, 100%, 50%)`; // Utilise HSL pour changer la couleur
});
