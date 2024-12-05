<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
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
    <div class="homebutton">
        <button onclick="window.location.href='signup.php'">Signup</button>
        <button onclick="window.location.href='login.php'">Login</button>
        <button onclick="window.location.href='profiel.php'">Profile</button>
        <button onclick="window.location.href='change.php'">Change users data</button>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>

</html>