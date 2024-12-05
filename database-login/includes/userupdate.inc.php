<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $accountName = $_POST['account_name'];
    $pwd = $_POST['pwd'];
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET users_name = :users_name, pwd = :pwd, users_first_name = :users_first_name, users_last_name = :users_last_name, email = :email WHERE id = :id;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':users_name', $accountName);
        $stmt->bindParam(':pwd', $hashedPwd);
        $stmt->bindParam(':users_first_name', $firstname);
        $stmt->bindParam(':users_last_name', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $_SESSION['user_id']);


        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header('location: ../change.php');

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
} else {
    header('location: ../change.php');
}
header('Location: ../home.php');
