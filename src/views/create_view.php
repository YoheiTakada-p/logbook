<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/style.css">
    <title>logbook - create</title>
</head>

<body>
    <header>
        <a class="header-log" href="index.php">logbook</a>
    </header>
    <main>
        <div class="main-wrapper">
            <h2>create</h2>
            <?php if ($errors) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form action="create.php" method="post">
                <div class="form-text title">
                    <label for="title">title</label>
                    <input class="input-text" type="text" name="title" id="title" value=<?php echo ($log) ? $log['title'] : "" ?>>
                </div>
                <div class="form-text author">
                    <label for="author">author</label>
                    <input class="input-text" type="text" name="author" id="author" value=<?php echo ($log) ? $log['author'] : "" ?>>
                </div>
                <div class="form-text memo">
                    <label for="memo">memo</label>
                    <textarea class="input-textarea" name="memo" id="memo" cols="30" rows="10"><?php echo ($log) ? $log['memo'] : "" ?></textarea>
                </div>
                <button class="form-btn" type="submit">submit</button>
            </form>
        </div>
    </main>

</body>

</html>
