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
        <div class="main-wrapper main-contents">
            <h2 class="form-header">create</h2>
            <?php if ($errors) : ?>
                <ul class="ul-text">
                    <?php foreach ($errors as $error) : ?>
                        <li class="li-text"><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form action="create.php" method="post">
                <div class="form-text">
                    <label for="title">title</label>
                    <input class="input-text" type="text" name="title" id="title" value="<?php echo ($log) ? $log['title'] : "" ?>">
                </div>
                <div class="form-text">
                    <label for="author">author</label>
                    <input class="input-text" type="text" name="author" id="author" value="<?php echo ($log) ? $log['author'] : "" ?>">
                </div>
                <div class="form-text">
                    <label for="memo">memo</label>
                    <textarea class="input-text" name="memo" id="memo" cols="30" rows="10"><?php echo ($log) ? $log['memo'] : "" ?></textarea>
                </div>
                <div class="form-btn">
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>
