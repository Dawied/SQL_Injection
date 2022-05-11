<?php

session_start();

$host = 'localhost';
$dbname = 'veiligprogrammeren';
$username = 'david';
$password = 'david';

/* Onveilige mysqli variant */

$db = mysqli_connect($host, $username, $password, $dbname);

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";

$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

if (count($rows) == 1) {
    $_SESSION["username"] = $username;
    $_SESSION["role"] = $rows[0]["role"];
    header("location: loggedin.php");
} else {
    $_SESSION["username"] = "";
    $_SESSION["message"] = "De gekozen gebruikersnaam en wachtwoord combinatie is niet geldig";
    header("location: index.php");
}


/* Veilige PDO variant */

/*
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE name = :username AND password = :password";

$sth = $db->prepare($sql);
$sth->execute([":username" => $username, ":password" => $password);

if ($sth->rowCount() == 1) {
    $_SESSION["username"] = $username;
    header("location: loggedin.php");
} else {
    $_SESSION["username"] = "";
    $_SESSION["message"] = "De gekozen gebruikersnaam en wachtwoord combinatie is niet geldig";
    header("location: index.php");
}
*/