<?php
namespace page\admin;

use Repository\AdminRepository;

session_start();
// var_dump($_SESSION);
if (empty($_SESSION['Admin'])) {
    header("Location:../auth/login.php");
}
include_once("../../vendor/autoload.php");

$AdminRepository = new AdminRepository();
$data = $AdminRepository->listAll();
// var_dump($data[0]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Vérification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar-admin { background: #1a202c; }
        .card-verify { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .table thead { background-color: #f8fafc; }
        .btn-approve { background-color: #10b981; color: white; border: none; }
        .btn-approve:hover { background-color: #059669; color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-admin shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fas fa-shield-alt me-2 text-info"></i>LivraEase Admin</a>
            <a class="navbar-brand fs-6 " href="dashboard.php">dashboard</a>
            <div class="navbar-nav ms-auto">
                <button class="btn btn-outline-light btn-sm" onclick="exportData()"><i class="fas fa-file-csv me-2"></i>Exporter CSV</button>
                <a class="nav-link text-danger ms-3" href="../../Service/logout.php"><i class="fas fa-power-off"></i></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card card-verify mt-4">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="mb-0 text-dark fw-bold"><i class="fas fa-user-clock me-2 text-warning"></i>Comptes en attente d'approbation</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Utilisateur</th>
                                <th>Email</th>
                                <th>Rôle</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($data as $aray){


                                if($aray['Check_role']=="NO"){
                                        echo"<tr>
                                
                                <td class='fw-bold'>{$aray['nom']}</td>
                                <td>{$aray['email']}</td>
                                <td><span class='badge bg-soft-info text-info border border-info'>{$aray['role']}</span></td>
                                <td class='text-center'>
                                    <form action='../../Service/Admin_verify_users.php' method='POST' class='d-inline'>
                                        <input type='hidden' name='id' value='{$aray['id']}'>
                                        <button type='submit' name='action' value='approve' class='btn btn-sm btn-approve px-3'>
                                            <i class='fas fa-check me-1'></i> Approuver
                                        </button>
                                    </form>
                                </td>
                            </tr>";
                                }
                                
                            }
                            














                                 ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function exportData() {
            alert("Exportation CSV en cours...");
            // كود التصدير الخاص بك هنا
        }
    </script>
</body>
</html>