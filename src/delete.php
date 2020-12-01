<?php
require_once __DIR__ . '/databases/db_connect.php';
require_once __DIR__ . '/databases/db_delete.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $link = db_connect();
    db_delete($link, $id);
    mysqli_close($link);
    header("Location: index.php");
} else {
    header("Location: index.php");
}
