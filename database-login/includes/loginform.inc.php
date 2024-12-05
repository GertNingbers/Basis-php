<?php
//sesie gestart zodat ik de gegevens kan opslaan.
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['pwd'] = $password;

    try {
        require_once "dbh.inc.php";

        // Zoek de gebruiker in de database.
        $query = "SELECT * FROM users WHERE users_name = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Controleer of de gebruiker bestaat.
        if ($stmt->rowCount() > 0) {

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($password, $user['pwd'])) {
                
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['users_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['firstname'] = $user['users_first_name'];
                $_SESSION['lastname'] = $user['users_last_name'];
                $_SESSION['created'] = $user['created_at'];

                header('location: ../profiel.php'); 
                exit();
            } else {
                //maakt een error aan die ik opsla in de session variabel.
                $_SESSION['error'] = "Invoer klopt niet!!";
                header('location: ../login.php'); 
                exit(); 
            }
        } else {
            //maakt een error aan die ik opsla in de session variabel.
            $_SESSION['error'] = "Invoer klopt niet!!"; 
            header('location: ../login.php'); 
            exit();
        }
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
} else {
    header('location: ../login.php');
}
