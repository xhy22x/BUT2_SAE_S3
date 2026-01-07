<?php
$user = "";
if ($_SESSION['role'] === 'admin') $user = "Espace Admin";
if ($_SESSION['role'] === 'responsable'){
    if($_SESSION['pole_id'] === 1) $user = "Espace Bénévole";
    if($_SESSION['pole_id'] === 2) $user = "Espace Partenariat";
    if($_SESSION['pole_id'] === 2) $user = "Espace Communication";
}
?>
<div class="sticky-top">
    <nav class="navbar bg-dark border-bottom border-white mb-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">
                <i class="bi bi-house-door"></i><span class="d-none d-sm-inline ms-2"><?= $user ?></span>
            </a>
        </div>
    </nav>
    <nav class="nav flex-column">

        <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'responsable' && $_SESSION['pole_id'] === 3): ?>
        <a class="nav-link text-white" style="white-space:nowrap" href="articles.php">
            <i class="bi bi-file-text"></i><span class="d-none d-sm-inline ms-2">Articles</span>
        </a>
        <?php endif; ?>
        <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'responsable' && $_SESSION['pole_id'] === 3): ?>
        <a class="nav-link text-white" style="white-space:nowrap" href="gallery.php">
            <i class="bi bi-collection"></i><span class="d-none d-sm-inline ms-2">Galerie Médias</span>
        </a>
        <?php endif; ?>
        <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'responsable' && $_SESSION['pole_id'] === 3): ?>
        <a class="nav-link text-white" style="white-space:nowrap" href="#">
            <i class="bi bi-envelope"></i><span class="d-none d-sm-inline ms-2">Newsletters</span>
        </a>
        <?php endif; ?>



        <?php if ($_SESSION['role'] === 'admin'): ?>
            <div class="mt-auto position-fixed bottom-0 mb-3">
                <a class="nav-link text-white" style="white-space:nowrap" href="manage-users.php">
                    <i class="bi bi-people"></i><span class="d-none d-sm-inline ms-2">Utilisateurs</span>
                </a>
            </div>
        <?php endif; ?>
    </nav>
</div>
