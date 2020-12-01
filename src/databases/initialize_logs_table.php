<?php
//docker-compose exec app php databases/initialize_logs_table.php
//既存のテーブルがあれば削除して、新しいテーブルを作成する
require __DIR__ . '/db_connect.php';

function db_dropTable($link)
{
    $sql = <<<EOT
    DROP TABLE IF EXISTS logs;
    EOT;

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo 'テーブルを削除しました' . PHP_EOL;
    } else {
        echo 'Error: テーブルの削除に失敗しました' . PHP_EOL;
        echo 'Debugging Error: ' . mysqli_error($link) . PHP_EOL;
    }
}

function db_create($link)
{
    $sql = <<<EOT
    CREATE TABLE logs (
        id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
        title VARCHAR(255),
        author VARCHAR(255),
        memo VARCHAR(1000),
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NOT NULL
    ) DEFAULT CHARACTER SET=utf8mb4;
    EOT;

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo 'テーブルを作成しました' . PHP_EOL;
    } else {
        echo 'Error: テーブルの作成に失敗しました' . PHP_EOL;
        echo 'Debugging Error: ' . mysqli_error($link) . PHP_EOL;
    }
}

$link = db_connect();
db_dropTable($link);
db_create($link);
mysqli_close($link);
