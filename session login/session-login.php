<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>session-login</title>
</head>
<body>
<div id="topbalk">
        <h1><a href="session-home.php"><img src="img/logo.png" id="logo"></a></h1>

    </div>
 
 <form method="post">
     Naam:
     <input type="text" name="naam" placeholder="naam" required><br>
     wachtwoord:
     <input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
     <input type="submit" name="verzend">
     </form>

<?php
  session_start();
  $_SESSION['is ingelogt'] = false;



    $account = array('admin', 'kip', 'meneer', 'koelkast', 'stoofpot');
    $wachtwoord = array(
        sha1('1234'),
        sha1('5555'),
        sha1('9999'),
        sha1('1111'),
        sha1('2222')
    );

    if (isset($_POST['naam']) && isset($_POST['wachtwoord'])) {
        $_SESSION['naam'] = $_POST['naam'];

        $index = array_search($_POST['naam'], $account);
        $hashedpassword = sha1($_POST['wachtwoord']);

        if ($index !== false && $wachtwoord[$index] === $hashedpassword) {
            $_SESSION['is ingelogt'] = true;
            header('Location: session-profile.php');
        } else {
            echo "Uw naam of wachtwoord is incorrect!";
        }
    }
    ?>
</body>
</html>
