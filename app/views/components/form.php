<form class="formulaire container my-5" method="POST" enctype="multipart/form-data">
    <?php foreach($fields as $name => $options): ?>
    <div class="mb-3">
        <label class="form-label"><?= htmlspecialchars($options['label']) ?></label>
        <?php if($options['type'] === 'text'): ?>
            <input type="text" class="form-control" name="<?= $name ?>" placeholder="<?= $options['placeholder'] ?>" value="<?= $options['value'] ?? '' ?>" required>
        <?php elseif($options['type'] === 'date'): ?>
            <input type="date" class="form-control" name="<?= $name ?>" value="<?= $options['value'] ?? '' ?>" required>
        <?php elseif($options['type'] === 'textarea'): ?>
            <textarea class="form-control" rows="8" name="<?= $name ?>" placeholder="<?= $options['placeholder'] ?>" required><?= $options['value'] ?? '' ?></textarea>
        <?php elseif($options['type'] === 'url'): ?>
            <input type="url" class="form-control" name="<?= $name ?>" placeholder="<?= $options['placeholder'] ?>" value="<?= $options['value'] ?? '' ?>" required>
        <?php elseif($options['type'] === 'number'): ?>
            <input type="number" class="form-control" name="<?= $name ?>" placeholder="<?= $options['placeholder'] ?>" value="<?= $options['value'] ?? 0 ?>" min="0">
        <?php elseif($options['type'] === 'file'): ?>
            <input type="file" name="<?= $name ?>">
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
    <button type="submit" class="btn btn-primary" name="validate"><?= $buttonText ?></button>
</form>
