
<?php

if(!isset($_SESSION)) { session_start(); }
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function get_articles() {
    include "settings.php";
    $db = mysqli_connect($host, $username, $password, $dbname);

    $filter = !empty($_GET["filter"]) ? $_GET["filter"] : "";

    if (!empty($filter)) {
        $sql = "SELECT * FROM ourshop_articles WHERE name LIKE '%$filter%'";
    } else {
        $sql = "SELECT * FROM ourshop_articles";
    }

    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    return $rows;
}

