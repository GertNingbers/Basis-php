<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session-login</title>
</head>
<body>
<h1>Session login</h1>
 
 <form method="post">
     Naam:
     <input type="text" name="naam" placeholder="naam" required><br>
     wachtwoord:
     <input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
     <input type="submit" name="verzend">
     </form>

<?php
    $account = array('admin', 'kip', 'meneer', 'koelkast', 'stoofpot');
    $wachtwoord = array(
        sha1('1234'),
        sha1('5555'),
        sha1('9999'),
        sha1('1111'),
        sha1('2222')
    );

    if (isset($_POST['naam']) && isset($_POST['wachtwoord'])) {
        $index = array_search($_POST['naam'], $account);
        $hashedpassword = sha1($_POST['wachtwoord']);

        if ($index !== false && $wachtwoord[$index] === $hashedpassword) {
            header('Location: session-goed.php');
            exit(); 
        } else {
            echo "Uw naam of wachtwoord is incorrect!";
        }
    }
    ?>
</body>
</html>
