<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LivraEase - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .btn-primary { background-color: #0d6efd; border: none; padding: 12px; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-primary"><i class="fas fa-shipping-fast"></i> LivraEase</h2>
                <p class="text-muted">Gérez vos livraisons en toute simplicité</p>
            </div>
            <div class="card login-card p-4">
                <form id="loginForm" method="post" action="">
                    <div class="mb-3">
                        <label class="form-label text-secondary">Adresse Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-envelope text-muted"></i></span>
                            <input type="email" class="form-control bg-light border-start-0" id="email" placeholder="nom@exemple.com" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-secondary">Mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-lock text-muted"></i></span>
                            <input type="password" class="form-control bg-light border-start-0" id="password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold mb-3">Se connecter</button>
                    <div class="text-center">
                        <span class="text-muted small">Nouveau sur LivraEase ?</span>
                        <a href="register.php" class="text-decoration-none small fw-bold">Créer un compte</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // هنا سيتم الربط لاحقاً مع الـ Service الخاص بك
        console.log("Tentative de connexion...");
        window.location.href = "../client/dashboard.html"; // مثال للتحويل
    });
</script>
</body>
</html>