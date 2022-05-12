<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Shop - Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include "navbar.php"; ?>

<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="span4"><img class="center-block" src="images/ourshop.jpg" /></div>
        </div>

        <div class="row">
            <?php if(!isset($_SESSION)) { session_start(); } ?>

            <?php if (empty($_SESSION["username"])): ?>
                <p class="text-center mt-2">U bent niet ingelogd</p>
            <?php else: ?>
                <p class="text-center mt-2">U bent ingelogd als <?php echo $_SESSION["username"]; ?> met de rol <?php echo $_SESSION["role"]; ?></p>
            <?php endif; ?>

        </div>
    </div>
</main>

</body>
</html>