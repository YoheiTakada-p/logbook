<?php
//ログを削除する
function db_delete($link, $id)
{
    $sql = <<<EOT
    DELETE FROM logs WHERE id={$id}
    EOT;

    //SQL INSERT
    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to create review');
        error_log('Debugging Error: ' . mysqli_error($link));
    }
}
