<?php
require_once __DIR__ . '/databases/db_connect.php';
require_once __DIR__ . '/databases/db_update.php';
require_once __DIR__ . '/databases/db_select.php';
require_once __DIR__ . '/lib/validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $log = [
        'id' => $_POST['id'],
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'memo' => $_POST['memo'],
    ];

    $errors = validate($log);

    if (!$errors) {
        $link = db_connect();
        db_update($link, $log);
        mysqli_close($link);
        header("Location: index.php");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $errors = [];
    $id = $_GET['id'];
    $link = db_connect();
    $log = db_select_id($link, $id);
    mysqli_close($link);
}

include 'views/update_view.php';
