<?php

function db_connect()
{
    $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
    if (!$link) {
        echo 'Error: データベースに接続できません' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo '=============' . PHP_EOL;
    echo 'データベースと接続しました' . PHP_EOL;
    echo '=============' . PHP_EOL;

    return $link;
}
