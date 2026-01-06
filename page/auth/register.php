<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LivraEase - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }

        .register-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card register-card p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-primary">Créer un compte</h3>
                        <p class="text-muted">Rejoignez notre réseau de livraison</p>
                    </div>
                    <?php
                    session_start();
                    if ($_SESSION == null) {
                    } else {
                        if ($_SESSION['error'] == 'yes') {
                            echo "<div class='alert alert-danger' role='alert'>
                                        L'adresse email n'est pas valide.
                                  </div>";
                        } else {
                        }
                    }
                    $_SESSION['error'] = "no";
                    ?>

                    <form id="registerForm" method="post" action="../../Service/Check_action.php">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Nom complet</label>
                                <input name="nom" type="text" class="form-control bg-light" placeholder="Prénom et Nom"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Adresse Email</label>
                            <input name="email" type="text" class="form-control bg-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vous êtes ?</label>
                            <select name="role" class="form-select bg-light" id="role" required>
                                <option value="" selected disabled>Choisir votre rôle...</option>
                                <option value="client">Client</option>
                                <option value="livreur">Livreur</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input name="password" type="password" value="" class="form-control bg-light" required>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label small" for="terms">J'accepte les conditions
                                d'utilisation</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold mb-3">S'inscrire</button>
                        <div class="text-center">
                            <a href="login.php" class="text-decoration-none small">Déjà un compte ? Se connecter</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>