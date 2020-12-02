# Dokusho Log　ver-1.0

 読書ログは読んだ本の内容を記録できるメモ帳アプリです
 試作品です

 プログラミングの練習目的で作成しました
 ・PHPを使ってみる
 ・Dockerを使って実務に近い環境でデプロイまでしてみる

 作成期間は本体自体は1週間程度で、dockerやherokuなどの環境構築で1週間程度の計2週間程度です

# DEMO

URL

# Features

 読書に特化した非常にシンプルで扱いやすいメモ帳
 使いやすく、説明書を見なくても直感的な操作で利用できるUI

# Requirement

* PHP dotenv v5.2.0
  -https://github.com/vlucas/phpdotenv
  ・環境変数の設定。herokuにデブロイする時はheroku内で設定するので使いません

# Note

 なんでMySQL5.4なの？
 herokuのアドオンであるClearDBがMySQL5.4までしか対応していないため

 Documentsに簡単な要件定義書と画面遷移図、WFが入ってます

 機能を追加(ユーザー管理、並び替え等)してLaravelで書き直す予定です
 また、AWSでデプロイしたいと思っています。
