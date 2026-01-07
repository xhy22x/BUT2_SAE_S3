<?php
require('../../controllers/security.php');
requireAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../partials/head-admin.php' ?>
<body>
<div class="container-fluid">
    <div class="row min-vh-100">
        <div class="col-2 col-sm-3 col-xl-2 bg-dark">
            <?php include '../partials/sidebar-admin.php' ?>
        </div>
        <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
            <?php include '../partials/topbar-admin.php' ?>

            <section class="container">
                <!-- CONTENU DE LA PAGE -->
                <?php if (isset($content)) echo $content; ?>
            </section>

        </div>
    </div>
</div>
</body>
</html>