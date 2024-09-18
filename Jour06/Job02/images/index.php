<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPlateforme_</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">LPFT</a>
    <!-- Bouton pour le mode mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Contenu de la navbar -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://laplateforme.io/" target="_blank">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Units</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Skills</a>
            </li>
        </ul>
    </div>
</nav>


<!-- Contenu principal avec alignement horizontal -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="papillon.jpg" class="card-img-top" alt="Un Papillon">
                <div class="card-body">
                    <h5 class="card-title">Un Papillon</h5>
                    <p class="card-text">Cet être, né d’un poème comme une chenille, mais avec des ailes. Ne pas les ingérer.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Commander votre propre papillon</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1>Bonjour, monde!</h1>
            <p>Il existe plusieurs visions du terme:</p>
            <ul>
                <li id="jumbotron-text">Le monde est la matière, l’espace et les phénomènes qui nous sont accessibles par les sens, l’expérience ou la raison.</li>
                <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
            </ul>
            <button id="reboot-button" class="btn btn-danger">Rebooter le Monde</button>
        </div>

        <!-- Colonne ajoutée pour aligner la liste à droite -->
        <div class="col-md-3">
            <ul class="list-group" id="list-group">
                <li class="list-group-item">Luxe</li>
                <li class="list-group-item">Gourmandise</li>
                <li class="list-group-item">Avarice</li>
                <li class="list-group-item">Colère</li>
                <li class="list-group-item">Hérésie</li>
                <li class="list-group-item">Violence</li>
                <li class="list-group-item">Ruse et Tromperie</li>
                <li class="list-group-item">Trahison</li>
                <li class="list-group-item">Internet Explorer</li>
            </ul>
        </div>
    </div>
</div>

<!-- Pagination -->
<div class="container mt-4">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item"><a class="page-link" href="#" data-page="1">Page 1</a></li>
            <li class="page-item"><a class="page-link" href="#" data-page="2">Page 2</a></li>
            <li class="page-item"><a class="page-link" href="#" data-page="3">Page 3</a></li>
        </ul>
    </nav>
</div>

<!-- Modale -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirmation d'achat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir acheter ce papillon ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Confirmer l'achat</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h5>Installation de AI 9000</h5>
    <div class="d-flex align-items-center justify-content-between">
        <button id="decrease" class="btn btn-danger">Réduire</button>
        <div class="progress w-100 mx-3">
            <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <button id="increase" class="btn btn-success">Augmenter</button>
    </div>

    <!-- Ajout d'une marge entre les sections -->
    <div class="row mt-5">
        <div class="col-md-6">
            <input type="text" class="form-control mb-2" placeholder="Login">
            <input type="password" class="form-control mb-2" placeholder="Mot de Passe">
            <input type="url" class="form-control mb-2" placeholder="URL des Internets 2 et 2.1 Beta">
            <input type="number" class="form-control" placeholder="DogeCoin">
        </div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <input type="email" class="form-control mb-2" id="email" placeholder="Email address">
            <div class="error-message" id="email-error">Vous devez remplir l'email</div>
            <input type="password" class="form-control mb-2" id="password" placeholder="Password">
            <div class="error-message" id="password-error">Vous devez remplir le mot de passe</div>
            <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
        </div>

    </div>
</div>

<!-- Modale récapitulatif du formulaire -->
<div class="modal fade" id="formRecapModal" tabindex="-1" aria-labelledby="formRecapModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formRecapModalLabel">Récapitulatif du formulaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="form-recap-content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quotes = [
            "I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion.",
            "All those moments will be lost in time, like tears in rain.",
            "It’s too bad she won’t live! But then again, who does?",
            "I’m not in the business. I am the business.",
            "Quite an experience to live in fear, isn’t it? That’s what it is to be a slave."
        ];

        const pages = {
            1: "Le monde est la matière, l’espace et les phénomènes qui nous sont accessibles par les sens, l’expérience ou la raison.",
            2: "Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.",
            3: "Ceci est un contenu supplémentaire pour la page 3."
        };

        document.getElementById('reboot-button').addEventListener('click', function() {
            const randomIndex = Math.floor(Math.random() * quotes.length);
            const quote = quotes[randomIndex];
            document.getElementById('jumbotron-text').textContent = quote;
        });

        document.querySelectorAll('.pagination .page-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const page = this.getAttribute('data-page');
                document.getElementById('jumbotron-text').textContent = pages[page];
            });
        });

        const listGroupItems = document.querySelectorAll('#list-group .list-group-item');
        listGroupItems.forEach(function(item) {
            item.addEventListener('click', function() {
                listGroupItems.forEach(function(i) {
                    i.classList.remove('active');
                });
                item.classList.add('active');
            });
        });
    });
        $(document).ready(function() {
        $("#increase").click(function() {
            let currentWidth = parseInt($("#progress-bar").attr("aria-valuenow"));
            if (currentWidth < 100) {
                currentWidth += 10;
                $("#progress-bar").css("width", currentWidth + "%").attr("aria-valuenow", currentWidth);
            }
        });

        $("#decrease").click(function() {
            let currentWidth = parseInt($("#progress-bar").attr("aria-valuenow"));
            if (currentWidth > 0) {
                currentWidth -= 10;
                $("#progress-bar").css("width", currentWidth + "%").attr("aria-valuenow", currentWidth);
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
    let keySequence = [];
    const correctSequence = ['d', 'g', 'c'];

    document.addEventListener('keydown', function(event) {
        keySequence.push(event.key.toLowerCase());

      
        if (keySequence.length > 3) {
            keySequence.shift();
        }

     
        if (keySequence.join('') === correctSequence.join('')) {
         
            const login = document.querySelector('input[placeholder="Login"]').value;
            const password = document.querySelector('input[placeholder="Mot de Passe"]').value;
            const url = document.querySelector('input[placeholder="URL des Internets 2 et 2.1 Beta"]').value;
            const dogecoin = document.querySelector('input[placeholder="DogeCoin"]').value;
            const email = document.querySelector('input[type="email"]').value;
            const formPassword = document.querySelector('input[placeholder="Password"]').value;

          
            const recapContent = `
                <strong>Login:</strong> ${login}<br>
                <strong>Mot de Passe:</strong> ${password}<br>
                <strong>URL:</strong> ${url}<br>
                <strong>DogeCoin:</strong> ${dogecoin}<br>
                <strong>Email:</strong> ${email}<br>
                <strong>Password:</strong> ${formPassword}
            `;

           
            document.getElementById('form-recap-content').innerHTML = recapContent;

          
            $('#formRecapModal').modal('show');
        }
    });
});
function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    $(document).ready(function() {
        $('#submit-btn').click(function(event) {
            event.preventDefault();

            let email = $('#email').val().trim();
            let password = $('#password').val().trim();
            let formValid = true;

            // Vérification de l'email
            if (email === "") {
                $('#email-error').show();
                formValid = false;
            } else {
                $('#email-error').hide();
            }

            // Vérification du mot de passe
            if (password === "") {
                $('#password-error').show();
                formValid = false;
            } else {
                $('#password-error').hide();
            }

            // Si les champs sont remplis, appliquer une couleur aléatoire à la section "Bonjour, monde!"
            if (formValid) {
                $('.col-md-6:nth-child(2)').css('background-color', getRandomColor());
            }
        });
    });


</script>

</body>
</html>