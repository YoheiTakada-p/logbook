<?php
//logbook tmp

//cmd log: docker-compose exec app php tmp/tmp.php
//Interactive shell: docker-compose exec app php -a
//MySQL: docker-compose exec app mysql -h db -u book_log -D book_log -p

//DB関係
require __DIR__ . '/databases/db_connect.php';
require __DIR__ . '/databases/db_insert.php';
require __DIR__ . '/databases/db_select.php';
require __DIR__ . '/databases/db_update.php';
require __DIR__ . '/databases/db_delete.php';

//DBに接続
$link = db_connect();
//バリデーション
function validation(&$check)
{
    //初期化
    $errors = [];

    //title　・空欄禁止　・85文字以下　
    if (!strlen($check['title'])) {
        $errors['title'] = '書籍名を入力してください';
    } elseif (strlen($check['title']) > 85) {
        $errors['title'] = 'タイトルは85文字以下で入力してください';
    }

    //author　・空欄禁止　・85文字以下
    if (!strlen($check['author'])) {
        $errors['author'] = '作者名を入力してください';
    } elseif (strlen($check['title']) > 85) {
        $errors['author'] = '作者名は85文字以下で入力してください';
    }

    //memo ・1000文字以下
    if (strlen($check['memo']) > 1000) {
        $errors['memo'] = 'メモは1000文字以下で入力してください';
    }

    return $errors;
}
//ログを作成する関数
function createLog($link)
{
    echo '読書ログを登録してください' . PHP_EOL;
    echo '書籍名：';
    $title = trim(fgets(STDIN));

    echo '著者名：';
    $author = trim(fgets(STDIN));

    echo 'メモ：';
    $memo = trim(fgets(STDIN));

    $log = [
        'title' => $title,
        'author' => $author,
        'memo' => $memo
    ];

    $errors = validation($log);

    if ($errors) {
        echo '#############' . PHP_EOL;
        foreach ($errors as $error) {
            echo $error . PHP_EOL;
        }
        echo '#############' . PHP_EOL;
    } else {
        db_insert($link, $log);
        echo '登録が完了しました' . PHP_EOL;
        echo '-------------' . PHP_EOL;
    }
}
//ログを表示する関数
function listLogs($link)
{
    echo '登録されている読書ログを表示します' . PHP_EOL;
    echo '-------------' . PHP_EOL;

    $logs = db_select($link);

    foreach ($logs as $log) {
        echo '書籍名：' . $log['title'] . PHP_EOL;
        echo '著者名：' . $log['author'] . PHP_EOL;
        echo 'メモ：' . $log['memo'] . PHP_EOL;
        echo '作成日：' . $log['created_at'] . PHP_EOL;
        echo '更新日：' . $log['updated_at'] . PHP_EOL;
        echo '-------------' . PHP_EOL;
    }
}
//ログを更新する関数
function updateLog($link)
{
    echo '登録されているログを変更します' . PHP_EOL;
    echo 'どのログを変更しますか？' . PHP_EOL;
    echo '数字を入力してください :';

    $id = trim(fgets(STDIN));

    $logs = db_select_id($link, $id);

    foreach ($logs as $log) {
        echo '-------------' . PHP_EOL;
        echo '書籍名：' . $log['title'] . PHP_EOL;
        echo '著者名：' . $log['author'] . PHP_EOL;
        echo 'メモ：' . $log['memo'] . PHP_EOL;
        echo '作成日：' . $log['created_at'] . PHP_EOL;
        echo '更新日：' . $log['updated_at'] . PHP_EOL;
        echo '-------------' . PHP_EOL;
    }

    echo '上記のログを変更します' . PHP_EOL;
    echo '書籍名：';
    $title = trim(fgets(STDIN));

    echo '著者名：';
    $author = trim(fgets(STDIN));

    echo 'メモ：';
    $memo = trim(fgets(STDIN));

    $log = [
        'id' => $id,
        'title' => $title,
        'author' => $author,
        'memo' => $memo
    ];

    $errors = validation($log);

    if ($errors) {
        echo '#############' . PHP_EOL;
        foreach ($errors as $error) {
            echo $error . PHP_EOL;
        }
        echo '#############' . PHP_EOL;
    } else {
        db_update($link, $log);
        echo 'ログを変更しました' . PHP_EOL;
        echo '-------------' . PHP_EOL;
    }
}
//ログを削除する関数
function deleteLog($link)
{
    echo '登録されているログを削除します' . PHP_EOL;
    echo 'どのログを削除しますか？' . PHP_EOL;
    echo '数字を入力してください :';

    $id = trim(fgets(STDIN));

    $logs = db_delete($link, $id);

    echo 'ログを削除しました' . PHP_EOL;
    echo '-------------' . PHP_EOL;
}
//繰り返し処理
while (true) {
    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '3. 読書ログを編集' . PHP_EOL;
    echo '4. 読書ログを削除' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '数字を選択してください（1,2,3,4,9）：';
    $number = trim(fgets(STDIN));
    echo '-------------' . PHP_EOL;
    if ($number === '1') {
        createLog($link);
    } elseif ($number === '2') {
        listLogs($link);
    } elseif ($number === '3') {
        updateLog($link);
    } elseif ($number === '4') {
        deleteLog($link);
    } elseif ($number === '9') {
        //DBの接続を切る
        mysqli_close($link);
        echo '=============' . PHP_EOL;
        echo 'データベースとの接続を切断します' . PHP_EOL;
        echo '=============' . PHP_EOL;
        break;
    }
}
