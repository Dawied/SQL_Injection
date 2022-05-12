<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Shop - Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include "navbar.php"; ?>
<div class="centered-box">
    <form class="loginform" action="login.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Gebruikersnaam</label>
            <input type="username" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Wachtwoord</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="stayloggedin">
            <label class="form-check-label" for="stayloggedin">Ingelogd blijven</label>
        </div>
        <button type="submit" class="btn btn-primary">Inloggen</button>
    </form>

    <div class="message-box">
        <?php
            if (!isset($_SESSION)) { session_start(); }

            if (!empty($_SESSION["message"])) {
                echo $_SESSION["message"];
            }
            $_SESSION["message"] = "";
        ?>
    </div>
</div>
</body>
</html>
