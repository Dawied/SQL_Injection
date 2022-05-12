<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Shop - Artikelen</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include "navbar.php"; ?>

<main class="mt-4">
    <div class="container">

        <form method="get" class="d-flex mb-3 m-auto" style="max-width: 500px;">
            <input name="filter" class="form-control me-2" type="search" placeholder="Zoeken">
            <button class="btn btn-outline-success" type="submit">Zoeken</button>
        </form>

        <?php
            include "ourshop_api.php";
            $articles = get_articles();
        ?>
        <?php foreach($articles as $article): ?>
            <div class="article mb-1">
                <img src="images/<?= strtolower($article["name"]) .  ".jpg"; ?>"/>
                <div>
                    <p><?= $article["name"]; ?></p>
                    <p>&euro;<?= $article["price"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

</body>
</html>