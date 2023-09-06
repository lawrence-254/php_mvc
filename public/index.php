<?php


const BASE_PATH = __DIR__  . '/../';

require BASE_PATH . "Core/functions.php";





spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path("Core/router.php");






// $id = $_GET['id'];
// $q = "SELECT * FROM posts WHERE id = ?";
// // dd($q);
// $posts = $db->query($q, [$id])->fetchAll();

// dd($posts);
//return

// foreach ($posts as $p) {
//     echo "<h1>" . $p['Title'] . "</h1>";
// }
