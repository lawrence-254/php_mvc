<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
    <div>
        <form action="" method="post">
            <label for="body">Note</label>
            <div>
                <textarea placeholder="Add your note here..." name="body" id="body" cols="40" rows="3"><?= $_POST['body'] ?? '' ?></textarea>
            </div>
            <input type="submit" value="Create">
        </form>
    </div>
    <?php if (isset($errors['body'])) : ?>
        <h3 class='no'><?= $errors['body'] ?></h3>
    <?php endif; ?>
</main>
<?php require base_path('views/partials/footer.php') ?>