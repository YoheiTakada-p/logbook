<?php
//ログを作成する
function db_insert($link, $log)
{
    $sql = <<<EOT
    INSERT INTO logs (
        title,
        author,
        memo,
        updated_at
    ) VALUES (
        "{$log['title']}",
        "{$log['author']}",
        "{$log['memo']}",
        CURRENT_TIMESTAMP
    )
    EOT;

    //SQL INSERT
    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to create review');
        error_log('Debugging Error: ' . mysqli_error($link));
    }
}
