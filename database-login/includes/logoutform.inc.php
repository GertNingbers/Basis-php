<?php

session_start(); 

// Controleer of de gebruiker is ingelogd
if (isset($_SESSION['user_id'])) {
    
    //zorgt dat alles in de session wordt verwijderd. 
    session_unset(); 
    session_destroy(); 

    header('location: ../login.php');
    exit();
} else {
    //redirect als de gebruiker niet ingelogd is.
    header('location: ../login.php');
    exit();
}

