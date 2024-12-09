<?php
session_start(); // Start de sessie

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
    <link rel="stylesheet" href="css/change.css">
    <title>Signup</title>
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
    <div class="container">
        <div class="update">
            <h2>Update Account</h2>

            <form action="includes/userupdate.inc.php" method="post">
                <p>Firstname: <input type="text" name="firstname" placeholder="Firstname" value="<?php echo htmlspecialchars($_SESSION['firstname']); ?>" required></p>
                <p>Lastname: <input type="text" name="lastname" placeholder="Lastname" value="<?php echo htmlspecialchars($_SESSION['lastname']); ?>" required></p>
                <p>Email: <input type="text" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" required></p>
                <p>Username: <input type="text" name="account_name" placeholder="Account_name" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" required></p>
                <p>Password: <input type="password" name="pwd" placeholder="Password" required></p>
                <input type="submit" name="update" value="Update" class="btn">
            </form>
        </div>

        <div class="delete">
            <h2>Delete Account!!!</h2>
            <h3>Onclick your account will be deleted!!!</h3>
            <form action="includes/delete.inc.php" method="post">
                <input type="submit" name="delete" value="Delete" class="btn">
            </form>
        </div>

    </div>
    <button onclick="window.location.href='home.php'">Back to Home</button>

</body>

</html>