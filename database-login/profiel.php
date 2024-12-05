<?php
session_start(); // Start de sessie

if (!isset($_SESSION['user_id'])) {
    header('location: login.php'); // Redirect naar login als de gebruiker niet is ingelogd
    exit();
}

// Zorg ervoor dat de gebruikersnaam is opgeslagen in de sessie bij het inloggen
// Bijvoorbeeld: $_SESSION['username'] = $username; (waar $username de accountnaam is)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profiel.css">
    <title>Profiel</title>
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
    <div class="profiel">
        <h1>Profiel</h1>
        <p>Welkom, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <p>Your user data</p>
        <?php
        echo "<p>Account name: " . htmlspecialchars($_SESSION['username']) . "</p>";
        echo "<p>First name: " . htmlspecialchars($_SESSION['firstname']) . "</p>";
        echo "<p>Lastname: " . htmlspecialchars($_SESSION['lastname']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($_SESSION['email']) . "</p>";
        echo "<p>Account created at: " . htmlspecialchars($_SESSION['created']) . "</p>";
        ?>
    </div>
    <div class="buts">
        <button onclick="window.location.href='change.php'">Change users data</button><br>
        <button onclick="window.location.href='home.php'">Back Home</button>
    </div>
</body>

</html>