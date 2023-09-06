<?php

use Core\Database;
use Core\Validator;


$config = require base_path('config.php');



$db = new Database($config['database']);


$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (!Validator::string($_POST['body'], 3, 250)) {
        $errors['body'] =  'Your note should have between 3 to 250 characters';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

views("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
