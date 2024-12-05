<?php
session_start(); // Start de sessie

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['user_id'])) {
    header('location: login.php'); // Redirect naar login als de gebruiker niet is ingelogd
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logout.css">
    <title>logout</title>
</head>

<body>
    <div class="homebalk">
        <h1><a href="home.php">Home</a></h1>
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h4>" . $_SESSION['username'] . "</h4>";
        }
        ?>
    </div>
    <div class="logout">
        <h2>Are you sure you want to logout?</h2>
        <form action="includes/logoutform.inc.php" method="post">
            <button type="submit">Uitloggen</button>
        </form>
    </div>
    <button onclick="window.location.href='home.php'">Back to Home</button>

</body>

</html>