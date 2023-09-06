<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
    Note
    </br>
    <hr>
    </br>
    <a href="/notes">Back to notes...</a>
    <div>
        <p> <?= $notes['body'] ?></p>
    </div>
    <a href="">Delete Note</a>
</main>
<?php require base_path('views/partials/footer.php') ?>