<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/style.css">
    <title>logbook</title>
</head>

<body>
    <header>
        <a class="header-log" href="index.php">logbook</a>
    </header>
    <main>
        <div class="main-wrapper">
            <a href="create.php">create log</a>
            <?php if (count($logs) > 0) : ?>
                <?php foreach ($logs as $log) : ?>
                    <div class="main-contents">
                        <div class="main-value">
                            <div class="title">
                                <h1><?php echo escape($log['title']) ?></h1>
                            </div>
                            <div class="author">
                                <h2><?php echo escape($log['author']) ?></h2>
                            </div>
                            <div>
                                <p><?php echo escape($log['memo']) ?></p>
                            </div>
                        </div>
                        <div class="main-etc">
                            <div class="main-info">
                                <span><?php echo escape($log['created_at']) ?></span>
                                <span><?php echo escape($log['updated_at']) ?></span>
                            </div>
                            <div class="main-update-btn">
                                <a href=<?php echo "update.php?id=" . $log['id'] ?>>update</a>
                                <a href=<?php echo "delete.php?id=" . $log['id'] ?>>delete</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>no data</p>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>
