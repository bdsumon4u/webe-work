<?php require_once '../layout/head.php' ?>

<!-- Page Section -->
<div class="container p-4 mx-auto lg:p-8 xl:max-w-7xl">
    <?php $movie = get_table('movies')[$_GET['index']]; ?>
    <?php require_once 'form.php' ?>
</div>
<!-- END Page Section -->

<?php require_once '../layout/tail.php' ?>