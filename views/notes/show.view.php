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
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <input type="submit" class='no' value="Delete Note">
    </form>
</main>
<?php require base_path('views/partials/footer.php') ?>