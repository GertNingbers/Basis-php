<?php

$dsn = 'mysql:host=localhost;dbname=inlog1';
$DBusername = 'root';
$DBpassword = '';

//verbinding maken met de database in includes map.
try {
    $pdo = new PDO($dsn, $DBusername, $DBpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

//header zodat de pagina niet wordt geladen in de browser.
header('Location: ../home.php');
