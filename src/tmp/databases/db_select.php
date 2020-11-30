<?php

function db_select($link)
{
    //初期化
    $logs = [];

    $sql = <<<EOT
    SELECT * FROM logs
    EOT;

    //SQL SELECT
    $results = mysqli_query($link, $sql);

    //SQL FETCH
    while ($row = mysqli_fetch_assoc($results)) {
        $logs[] = [
            'title' => $row['title'],
            'author' => $row['author'],
            'memo' => $row['memo'],
            'created_at' => $row['created_at'],
            'updated_at' => $row['updated_at']
        ];
    };

    //メモリ開放
    mysqli_free_result($results);

    return $logs;
}

function db_select_id($link, $id)
{
    //初期化
    $log = [];

    $sql = <<<EOT
    SELECT * FROM logs WHERE id={$id}
    EOT;

    //SQL SELECT_ID
    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to create review');
        error_log('Debugging Error: ' . mysqli_error($link));
    } else {
        //SQL FETCH
        while ($row = mysqli_fetch_assoc($result)) {
            $log[] = [
                'title' => $row['title'],
                'author' => $row['author'],
                'memo' => $row['memo'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at']
            ];
        };
        //メモリ開放
        mysqli_free_result($result);
    }

    return $log;
}
