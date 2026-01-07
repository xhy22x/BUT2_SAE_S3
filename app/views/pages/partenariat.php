<?php
require('../../controllers/security.php');
requireResponsable(2);
ob_start();

include 'all-form-partenariats.php';

$content = ob_get_clean();
include '../partials/dashboard-template.php';