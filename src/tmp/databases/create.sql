-- ファイルからSQLを実行する場合 mysql -h db -u book_log -D book_log -p < tmp/databases/create.sql

-- テーブルがない場合に削除する
DROP TABLE IF EXISTS logs;

CREATE TABLE logs (
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    memo VARCHAR(1000),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL
) DEFAULT CHARACTER SET=utf8mb4;
