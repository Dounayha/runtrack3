<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme des nombres premiers</title>
</head>
<body>
    <h1>Vérification et somme des nombres premiers</h1>
    
    <form id="primeForm" method="POST">
        <label for="num1">Nombre 1 :</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Nombre 2 :</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <button type="submit">Vérifier et calculer la somme</button>
    </form>

    <!-- Zone pour afficher le résultat -->
    <p id="result"></p>

    <!-- Inclusion du fichier JavaScript -->
    <script src="script.js"></script>
</body>
</html>
