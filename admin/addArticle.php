<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: http://localhost/BasileAlevequeDauphine/login.php");
    }
    
    require_once("../utils/databaseManager.php");
    $pdo = connectDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["title"], $_FILES["image"], $_POST["content"])) {
        addArticle($pdo, $_POST["content"], $_POST["title"], $_SESSION["username"]);
        header("Location: http://localhost/BasileAlevequeDauphine/admin/index.php");
    }

    include_once("../block/header.php");
?>