<?php if (isset($_SESSION['errors'])) : ?>
    <div class="container my-4">
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- On nettoie la session après affichage -->
    <?php unset($_SESSION['errors']) ?>
<?php endif; ?>


<?php if (isset($_SESSION['infos'])) : ?>
    <div class="container my-4">
        <?php foreach ($_SESSION['infos'] as $error) : ?>
            <div class="alert alert-info">
                <?= $error ?>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- On nettoie la session après affichage -->
    <?php unset($_SESSION['infos']) ?>
<?php endif; ?>