<?php
session_start();



$users = array(
    "Evy" => "1234",
    "bert" => "1235",
    "Piet" => "1236",
);

    if(isset($_POST['knop'])
        && isset($users[$_POST["login"]])
        && $users[$_POST["login"]] == $_POST['pwd']) {
        $_SESSION["user"] = $_POST["login"];
        $message = "Welkom ".$_SESSION["user"];
    } else {
        $message = "Inloggen";
    }
?>



<html>
<body>
<h1><?php echo $message; ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" name="login" value="" >
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" value="" >
        </div>
        <input type="submit" name="knop">
    </form>
<a href="admin.php"
</body>
</html>