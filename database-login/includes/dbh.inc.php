<?php

$dsn = 'mysql:host=localhost;dbname=inlog1';
$DBusername = 'root';
$DBpassword = '';

try {
    $pdo = new PDO($dsn, $DBusername, $DBpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}