<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $accountName = $_POST['account_name'];
    $pwd = $_POST['pwd'];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (users_name, pwd, users_first_name, users_last_name, email) VALUES (:users_name, :pwd, :users_first_name, :users_last_name, :email);";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':users_name', $accountName);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':users_first_name', $firstname);
        $stmt->bindParam(':users_last_name', $lastname);
        $stmt->bindParam(':email', $email);

        
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header('location: ../signup.php');

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }


}   else{
    header('location: ../signup.php');
}