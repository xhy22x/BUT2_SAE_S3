<?php
$title = $title ?? 'EnergieJeunes'; //Default value
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title><?php echo $title; ?></title>
    <link rel='stylesheet' id='style-css' href='../../../public/assets/css/style.css' media='all' />
</head>
<body>
<!-- EN-TETE -->
<header>
    <nav class="navbar">
        <a href="../../../public/index.php" class="logo"><img src="../../../public/assets/images/logo.svg" alt="Image du logo, Page d'accueil" ></a>
        <div class="nav-right">
            <!-- Menu Mobile -->
            <div class="nav-links menu-mobile">
                <ul>
                    <li><a href="#">Qui sommes-nous ?</a></li>
                    <li><a href="#">Notre action</a></li>
                    <li><a href="../../../public/agir-avec-nous.php">Agir avec nous</a></li>
                    <li><a href="../../../public/nos-communautes.php">Nos communautés</a></li>
                    <li>
                        <ul class="nav-others">
                            <li><a href="#">Espace élèves</a></li>
                            <li><a href="#">Espace intervenants</a></li>
                            <li><a href="#">Espace presse</a></li>
                            <li><a href="#">Nos publications</a></li>
                            <li><a href="../../../public/rejoignez-nous.php">Rejoignez-nous</a></li>
                            <li><a href="#">Nous contacter</a></li>
                        </ul>
                    </li>
                    <li><a class="btn-Don" href="../../../public/faire-un-don.php">Faire un don</a></li>
                </ul>
            </div>
            <!-- Menu Desktop -->
            <div class="nav-links menu-desktop">
                <ul>
                    <li>
                        <a class="nav-title" href="#">Qui sommes-nous ?</a>
                        <ul class="nav-sous-menu">
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Histoire</a></li>
                            <li><a href="#">Équipe et gouvernance</a></li>
                            <li><a href="#">Nos implantations</a></li>
                            <li><a href="#">Nos actualités</a></li>
                            <li><a href="#">Nos partenaires</a></li>
                            <li><a href="../../../public/assets/pdf/ENERGIE-JEUNES-Statuts-du-15-janvier-2016-1.pdf">Statuts de l'association</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-title" href="#">Notre action</a>
                        <ul class="nav-sous-menu">
                            <li><a href="#">Projet associatif</a></li>
                            <li><a href="#">Nos programmes</a></li>
                            <li><a href="#">Notre méthode</a></li>
                            <li><a href="#">Comité scientifique</a></li>
                            <li><a href="#">Notre impact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-title" href="../../../public/agir-avec-nous.php">Agir avec nous</a>
                        <ul class="nav-sous-menu">
                            <li><a href="#">Devenir entreprise partenaire</a></li>
                            <li><a href="../../../public/servir-comme-volontaire.php">Servir comme volontaire</a></li>
                            <li><a href="#">Verser votre taxe d'apprentissage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-title" href="../../../public/nos-communautes.php">Nos communautés</a>
                        <ul class="nav-sous-menu">
                            <li><a href="#">Communauté éducative</a></li>
                            <li><a href="#">Parents</a></li>
                            <li><a href="#">Volontaire</a></li>
                            <li><a href="#">Partenaires privés</a></li>
                            <li><a href="#">Partenaires institutionnels</a></li>
                            <li><a href="#">Ils témoignent</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="nav-others">
                            <li><a href="#">Espace élèves</a></li>
                            <li><a href="https://maestro.energiejeunes.fr/?_ga=2.138450163.193960742.1762460242-249901347.1757787629">Espace intervenants</a></li>
                            <li><a href="#">Espace presse</a></li>
                            <li><a href="#">Nos publications</a></li>
                            <li><a href="../../../public/rejoignez-nous.php">Rejoignez-nous</a></li>
                            <li><a href="#">Nous contacter</a></li>
                        </ul>
                    </li>
                    <li><a class="btn-Don" href="../../../public/faire-un-don.php">Faire un don</a></li>
                </ul>
            </div>
            <div class="nav-objects">
                <i class="nav-loupe fa-solid fa-magnifying-glass"></i>
                <i class="menu-hamburger fa-solid fa-bars"></i>
                <i class="menu-close fa-solid fa-xmark"></i>
            </div>
            <script src="../../../public/assets/js/menu.js"></script>
        </div>
    </nav>
</header>
<main>