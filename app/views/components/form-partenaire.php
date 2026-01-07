<div class="container my-3">
    <h1>Gestion des partenariats </h1>

    <hr>

    <!-- ================================================= -->
    <!-- AJOUT D’UN PARTENAIRE -->
    <!-- ================================================= -->
    <h2>Ajouter un partenaire</h2>

    <form method="POST" action="partenariat.php">
        <!-- Indique au contrôleur l’action à effectuer -->
        <input type="hidden" name="type" value="partenaire">

        <div>
            <label for="nom">Nom du partenaire</label><br>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div>
            <label for="type_partenaire">Type de partenaire</label><br>
            <input
                type="text"
                id="type_partenaire"
                name="type_partenaire"
                placeholder="Entreprise, institution, association…"
            >
        </div>

        <div>
            <label for="email">Email de contact</label><br>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="telephone">Téléphone de contact</label><br>
            <input type="text" id="telephone" name="telephone">
        </div>

        <br>
        <button type="submit">Enregistrer le partenaire</button>
    </form>

    <hr>

    <!-- ================================================= -->
    <!-- LISTE DES PARTENAIRES -->
    <!-- ================================================= -->
    <h2>Liste des partenaires</h2>

    <?php if (!empty($listePartenaires)) : ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date de création</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listePartenaires as $partenaire) : ?>
                <tr>
                    <td><?= htmlspecialchars($partenaire['nom']) ?></td>
                    <td><?= htmlspecialchars($partenaire['type_partenaire'] ?? '') ?></td>
                    <td><?= htmlspecialchars($partenaire['email_contact'] ?? '') ?></td>
                    <td><?= htmlspecialchars($partenaire['telephone_contact'] ?? '') ?></td>
                    <td><?= htmlspecialchars($partenaire['date_creation'] ?? '') ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Aucun partenaire enregistré pour le moment.</p>
    <?php endif; ?>
</div>
