<?php

?>

<h1>Gestion des partenariats et subventions</h1>

<hr>

<!-- ================================================= -->
<!-- AJOUT D’UN PARTENAIRE -->
<!-- ================================================= -->
<h2>Ajouter un partenaire</h2>

<form method="POST" action="/partenariats.php">
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

<hr>

<!-- ================================================= -->
<!-- AJOUT D’UNE SUBVENTION -->
<!-- ================================================= -->
<h2>Ajouter une subvention</h2>

<form method="POST" action="/partenariats.php">
    <!-- Indique au contrôleur l’action à effectuer -->
    <input type="hidden" name="type" value="subvention">

    <div>
        <label for="partenaire_id">Partenaire</label><br>
        <select id="partenaire_id" name="partenaire_id" required>
            <option value="">-- Sélectionner un partenaire --</option>
            <?php foreach ($listePartenaires as $partenaire) : ?>
                <option value="<?= $partenaire['id'] ?>">
                    <?= htmlspecialchars($partenaire['nom']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label for="montant">Montant (€)</label><br>
        <input type="number" id="montant" name="montant" step="0.01" required>
    </div>

    <div>
        <label for="annee">Année</label><br>
        <input
                type="number"
                id="annee"
                name="annee"
                value="<?= date('Y') ?>"
                required
        >
    </div>

    <div>
        <label for="statut">Statut</label><br>
        <select id="statut" name="statut" required>
            <option value="demandee">Demandée</option>
            <option value="accordee">Accordée</option>
            <option value="refusee">Refusée</option>
        </select>
    </div>

    <div>
        <label for="commentaire">Commentaire</label><br>
        <textarea id="commentaire" name="commentaire" rows="3"></textarea>
    </div>

    <br>
    <button type="submit">Enregistrer la subvention</button>
</form>

<hr>

<!-- ================================================= -->
<!-- LISTE / SUIVI DES SUBVENTIONS -->
<!-- ================================================= -->
<h2>Suivi des subventions</h2>

<?php if (!empty($listeSubventions)) : ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
        <tr>
            <th>Partenaire</th>
            <th>Montant (€)</th>
            <th>Année</th>
            <th>Statut</th>
            <th>Commentaire</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listeSubventions as $subvention) : ?>
            <tr>
                <td><?= htmlspecialchars($subvention['partenaire_nom']) ?></td>
                <td><?= htmlspecialchars($subvention['montant']) ?></td>
                <td><?= htmlspecialchars($subvention['annee']) ?></td>
                <td><?= htmlspecialchars(ucfirst($subvention['statut'])) ?></td>
                <td><?= htmlspecialchars($subvention['commentaire'] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Aucune subvention enregistrée.</p>
<?php endif; ?>
