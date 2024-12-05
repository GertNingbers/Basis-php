<?php

session_start(); // Start de sessie

// Controleer of de gebruiker al is ingelogd
if (isset($_SESSION['user_id'])) {
    header('location: logout.php'); // Redirect naar home als de gebruiker al is ingelogd
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="homebalk">
        <h1><a href="home.php">Home</a></h1>
    </div>

    <form action="includes/loginform.inc.php" method="post">
        <h2>Login</h2>

        <p class="naam">Username: <input type="text" name="username" placeholder="Username" required></p>
        <p class="wpd">Password: <input type="password" name="password" placeholder="Password" required></p>
        <input type="submit" value="Login" class="sub">
    </form>
    <?php
    if (isset($_SESSION['error'])) {
        echo "<p class='err'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>
    <button onclick="window.location.href='home.php'">Back to Home</button>
</body>

</html>