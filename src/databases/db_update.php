<?php
//ログを更新する
function db_update($link, $log)
{
    $sql = <<<EOT
    UPDATE logs SET
    title = '{$log['title']}',
    author = '{$log['author']}',
    memo = '{$log['memo']}',
    updated_at = CURRENT_TIMESTAMP
    WHERE id = {$log['id']}
    EOT;

    //SQL UPDATE
    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to create review');
        error_log('Debugging Error: ' . mysqli_error($link));
    }
}
