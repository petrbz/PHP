<?php
session_start();

if(isset($_SESSION["users"])) {
    echo "<h1>Welkom ".$_SESSION["user"]. " op de website";
} else {
    header('location: index.php');
}