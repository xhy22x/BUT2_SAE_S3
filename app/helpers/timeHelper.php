<?php
requireAdmin();
function timeAgo($date) {
    $now = new DateTime();
    $past = new DateTime($date);
    $diff = $now->diff($past);

    if ($diff->y > 0) return $diff->y . ' an' . ($diff->y > 1 ? 's' : '');
    if ($diff->m > 0) return $diff->m . ' mois';
    if ($diff->d >= 7) return floor($diff->d / 7) . ' semaines';
    if ($diff->d > 0) return $diff->d . ' jour' . ($diff->d > 1 ? 's' : '');
    if ($diff->h > 0) return $diff->h . ' heure' . ($diff->h > 1 ? 's' : '');
    return 'À l\'instant';
}
?>
