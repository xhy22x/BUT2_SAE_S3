<form class="form-post container" method="POST">
    <!-- Titre de l'article -->
    <div class="mb-3">
        <label class="form-label">Titre de l'article</label>
        <input type="text" class="form-control" name="title" placeholder="Entrez le titre" value="<?= $post['title'] ?? '' ?>" required>
    </div>

    <!-- Date de publication -->
    <div class="mb-3">
        <label class="form-label">Date de publication</label>
        <input type="date" class="form-control" name="publish_date" value="<?= $post['publish_date'] ?? '' ?>" required>
    </div>

    <!-- Contenu de l'article -->
    <div class="mb-3">
        <label class="form-label">Contenu de l'article</label>
        <textarea class="form-control" rows="8" name="content" placeholder="Rédigez le contenu..." required><?= isset($post) ? htmlspecialchars($post['content']) : '' ?></textarea>
    </div>

    <!-- URL de l'image -->
    <div class="mb-3">
        <label class="form-label">Image URL</label>
        <input type="url" class="form-control" name="image_url" placeholder="https://example.com/image.jpg" value="<?= $post['image_url'] ?? '' ?>">
    </div>

    <!-- Source -->
    <div class="mb-3">
        <label class="form-label">Source de l'article</label>
        <input type="text" class="form-control" name="source" placeholder="Ex: Le Monde" value="<?= $post['source'] ?? '' ?>">
    </div>

    <!-- Likes et commentaires -->
    <div class="mb-3">
        <label class="form-label">Nombre de likes</label>
        <input type="number" class="form-control" name="likes_count" value="<?= (int)$post['likes_count'] ?? 0 ?>" min="0">
    </div>

    <div class="mb-3">
        <label class="form-label">Nombre de commentaires</label>
        <input type="number" class="form-control" name="comments_count" value="<?= (int)$post['comments_count'] ?? 0 ?>" min="0">
    </div>
    <button type="submit" class="btn btn-primary" name="validate">Confirmer</button>
    <a href="admin-panel.php" class="btn btn-secondary">Annuler</a>
</form>
