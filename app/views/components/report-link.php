<div class="d-flex justify-content-center align-items-center gap-5 pt-5 pb-5 text-uppercase">
    <?php foreach($files as $file): ?>
        <a class="btn btn-2" href="<?= htmlspecialchars($file['path']) ?>" role="button"><img src="assets/images/icons/icon-dl.svg" alt="Icon Téléchargez, Nos Communautés">Consultez notre dernier rapport annuel</a>
    <?php endforeach; ?>
</div>
