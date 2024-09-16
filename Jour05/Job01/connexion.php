<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion sécurisé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center mb-4">Connexion</h3>
                <form id="login-form">
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
                    <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                </form>
            </div>
        </div>
    </div>   

    <script>
        $(document).ready(function() {
            
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


            $('#login-form').on('submit', function(event) {
                event.preventDefault(); 
                let email = $('#email').val();
                let password = $('#password').val();
                let valid = true;


                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    $('#email-error').text('Adresse email invalide.');
                    valid = false;
                }
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