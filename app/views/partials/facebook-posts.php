<?php if (!empty($posts)): ?>
    <div class="container">
        <div class="item-r-content1">
            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <?php include '../app/views/components/post.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
