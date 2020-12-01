<?php

?>

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
            <form action="create_post.php" method="post">
                <div class="form-text title">
                    <label for="title">title</label>
                    <input class="input-text" type="text" name="title" id="title">
                </div>
                <div class="form-text author">
                    <label for="author">author</label>
                    <input class="input-text" type="text" name="author" id="author">
                </div>
                <div class="form-text memo">
                    <label for="memo">memo</label>
                    <textarea class="input-textarea" name="memo" id="memo" cols="30" rows="10"></textarea>
                </div>
                <button class="form-btn" type="submit">submit</button>
            </form>
        </div>
    </main>

</body>

</html>
