<?php
$title = "Rejoignez Energie Jeunes";
require '../app/views/partials/header.php';

echo <<<HTML
<main>
    <!-- Bouton Don Fixe -->
    <a href="#don" class="btn-don-fixe">FAIRE UN DON</a>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content fade-in-up">
                <h1>Rejoignez-nous</h1>
                <p>Ensemble, donnons aux jeunes les clés de leur réussite</p>
                <div class="mt-4">
                    <a href="#opportunities" class="btn-primary-custom me-3">Découvrir les opportunités</a>
                    <a href="#contact" class="btn-secondary-custom">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">150K+</span>
                        <span class="stat-label">Élèves accompagnés</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">2000+</span>
                        <span class="stat-label">Bénévoles actifs</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">600+</span>
                        <span class="stat-label">Établissements</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Ans d'expérience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Opportunities Section -->
    <section class="opportunities" id="opportunities">
        <div class="container">
            <div class="section-header">
                <h2>Comment nous rejoindre ?</h2>
                <p>Plusieurs façons de contribuer à notre mission</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="opportunity-card">
                        <span class="card-icon">🎯</span>
                        <h3>Bénévoles</h3>
                        <p>Intervenez en collèges et inspirez les jeunes</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="opportunity-card">
                        <span class="card-icon">💼</span>
                        <h3>Mécénat</h3>
                        <p>Mobilisez vos compétences professionnelles</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="opportunity-card">
                        <span class="card-icon">🚀</span>
                        <h3>Service Civique</h3>
                        <p>Une année engagée et formatrice</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="opportunity-card">
                        <span class="card-icon">⭐</span>
                        <h3>Équipe Permanente</h3>
                        <p>CDI, CDD, alternance disponibles</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#contact" class="btn-primary-custom">Postuler maintenant</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="temoignages">
        <div class="container">
            <div class="section-header">
                <h2>Ils témoignent</h2>
                <p>Découvrez leurs parcours en vidéo</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <a href="https://www.youtube.com/watch?v=xScvraGO8TI" target="_blank" class="video-wrapper">
                            <img src="https://img.youtube.com/vi/xScvraGO8TI/maxresdefault.jpg" alt="Raiyana - Responsable des Opérations">
                            <div class="play-button"></div>
                        </a>
                        <p class="testimonial-author">Raiyana</p>
                        <p class="testimonial-role">Responsable des Opérations</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card">
                        <a href="https://www.youtube.com/watch?v=5wP6hMt9D0k" target="_blank" class="video-wrapper">
                            <img src="https://img.youtube.com/vi/5wP6hMt9D0k/maxresdefault.jpg" alt="Frédéric Jourdan - Volontaire en mécénat">
                            <div class="play-button"></div>
                        </a>
                        <p class="testimonial-author">Frédéric Jourdan</p>
                        <p class="testimonial-role">Volontaire en mécénat</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card">
                        <a href="https://www.youtube.com/watch?v=-w-oVnjFRg8" target="_blank" class="video-wrapper">
                            <img src="https://img.youtube.com/vi/-w-oVnjFRg8/maxresdefault.jpg" alt="Cloé, Naïg et Nadia - Service Civique">
                            <div class="play-button"></div>
                        </a>
                        <p class="testimonial-author">Cloé, Naïg et Nadia</p>
                        <p class="testimonial-role">Volontaires en Service Civique</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Carousel -->
    <section class="partners">
        <div class="container">
            <div class="section-header">
                <h2>Ils nous soutiennent</h2>
            </div>


            <div class="partners-carousel">
                <div class="partners-track">
                    <!-- Première série de partenaires -->
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-53.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-62.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-66.png" alt="Partenaire"></div>
                    <div class="partner-item"><img src="../public/assets/images/uploads/2024/02/avatar-rs-77.png" alt="Partenaire"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <h2>Prêt à nous rejoindre ?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Contactez-nous dès aujourd'hui</p>
            <a href="mailto:contact@energiejeunes.fr" class="btn-primary-custom">Contactez-nous</a>
        </div>
    </section>

    <!-- Section Don -->
    <section class="cta-section" id="don" style="background: linear-gradient(135deg, var(--color-rouge) 0%, var(--color-bleuf) 100%);">
        <div class="container">
            <h2>❤️ Soutenez notre action</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Chaque don compte pour transformer des vies</p>
            <a href="faire-un-don.php" class="btn-primary-custom" target="_blank">Faire un don maintenant</a>
        </div>
    </section>
</main>
HTML;

require '../app/views/partials/footer.php';
