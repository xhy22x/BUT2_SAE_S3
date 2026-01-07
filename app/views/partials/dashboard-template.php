<!DOCTYPE html>
<html lang="en">
<?php include '../partials/head-dashboard.php' ?>
<body>
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-2 col-sm-3 col-xl-2 bg-dark">
            <?php include '../partials/sidebar.php' ?>
        </div>
        <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
            <?php include '../partials/topbar.php' ?>

            <section class="container">
                <!-- CONTENU DE LA PAGE -->
                <?php if (isset($content)) echo $content; ?>
            </section>

        </div>
    </div>
</div>
</body>
</html>