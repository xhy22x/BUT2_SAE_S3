<h2 class="text-center mb-5"> <?= $table_title ?> </h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($table_head as $head): ?>
                    <th><?= htmlspecialchars($head) ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($table_content as $row): ?>
                <tr>
                    <?php foreach ($row as $col): ?>
                        <td><?= htmlspecialchars($col ?? '-') ?></td>
                    <?php endforeach ?>
                    <td class="text-nowrap">
                        <a href="<?= $path ?>?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil"></i> Modifier
                        </a>
                        <form method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?');">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" class="btn btn-danger btn-sm" name="delete">
                                <i class="bi bi-trash"></i> Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
