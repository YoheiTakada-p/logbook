<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/style.css">
    <script src="https://kit.fontawesome.com/aa4027c6c4.js" crossorigin="anonymous"></script>

    <title>logbook</title>
</head>

<body>
    <header>
        <a class="header-log" href="index.php">logbook</a>
    </header>
    <main>
        <div class="main-wrapper">
            <div class="main-create-btn">
                <a class="main-create-btn-a" href="create.php">create log</a>
            </div>
            <?php if (count($logs) > 0) : ?>
                <?php foreach ($logs as $log) : ?>
                    <div class="main-contents">
                        <div class="main-title">
                            <div class="po">
                                <div class="title">
                                    <h1><?php echo escape($log['title']) ?></h1>
                                </div>
                                <div class="author">
                                    <h2>-<?php echo escape($log['author']) ?>-</h2>
                                </div>

                                <div class="memo">
                                    <p><?php echo escape($log['memo']) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="main-etc">
                            <div class="main-info">
                                <span><?php echo escape($log['created_at']) ?></span>
                            </div>
                            <div class="main-edit-btn">
                                <a href=<?php echo "update.php?id=" . $log['id'] ?>><i class="far fa-edit"></i></a>
                                <a href=<?php echo "delete.php?id=" . $log['id'] ?>><i class="far fa-trash-alt"></i></a>
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
