<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>

<body>

    <h2>Signup</h2>

    <form action="includes/formhand.inc.php" method="post">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="lastname" placeholder="Lastname">
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="account_name" placeholder="Account_name" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="submit" name="submit" value="Signup">
    </form>


</body>

</html>