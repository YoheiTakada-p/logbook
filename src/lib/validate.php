<?php
//バリデーション
function validate(&$check)
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
