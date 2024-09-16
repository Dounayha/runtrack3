<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4">Inscription</h3>
                <form id="register-form">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                        <small id="nom-error" class="text-danger"></small>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom">
                        <small id="prenom-error" class="text-danger"></small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                        <small id="email-error" class="text-danger"></small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                        <small id="password-error" class="text-danger"></small>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>   

    <script>
        $(document).ready(function() {
            
            $('#nom').on('input', function() {
                let nom = $(this).val();
                if (nom.length < 2) {
                    $('#nom-error').text('Le nom doit contenir au moins 2 caractères.');
                } else {
                    $('#nom-error').text('');
                }
            });

      
            $('#prenom').on('input', function() {
                let prenom = $(this).val();
                if (prenom.length < 2) {
                    $('#prenom-error').text('Le prénom doit contenir au moins 2 caractères.');
                } else {
                    $('#prenom-error').text('');
                }
            });

        
            $('#email').on('input', function() {
                let email = $(this).val();
                let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!regex.test(email)) {
                    $('#email-error').text('Adresse email invalide.');
                } else {
                    $('#email-error').text('');
                }
            });

     
            $('#password').on('input', function() {
                let password = $(this).val();
                if (password.length < 8) {
                    $('#password-error').text('Le mot de passe doit contenir au moins 8 caractères.');
                } else {
                    $('#password-error').text('');
                }
            });

       
            $('#register-form').on('submit', function(event) {
                event.preventDefault(); 
                let valid = true;

           
                let nom = $('#nom').val();
                if (nom.length < 2) {
                    $('#nom-error').text('Le nom doit contenir au moins 2 caractères.');
                    valid = false;
                }

                
                let prenom = $('#prenom').val();
                if (prenom.length < 2) {
                    $('#prenom-error').text('Le prénom doit contenir au moins 2 caractères.');
                    valid = false;
                }

              
                let email = $('#email').val();
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    $('#email-error').text('Adresse email invalide.');
                    valid = false;
                }

              
                let password = $('#password').val();
                if (password.length < 8) {
                    $('#password-error').text('Le mot de passe doit contenir au moins 8 caractères.');
                    valid = false;
                }

                if (valid) {
                 
                    alert('Formulaire validé et prêt à être envoyé.');
                }
            });
        });
    </script>    
</body>
</html>