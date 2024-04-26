<?php
    session_start();
    
    if (isset($_POST['logout'])) {
        $_SESSION = [];
        session_destroy();
        header("Location: http://localhost/BasileAlevequeDauphine/login.php");
    }
?>