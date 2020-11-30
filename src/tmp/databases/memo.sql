CREATE TABLE logs (
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    memo VARCHAR(1000),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL
) DEFAULT CHARACTER SET=utf8mb4;

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
);

SELECT * FROM logs

SELECT * FROM logs WHERE id=0;
