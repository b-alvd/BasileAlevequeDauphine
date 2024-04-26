<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: http://localhost/BasileAlevequeDauphine/login.php");
    }

    include_once("../utils/databaseManager.php");
    $pdo = connectDB();

    $id = $_GET["id"];

    $query = $pdo->prepare("SELECT * FROM annonce WHERE id = :id");
    $query->execute([
        ":id" => $id
    ]);
    $article = $query->fetch();

    if (!$article) {
        header("Location: http://localhost/BasileAlevequeDauphine/admin/index.php");
    } else {
        deleteArticle($pdo, $id);
        header("Location: http://localhost/BasileAlevequeDauphine/admin/index.php");
    }
?>