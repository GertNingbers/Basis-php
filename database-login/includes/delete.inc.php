<?php
session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['user_id'])) {
    header('location: ../login.php');
}

try {
    require_once "dbh.inc.php"; // Verbind met de database

    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':id', $_SESSION['user_id']);

    if ($stmt->execute()) {

        // Vernietig de sessie zodat data niet wordt opgeslagen.
        session_destroy(); 
        header('location: ../login.php');
        exit();
    } else {
        //als het fout ging een foutmelding.
        die('Delete query failed.'); 
    }
} catch (PDOException $e) {
    // Toon foutmelding bij databasefout
    die('Database query failed: ' . $e->getMessage()); 
}
