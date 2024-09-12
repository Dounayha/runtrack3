$(document).ready(function() {
    // Sélectionner les éléments nécessaires
    const correctOrder = ["red", "orange", "yellow", "green", "blue", "purple"];

    // Mélanger les images de façon aléatoire
    function shuffleImages() {
        let images = $("#imageContainer img");
        images = images.sort(function() { return 0.5 - Math.random(); });
        $("#imageContainer").html(images); // Réordonner dans le conteneur
    }

    // Vérifier si l'ordre des images est correct
    function checkOrder() {
        let currentOrder = $("#imageContainer img").map(function() {
            return $(this).data("color");
        }).get();

        if (JSON.stringify(currentOrder) === JSON.stringify(correctOrder)) {
            $("#message").text("Vous avez gagné").css("color", "green");
        } else {
            $("#message").text("Vous avez perdu").css("color", "red");
        }
    }

    // Mélanger les images au clic du bouton
    $("#shuffleButton").on("click", function() {
        shuffleImages();
    });

    // Activer le drag and drop avec jQuery UI
    $("#imageContainer").sortable({
        update: function(event, ui) {
            checkOrder(); // Vérifier après chaque réarrangement
        }
    });
});