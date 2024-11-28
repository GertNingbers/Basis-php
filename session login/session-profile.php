<?php
session_start();
if ($_SESSION['is ingelogt'] == false) {
    header('Location: session-login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>session-goed</title>
</head>

<body>
    <div id="topbalk">
        <h1><a href="session-home.php"><img src="img/logo.png" alt="logo" id="logo"></a></h1>
        <div name="login">
            <a href="session-logout.php">Uitloggen</a>
        </div>
    </div>
    <h2>Welkom ,
        <?php
         echo $_SESSION['naam'];
        ?>
    </h2>
    <button onclick="window.location.href='session-home.php'">Terug naar home</button>

</body>

</html>