<!doctype html>
<html lang="nl">
<head>
    <title>Loggedin</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
        session_start();
        if (empty($_SESSION["username"])) {
            header("location: index.php");
        }
    ?>

    <div class="centered-box">
        <h1>U bent ingelogd als <?php echo $_SESSION["username"]; ?> met de rol <?php echo $_SESSION["role"]; ?></h1>
    </div>
</body>
</html>

