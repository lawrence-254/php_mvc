<?php

use Core\Database;


$config = require base_path('config.php');

$db = new Database($config['database']);


require base_path("Core/Response.php");

$creator_id = 1;

//delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = 'SELECT * FROM notes WHERE id = :id';
    $params = [':id' => $_GET['id']];


    $notes = $db->query($query, $params)->findOrFail();

    authorize($notes['user_id'] === $creator_id);
    $db->query('DELETE FROM notes WHERE id = :id', [
        'id' => $_GET['id']
    ]);
} else {

    $query = 'SELECT * FROM notes WHERE id = :id';
    $params = [':id' => $_GET['id']];


    $notes = $db->query($query, $params)->findOrFail();

    authorize($notes['user_id'] === $creator_id);

    views("notes/show.view.php", [
        'heading' => 'Note',
        'notes' => $notes
    ]);
}
