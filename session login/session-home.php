<?php
session_start();
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>session-home</title>
</head>

<body>
    <div id="topbalk">
        <h1><a href="session-home.php"><img src="img/logo.png" id="logo"></a></h1>
        <div name="login">
        <?php
        if (isset($_SESSION['is ingelogt'])) {
            if ($_SESSION['is ingelogt'] === true) {
                echo "<a href='session-logout.php'>Uitloggen</a>";
            } else {
                echo "<a href='session-login.php'>Login</a>";
            }
        } else {
            echo "<a href='session-login.php'>Login</a>";
        }
            ?>
        </div>
        <div id="profilepic"></div>
    </div>
    <div id="navibalk">
        <button onclick="window.location.href='button pages/session-niks.php'">shop</button>
        <button onclick="window.location.href='button pages/session-niks.php'">search</button>
        <button onclick="window.location.href='button pages/session-niks.php'">winkelmand</button>
        <button onclick="window.location.href='session-profile.php'">profile</button>
    </div>
</body>

</html>