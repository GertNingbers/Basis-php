<?php
session_start(); // Start de sessie

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
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>

<body>
    <div class="homebalk">
        <h1><a href="home.php">Home</a></h1>
    </div>

    <div class="signup">
        <h2>Signup</h2>

        <form action="includes/formhand.inc.php" method="post">
            <p>Firstname: <input type="text" name="firstname" placeholder="Firstname" required></p>
            <p>Lastname: <input type="text" name="lastname" placeholder="Lastname" required></p>
            <p>Email: <input type="text" name="email" placeholder="Email" required></p>
            <p>Username: <input type="text" name="account_name" placeholder="Account_name" required></p>
            <p>Password: <input type="password" name="pwd" placeholder="Password" required></p>
            <input type="submit" name="submit" value="Signup" class="btn">
        </form>
    </div>
    <button onclick="window.location.href='home.php'">Back to Home</button>


</body>

</html>