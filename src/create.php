<?php
require_once __DIR__ . '/databases/db_connect.php';
require_once __DIR__ . '/databases/db_insert.php';
require_once __DIR__ . '/lib/validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $log = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'memo' => $_POST['memo'],
    ];
    $errors = validate($log);

    if (!$errors) {
        $link = db_connect();
        db_insert($link, $log);
        mysqli_close($link);
        header("Location: index.php");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $log = [];
    $errors = [];
}

include 'views/create_view.php';
