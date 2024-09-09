<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri de Tableau</title>
    <link rel="stylesheet" href="styles.css"> <!-- Si vous avez des styles CSS -->
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Tri de Tableau</h1>
    <form id="triForm">
        <label for="numbers">Entrez les nombres (séparés par des virgules) :</label>
        <input type="text" id="numbers" name="numbers" required>
        
        <label for="order">Choisissez l'ordre de tri :</label>
        <select id="order" name="order">
            <option value="asc">Croissant (asc)</option>
            <option value="desc">Décroissant (desc)</option>
        </select>
        
        <button type="submit">Trier</button>
    </form>
    
    <h2>Résultat :</h2>
    <p id="result"></p>
</body>
</html>
