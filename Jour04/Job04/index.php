<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <button id="updateBtn">Mettre à jour</button>
    <table id="usersTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les utilisateurs seront ajoutés ici par JavaScript -->
        </tbody>
    </table>

    <script>
        document.getElementById('updateBtn').addEventListener('click', function() {
            fetch('users.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#usersTable tbody');
                    tableBody.innerHTML = ''; // Vider le tableau existant

                    data.forEach(user => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${user.id}</td>
                            <td>${user.nom}</td>
                            <td>${user.prenom}</td>
                            <td>${user.email}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Erreur lors du chargement des utilisateurs :', error));
        });
    </script>
</body>
</html>
