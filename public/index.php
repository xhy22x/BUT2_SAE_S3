<?php
$title = "Accueil - Energie Jeunes";

/** @var PDO $pdo */
require('../config/database.php');
require('../app/models/postsFunctions.php');

$stmt = $pdo->query("SELECT * FROM fichiers WHERE is_published = 1 ORDER BY id DESC");
$files = $stmt->fetchAll(PDO::FETCH_ASSOC);

$posts = getPosts($pdo,3); //Maximum 3

require_once  __DIR__ . '/../app/helpers/timeHelper.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../app/views/partials/head.php'; ?>
<body>
<?php include '../app/views/partials/navbar.php'; ?>
<main>
    <!-- Section Intro -->
    <section id="section-home" class="section-menu rounded-edge">
        <div class="container z-1 text-white text-center mt-5 mb-5 ps-5 pe-5 pb-5">
            <h1 class="font-2 text-uppercase fw-bold pb-3">On va tous aimer apprendre !</h1>
            <p class="font-1 fw-bold fs-5 pb-3">Au service de la réussite scolaire de tous, Énergie Jeunes agit sur le déterminisme social grâce à
                des programmes développant les compétences psychosociales des jeunes.
                Partout en France, nos volontaires, en collaboration avec les enseignants, animent des programmes qui provoquent des déclics chez les élèves : <br />
                ils changent des vies !
            </p>
            <!-- Bouton Découvrir -->
            <a class="btn btn-1" href="#" role="button">Découvrez nos programmes</a>
            <!-- Scroll Down -->
            <div class="d-flex justify-content-center mt-5 mb-5 ">
                <a href="#section-H-impact"><span class="scroll"><span class="scroll-D"></span></span></a>
            </div>
        </div>
    </section>
    <!-- Section Notre Impact -->
    <section id="section-H-impact" class="curved-t-b section-titre text-white">
        <div class="container pb-5">
            <h1 class="font-2 fw-bold text-uppercase">Notre Impact</h1>
        </div>
        <div class="container">
            <div class="item-impacts row font-2 text-center pb-5">
                <div class="col-lg-3 col-md-3 col-6 mb-3">
                    <img src="assets/images/uploads/2021/09/carte.png" alt="Carte de France, Page d'Accueil">
                    <p class="fw-bold pt-4"><span>12</span><br>délégations<br>régionales</p>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-3">
                    <img src="assets/images/uploads/2021/09/mains.png" alt="La Manoooo, Page d'Accueil">
                    <p class="fw-bold pt-4"><span>921</span><br>établissements<br>partenaires</p>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-3">
                    <img src="assets/images/uploads/2021/09/picto-3.png" alt="Picto-3, Page d'Accueil">
                    <p class="fw-bold pt-4"><span>826</span><br>volontaires</p>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-3">
                    <img src="assets/images/uploads/2021/09/picto-1.png" alt="Picto-1, Page d'Accueil">
                    <p class="fw-bold pt-4"><span>129 050</span><br>élèves<br>bénéficiaires</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="item-impacts-txt">
                <p class="text-center fs-5">
                    <strong>«&nbsp;Le programme accroît la moyenne scolaire. Les élèves sont plus disciplinés dans leur travail scolaire, plus dynamiques et enthousiastes vis-à-vis de l’acquisition de connaissances nouvelles, et moins impulsifs. Il y a un impact positif du programme sur les aspirations des élèves, à la fois en matière d’études et de profession. » *</strong><br><br>
                    *<em>extrait rapport étude d’impact J-PAL janvier 2021- The Role of Mindset in Education : A Large-Scale Field Experiment in Disadvantaged Schools</em>
                </p>
            </div>
        </div>
    </section>
    <!-- Section Nos Valeurs -->
    <section id="section-H-valeurs" class="section-titre">
        <div class="container pb-5">
            <h1 class="font-2 fw-bold text-uppercase">Nos Valeurs</h1>
        </div>
        <div class="container-fluid">
            <div class="item-valeurs font-2 pb-4">
                <div class="item-valeur item-valeur-1 z-2 fond-bleu text-center">
                    <img src="assets/images/uploads/2023/10/picto-generosite.png" alt="Picto Générosité, Page d'Accueil">
                    <h3 class="pt-2"><span class="text-white fw-bold text-uppercase">Agir avec générosité</span></h3>
                    <p>L’engagement de chacun, volontaires et partenaires, est fort et désintéressé au service de l’association et des élèves</p>
                </div>
                <div class="item-valeur item-valeur-2 z-3 fond-jaune text-center">
                    <img src="assets/images/uploads/2023/10/picto-optimisme.png" alt="Picto Optimisme, Page d'Accueil">
                    <h3 class="pt-2"><span class="text-white fw-bold text-uppercase">Être optimiste</span></h3>
                    <p>Notre vision repose sur la conviction que chacun peut apprendre, progresser et s’adapter pour trouver sa place dans la société</p>
                </div>
                <div class="item-valeur item-valeur-3 z-1 fond-rouge text-center">
                    <img src="assets/images/uploads/2023/10/picto-cooperation.png" alt="Picto Coopération, Page d'Accueil">
                    <h3 class="pt-2"><span class="text-white fw-bold text-uppercase">Agir en coopération</span></h3>
                    <p>Notre efficacité s’appuie sur la force du collectif et de l’entraide</p>
                </div>
                <div class="item-valeur item-valeur-4 z-2 fond-orange text-center">
                    <img src="assets/images/uploads/2023/10/picto-impact.png" alt="Picto Impact, Page d'Accueil">
                    <h3 class="pt-2"><span class="text-white fw-bold text-uppercase">Avoir de l'impact</span></h3>
                    <p>Nos actions déployées à grande échelle, se nourrissent de la recherche et nos résultats sont mesurés avec rigueur</p>
                </div>
            </div>
        </div>
        <!-- Bouton en savoir plus: Notre projet Associatif -->
        <div class="text-center pt-5 pb-5">
            <a class="btn-plus" href="#" role="button">Notre projet Associatif</a>
        </div>
    </section>
    <!-- Section Nos Actualités -->
    <section id="section-H-actualites" class="section-titre">
        <div class="container pb-5">
            <h1 class="font-2 fw-bold text-uppercase">Nos Actualités</h1>
        </div>
        <div class="container">
            <!-- Actualité Principale -->
            <div class="row item-actualites">
                <div class="col-12">
                    <img src="assets/images/uploads/2025/09/100-Parents-1-scaled-e1757322557673-1200x400.webp" alt="Photo actualités, Page D'Accueil">
                    <div class="item-actualites-content">
                        <a href="#" class="text-white"><h2 class="font-1 fw-bold mb-1">Les parents, maillon essentiel de la réussite scolaire des élèves</h2></a>
                        <a href="#" class="btn-lire text-white">&nbsp;Lire la suite</a>
                    </div>
                </div>
            </div>
            <!-- Autres actualités -->
            <div class="row pt-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 pb-5">
                            <div class="row">
                                <div class="col-4"><a href="#"><img src="assets/images/uploads/2025/09/bepophoto-bertrand-pottier-Energie-jeunes-st-cheron-2025-7456-150x150.webp" alt="Actu-1, Page d'Accueil"></a></div>
                                <div class="col-8">
                                    <div class="item-actu-content">
                                        <p class="item-actu-titre color-bleu text-uppercase fw-medium font-1">Ça se passe en classe</p>
                                        <a href="#" class="fw-bold fs-5 font-2 d-block text-black">La création d&rsquo;un poste permis par le Fonds Social Européen et Schneider Electric<br></a>
                                        <a href="#" class="btn-lire">&nbsp;Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-5">
                            <div class="row">
                                <div class="col-4"><a href="#"><img src="assets/images/uploads/2025/05/IMG_2718-1-150x150.webp" alt="Actu-2, Page d'Accueil"></a></div>
                                <div class="col-8">
                                    <div class="item-actu-content">
                                        <p class="item-actu-titre color-bleu text-uppercase fw-medium font-1">Nos partenaires nous soutiennent</p>
                                        <a href="#" class="fw-bold fs-5 font-2 d-block text-black">“Dompter les écrans” : un déclic salutaire pour les élèves de 3e<br></a>
                                        <a href="#" class="btn-lire">&nbsp;Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 pb-5">
                            <div class="row">
                                <div class="col-4"><a href="#"><img src="assets/images/uploads/2025/08/DSC2089-150x150.webp" alt="Actu-3, Page d'Accueil"></a></div>
                                <div class="col-8">
                                    <div class="item-actu-content">
                                        <p class="item-actu-titre color-bleu text-uppercase fw-medium font-1">Ça nous concerne</p>
                                        <a href="#" class="fw-bold fs-5 font-2 d-block text-black">Nawel&nbsp;: «&nbsp;Énergie Jeunes m’a permis de retrouver une estime de moi que j’avais perdue&nbsp;»<br></a>
                                        <a href="#" class="btn-lire">&nbsp;Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-5">
                            <div class="row">
                                <div class="col-4"><a href="#"><img src="assets/images/uploads/2024/11/Assemblee-Generale-dEnergie-Jeunes-3-150x150.webp" alt="Actu-2, Page d'Accueil"></a></div>
                                <div class="col-8">
                                    <div class="item-actu-content">
                                        <p class="item-actu-titre color-bleu text-uppercase fw-medium font-1">Nos événements</p>
                                        <a href="#" class="fw-bold fs-5 font-2 d-block text-black">Assemblée Générale 2024 d&rsquo;Energie Jeunes<br></a>
                                        <a href="#" class="btn-lire">&nbsp;Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bouton en savoir plus: Toutes les actualités -->
        <div class="text-center pt-5 pb-5">
            <a class="btn-plus" href="#" role="button">Toutes les actualités</a>
        </div>
        <!-- Bouton Consultez -->
        <?php include '../app/views/components/report-link.php'; ?>
    </section>
    <!-- Section Agir avec Nous -->
    <section id="section-H-agir" class="section-titre rounded-edge">
        <div class="container z-1 text-white mt-5 mb-5 ps-5 pe-5 pb-5">
            <h1 class="font-2 fw-bold text-uppercase">Agir avec Nous</h1>
            <div class="item-agir-txt">
                <p>Énergie Jeunes se développe et innove grâce à l’implication de nombreux acteurs privés et publics. Mécènes de compétences et mécènes financiers, ils contribuent tous à renforcer l’efficacité et la qualité du déploiement de nos programmes pédagogiques aux cotés de la communauté éducative.</p>
                <p>Bénévoles, salariés actifs en entreprise et en association, jeunes retraités, étudiants bénévoles ou en service civique, tous trouvent leur place chez Energie Jeunes et peuvent se rendre utiles pour la réussite scolaire de tous&nbsp;!</p>
                <p>Nos partenariats nationaux, régionaux et locaux nous permettent de nous améliorer constamment et de nous déployer plus largement sur l’ensemble du territoire. Nous sommes également fiers de voir chaque année les dons de particuliers augmenter. Ces derniers nous sont précieux car cette cause est celle de tous pour une grande alliance éducative et sociétale renforcée : communauté éducative, associations, parents et acteurs de la société civile.</p>
                <p>Accompagner&nbsp;les élèves à aimer apprendre, nous y contribuons tous !</p>
            </div>
            <!-- Bouton en savoir plus: En savoir plus -->
            <div class="text-center pt-5 pb-5">
                <a class="btn-plus text-white" href="#" role="button">En savoir plus</a>
            </div>
        </div>
    </section>
    <!-- Section Ils Témoignent - Page d'accueil -->
    <section id="section-temoignage">
        <div class="container pb-5">
            <h1 class="font-2 fw-bold text-uppercase">Ils Témoignent</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <iframe width="1424" height="562" src="https://www.youtube.com/embed/qtE1NZ3BYXc" title="Témoignage de Minissia : Aller de l&#39;avant" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p><strong>Minissia,</strong> Bénéficiaire du programme Énergie Jeunes</p>
                </div>
                <div class="col-md-4">
                    <iframe width="1424" height="562" src="https://www.youtube.com/embed/E4Gc0OfxlXU" title="Témoignage -  Ali, bénévole volontaire" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p><strong>Ali Keita,</strong> Bénévole volontaire</p>
                </div>
                <div class="col-md-4">
                    <iframe width="1424" height="562" src="https://www.youtube.com/embed/Q38Ikcw3FDA" title="Témoignage d&#39;Orianne, enseignante" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p><strong>Orianne Chambaret,</strong> Enseignante</p>
                </div>
            </div>
        </div>
        <!-- Bouton en savoir plus: Voir d'autres témoignages -->
        <div class="text-center pt-5 pb-5">
            <a class="btn-plus" href="#" role="button">Voir d'autres témoignages</a>
        </div>
    </section>

    <!-- Section Sur les Réseaux -->
    <section id="section-H-reseaux" class="curved-t-b section-titre text-black">
        <div class="container">
            <h1 class="font-2 fw-bold text-uppercase">Sur les réseaux</h1>
        </div>

        <!-- Contenu 1 -->
        <?php if (!empty($posts)): ?>
            <div class="container">
                <div class="item-r-content1">
                    <div class="row">
                        <?php foreach ($posts as $post): ?>
                            <?php include '../app/views/components/post-item.php'; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Contenu 2 -->
        <div class="container">
            <div class="item-r-content2 bg-white rounded-2 pb-5 pt-5 mb-5">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center font-1">
                        <h2 class="pt-2 pb-3 fw-bold fs-1">Ils parlent du Déclic Énergie Jeunes</h2>
                        <p class="pt-2 pb-4">Nos programmes sont conçus, avec l’aide de chercheurs internationaux, pour provoquer des « déclics » chez les élèves, ils ont un impact direct sur leurs comportements, leurs aspirations, et leurs résultats scolaires. Chacun va vivre son expérience Énergie Jeunes à sa façon !</p>
                        <div class="item-r-video-2">
                            <iframe width="916" height="515" src="https://www.youtube.com/embed/bU_DoscnjDg" title="Témoignage - Issa, ancien bénéficiaire" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- Bouton en savoir plus: Plus de vidéos -->
                <div class="text-center pt-5 pb-5">
                    <a class="btn-plus" href="#" role="button">Plus de vidéos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Ils Nous Soutiennent - Page d'Accueil -->
    <section id="section-soutien">
        <div class="container pb-5 pt-5">
            <h1 class="font-2 fw-bold text-uppercase">Ils Nous Soutiennent</h1>
        </div>
        <div class="container pb-5">
            <div class="item-slide">
                <ul>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-19.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-78.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-20.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-2.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-12.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-21.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-6.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-22.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-23.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-24.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-25.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-7.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-27.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/11/logo-fondation-v2-def.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/caisse-eparnge.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-66.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-29.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-30.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-79.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/10/logo_delabie.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-80.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-35.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-77.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-36-1.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/ebedis.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-8.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2025/09/avatar-rs-3.webp" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-11.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-41.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-10.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-81.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-42.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2025/05/avatar-rs-2.webp" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-12.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/fondation-fdj.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-7.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-82.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-13.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-83.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-16.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/Avatar-RS-page-001-1024x1024-1-jpg.webp" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-1-1.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-45.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-67.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/03/partenaires-2022-5.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-84.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-46.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-47.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-19.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-63.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/MM-Logo-2017.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-50.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2025/02/michelin_g_s_nobl_whitebg_rgb_0618-1-png.webp" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/04/partenaires-2022-20.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-52.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-9.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-74-1.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-17.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2022/02/l-oreal.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-86.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-6.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-87.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-53.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-54.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-3.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-55.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-88.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-89.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/08/avatar-rs-90.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-57.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-59.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-60.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-15.png" alt="Logo Partenariat, Energie Jeunes"></li>
                    <li><img class="slide" src="assets/images/uploads/2024/02/avatar-rs-62.png" alt="Logo Partenariat, Energie Jeunes"></li>
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="btn-s me-auto">&#10094;</button>
                    <button class="btn-s ms-auto">&#10095;</button>
                </div>
            </div>
            <script src="assets/js/scroll.js"></script>
        </div>
    </section>
    <!-- Section Bouton Rejoignez-nous! -->
    <section>
        <div class="container text-uppercase d-flex justify-content-center align-items-center gap-5 pt-5 pb-5">
            <a class="btn btn-3-bis" href="rejoignez-nous.php" role="button"><p>Rejoignez-nous !</p><img src="assets/images/uploads/2021/10/pave-rejoindre-587x330.jpg" alt="Image Rejoignez-Nous, Page d'Accueil"></a>
        </div>
    </section>
</main>
<?php require '../app/views/partials/footer.php'; ?>
</body>
</html>