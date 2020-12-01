use docker-php-heroku

# Dokusho Log　ver-1.0

 読書ログは読んだ本の内容を記録できるメモ帳アプリ

 プログラミングの練習目的で作成してみた
 ・PHPを使ってみる
 ・Dockerを使って実務に近い環境でデプロイまでしてみる

 作成期間は本体自体は1週間程度で、dockerやherokuなどの環境構築で1週間程度の計2週間程度

# DEMO

"hoge"の魅力が直感的に伝えわるデモ動画や図解を載せる

# Features

読書に特化した非常にシンプルで扱いやすいメモ帳
使いやすく、説明書を見なくても直感的な操作で利用できるUI

# Requirement

"hoge"を動かすのに必要なライブラリなどを列挙する
環境変数の設定用ライブラリ

* PHP dotenv v5.2.0
  -https://github.com/vlucas/phpdotenv
  ・環境変数を設定。herokuにデブロイする時はheroku内で設定するので使わない。

# Installation

Requirementで列挙したライブラリなどのインストール方法を説明する

```bash
pip install huga_package
```

# Usage

DEMOの実行方法など、"hoge"の基本的な使い方を説明する

```bash
git clone https://github.com/hoge/~
cd examples
python demo.py
```

# Note

 なんでMySQL5.4なの？
 herokuのアドオンであるClearDBがMySQL5.4までしか対応していなかったから

 Documentsに簡単な要件定義書と画面遷移図、WFが入ってるよ

 Laravelで機能を追加(ユーザー管理、並び替え等)して書き直す予定。

# Author

 yohei

作成情報を列挙する

* 作成者
* 所属
* E-mail
