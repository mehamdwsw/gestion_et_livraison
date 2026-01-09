<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LivraEase - Dashboard Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --sidebar-width: 250px; }
        body { background-color: #f4f7f6; }
        .sidebar { width: var(--sidebar-width); height: 100vh; position: fixed; background: #2c3e50; color: white; transition: 0.3s; }
        .main-content { margin-left: var(--sidebar-width); padding: 20px; transition: 0.3s; }
        .nav-link { color: #bdc3c7; margin: 5px 0; border-radius: 8px; }
        .nav-link:hover, .nav-link.active { background: #34495e; color: white; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .status-badge { font-size: 0.8rem; padding: 5px 12px; border-radius: 20px; }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column p-3">
        <h3 class="text-center fw-bold mb-4 text-primary">LivraEase</h3>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fas fa-home me-2"></i> Dashboard</a>
            </li>
            <li>
                <a href="#" class="nav-link"><i class="fas fa-box me-2"></i> Mes Commandes</a>
            </li>
            <li>
                <a href="../auth/notifications.html" class="nav-link"><i class="fas fa-bell me-2"></i> Notifications</a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Mon Profil</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Paramètres</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="../../Service/logout.php">Déconnexion</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Tableau de bord</h2>
                <p class="text-muted">Gérez vos livraisons et suivez vos colis.</p>
            </div>
            <button class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                <i class="fas fa-plus me-2"></i> Nouvelle Commande
            </button>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card p-3 d-flex flex-row align-items-center">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3 text-primary"><i class="fas fa-clock fa-lg"></i></div>
                    <div><h4 class="mb-0 fw-bold">3</h4><small class="text-muted">En attente</small></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 d-flex flex-row align-items-center">
                    <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3 text-success"><i class="fas fa-check-circle fa-lg"></i></div>
                    <div><h4 class="mb-0 fw-bold">12</h4><small class="text-muted">Terminées</small></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 d-flex flex-row align-items-center">
                    <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3 text-warning"><i class="fas fa-truck-loading fa-lg"></i></div>
                    <div><h4 class="mb-0 fw-bold">2</h4><small class="text-muted">En cours</small></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold text-dark">Dernières Commandes</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-3">ID</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Offres</th>
                            <th class="text-end pe-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="ordersList">
                        <tr>
                            <td class="ps-3 fw-bold text-primary">#1024</td>
                            <td>Livraison Documents - Rabat</td>
                            <td>29/12/2025</td>
                            <td><span class="status-badge bg-warning bg-opacity-10 text-warning">En attente</span></td>
                            <td><span class="badge rounded-pill bg-info">3 offres</span></td>
                            <td class="text-end pe-3">
                                <button class="btn btn-sm btn-light border" title="Détails"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-light border text-danger" title="Annuler"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addOrderModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-primary text-white border-0">
                    <h5 class="modal-title fw-bold">Créer une livraison</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="orderForm">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Titre de la commande</label>
                            <input type="text" class="form-control" placeholder="Ex: Livraison de documents" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Poids, fragilité, etc."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Départ</label>
                                <input type="text" class="form-control" placeholder="Ville de départ">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Arrivée</label>
                                <input type="text" class="form-control" placeholder="Ville d'arrivée">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold mt-3">Publier la commande</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JS Logic for US-C01 can be linked here with your Service files
        document.getElementById('orderForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert("Commande créée ! (Maintenant, liez ceci à votre CommandeService.php)");
            bootstrap.Modal.getInstance(document.getElementById('addOrderModal')).hide();
        });
    </script>
</body>
</html>