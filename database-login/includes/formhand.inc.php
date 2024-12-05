<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $accountName = $_POST['account_name'];
    $pwd = $_POST['pwd'];

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    try {
        require_once "dbh.inc.php";

        //maakt een nieuwe gebruiker aan.
        $query = "INSERT INTO users (users_name, pwd, users_first_name, users_last_name, email) VALUES (:users_name, :pwd, :users_first_name, :users_last_name, :email);";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':users_name', $accountName);
        $stmt->bindParam(':pwd', $hashedPwd);
        $stmt->bindParam(':users_first_name', $firstname);
        $stmt->bindParam(':users_last_name', $lastname);
        $stmt->bindParam(':email', $email);


        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header('location: ../login.php');

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
} else {
    header('location: ../login.php');
}
header('Location: ../home.php');
