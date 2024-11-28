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
    <title>Document</title>
</head>

<body>
    <div id="topbalk">
        <h1><a href="session-home.php"><img src="img/logo.png" alt="logo" id="logo"></a></h1>

        <div id="profilepic"></div>
    </div>
    <div name="login">
            <?php
            
            if (isset($_SESSION['is ingelogt']) && $_SESSION['is ingelogt'] === true) {
                echo "<form method='post'><button type='submit' name='logout'>Uitloggen</button></form>";
            } else {
                echo "<a href='session-login.php'>Login</a>";
            }
            ?>
        </div>
    <?php
    if (isset($_POST['logout'])) {
        header('Location: session-home.php');
        $_SESSION['is ingelogt'] = false;
        session_destroy();
        exit();
    }
    ?>
</body>

</html>