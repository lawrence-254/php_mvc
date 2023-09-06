<?php

use Core\Database;


$config = require base_path('config.php');

$db = new Database($config['database']);


require base_path("Core/Response.php");



$query = 'SELECT * FROM notes WHERE id = :id';
$params = [':id' => $_GET['id']];

$notes = $db->query($query, $params)->findOrFail();
$creator_id = 1;
authorize($notes['user_id'] === $creator_id);



views("notes/show.view.php", [
    'heading' => 'Note',
    'notes' => $notes
]);
