<h1>Gestion des partenaires et des subventions</h1>

<p>
    Cette page est destinée aux responsables des partenariats.
    Elle permet l’enregistrement des partenaires ainsi que le suivi des subventions.
</p>

<hr>

<h2>Enregistrer un partenaire</h2>

<form method="post" action="">
    <label>
        Nom du partenaire :
        <input type="text" name="nom_partenaire" required>
    </label><br><br>

    <label>
        Personne de contact :
        <input type="text" name="contact_partenaire">
    </label><br><br>

    <label>
        Adresse email :
        <input type="email" name="email_partenaire">
    </label><br><br>

    <button type="submit" name="enregistrer_partenaire">
        Enregistrer le partenaire
    </button>
</form>

<hr>

<h2>Suivi des subventions</h2>

<form method="post" action="">
    <label>
        Partenaire :
        <select name="id_partenaire" required>
            <option value="">-- Sélectionner un partenaire --</option>
            <?php if (!empty($listePartenaires)): ?>
                <?php foreach ($listePartenaires as $partenaire): ?>
                    <option value="<?= $partenaire['id'] ?>">
                        <?= htmlspecialchars($partenaire['nom']) ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </label><br><br>

    <label>
        Montant de la subvention (€) :
        <input type="number" step="0.01" name="montant_subvention" required>
    </label><br><br>

    <label>
        Date de réception :
        <input type="date" name="date_reception">
    </label><br><br>

    <label>
        Objet de la subvention :
        <input type="text" name="objet_subvention">
    </label><br><br>

    <button type="submit" name="enregistrer_subvention">
        Enregistrer la subvention
    </button>
</form>

<hr>

<h2>Historique des subventions</h2>

<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>Partenaire</th>
        <th>Montant</th>
        <th>Date</th>
        <th>Objet</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($listeSubventions)): ?>
        <?php foreach ($listeSubventions as $subvention): ?>
            <tr>
                <td><?= htmlspecialchars($subvention['nom_partenaire']) ?></td>
                <td><?= htmlspecialchars($subvention['montant']) ?> €</td>
                <td><?= htmlspecialchars($subvention['date_reception']) ?></td>
                <td><?= htmlspecialchars($subvention['objet']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Aucune subvention enregistrée</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
