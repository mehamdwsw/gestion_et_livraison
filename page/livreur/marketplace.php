<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LivraEase - Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .navbar {
            background-color: #1a202c;
        }

        .card-order {
            border: none;
            border-radius: 15px;
            transition: transform 0.2s;
            shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-order:hover {
            transform: translateY(-5px);
        }

        .btn-offer {
            border-radius: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fas fa-truck-moving me-2 text-warning"></i>LivraEase Livreur</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="active-deliveries.html">Mes Livraisons</a>
                <a class="nav-link active" href="marketplace.html">Marché</a>
                <a class="nav-link text-danger" href="../auth/login.html"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Commandes Disponibles</h2>
            <div class="badge bg-white text-dark p-2 shadow-sm border">
                <i class="fas fa-filter me-2"></i> Toutes les villes
            </div>
        </div>

        <div class="row" id="marketplace-grid">
            <div class="col-md-4 mb-4">
                <div class="card card-order h-100 p-3 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-success-subtle text-success border border-success-subtle">Nouveau</span>
                            <small class="text-muted">Il y a 10 min</small>
                        </div>
                        <h5 class="card-title fw-bold">Colis Fragile - Casablanca</h5>
                        <p class="card-text text-muted flex-grow-1">Livraison de vaisselle ancienne, nécessite une attention particulière.</p>
                        <div class="mt-3 mb-3 p-2 bg-light rounded">
                            <small class="d-block text-secondary"><i class="fas fa-map-marker-alt me-2"></i>De: Maarif, Casa</small>
                            <small class="d-block text-secondary"><i class="fas fa-flag-checkered me-2"></i>À: Agdal, Rabat</small>
                        </div>
                        <button class="btn btn-primary btn-offer w-100" data-bs-toggle="modal" data-bs-target="#submitOfferModal">
                            Faire une offre
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="submitOfferModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-header border-0 bg-dark text-white">
                    <h5 class="modal-title fw-bold">Votre Offre de Livraison</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="offerForm">
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary small text-uppercase">Prix proposé (MAD)</label>
                            <input type="number" class="form-control form-control-lg bg-light border-0" placeholder="0.00" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary small text-uppercase">Délai estimé</label>
                            <select class="form-select border-0 bg-light">
                                <option>Moins de 2 heures</option>
                                <option>Aujourd'hui (Avant 20h)</option>
                                <option>Demain matin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary small text-uppercase">Véhicule</label>
                            <div class="d-flex gap-3">
                                <input type="radio" class="btn-check" name="vehicle" id="moto" checked>
                                <label class="btn btn-outline-secondary w-100" for="moto"><i class="fas fa-motorcycle me-1"></i> Moto</label>
                                <input type="radio" class="btn-check" name="vehicle" id="auto">
                                <label class="btn btn-outline-secondary w-100" for="auto"><i class="fas fa-car me-1"></i> Auto</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary small text-uppercase">Options supplémentaires</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="express">
                                <label class="form-check-label" for="express">Livraison Express</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold shadow">Envoyer l'Offre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>