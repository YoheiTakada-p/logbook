<?php
//DBに接続する
require __DIR__ . '/../vendor/autoload.php';

function db_connect()
{
    //composer phpdotenv
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
    $DB_HOST = $_ENV['DB_HOST'];
    $DB_USERNAME = $_ENV['DB_USERNAME'];
    $DB_PASSWORD = $_ENV['DB_PASSWORD'];
    $DB_DBNAME = $_ENV['DB_DBNAME'];

    $link = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DBNAME);
    if (!$link) {
        echo 'Error: データベースに接続できません' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $link;
}
