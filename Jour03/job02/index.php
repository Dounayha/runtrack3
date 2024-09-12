<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arc-en-ciel avec jQuery</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Reconstituer l'Arc-en-ciel</h1>
    <button id="shuffleButton">Mélanger les images</button>
    <div id="imageContainer">
        <img src="./images/arc1.png" alt="Rouge" data-color="red">
        <img src="./images/arc2.png" alt="Orange" data-color="orange">
        <img src="./images/arc3.png" alt="Jaune" data-color="yellow">
        <img src="./images/arc4.png" alt="Vert" data-color="green">
        <img src="./images/arc5.png" alt="Bleu" data-color="blue">
        <img src="./images/arc6.png" alt="Violet" data-color="purple">
    </div>
    <p id="message"></p>
</body>
</html>