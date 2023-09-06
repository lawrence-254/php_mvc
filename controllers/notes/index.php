<?php

use Core\Database;


$config = require base_path('config.php');

$db = new Database($config['database']);



// $notes = $db->query('SELECT * FROM notes')->fetchAll();
$query = 'SELECT * FROM notes';
$db->query($query);
$notes = $db->getDb();

// dd($notes);

views("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
