<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION["user"]["roll"] == "admin") {
    echo "Welkom " . $_SESSION["user"]["naam"];
    echo "<br><a href='index.php'Terug</a>";
} else {
    header('location: admin.php');
}