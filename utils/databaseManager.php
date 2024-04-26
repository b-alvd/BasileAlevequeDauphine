<?php
    function connectDB(): PDO {
        try {
            $host = "localhost";
            $databaseName = "dauphineexam";
            $user = "root";
            $password = "";
    
            $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $databaseName . ";charset=utf8", $user, $password);
            configPdo($pdo);
    
            return $pdo;
        } catch (Exception $e) {
            echo ("Erreur à la connexion: " .  $e->getMessage());
            exit();
        }
    }
    function configPdo(PDO $pdo) {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    function addArticle(PDO $pdo, string $contenu, string $titre, string $auteur) {
        $imageUrl = "";
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $image_upload = "../uploads/";
            $image_file_upload = $image_upload . basename($_FILES["image"]["name"]);
            $image_read = "./uploads/";
            $image_file_read = $image_read . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_file_upload)) {
                $imageUrl = $image_file_upload;
            }
        }
        $query = $pdo->prepare("INSERT INTO annonce (imageUrl, contenu, titre, auteur, datePublication) VALUES (:imageUrl, :contenu, :titre, :auteur, NOW())");
        $query->execute([
            ":imageUrl" => $image_file_read,
            ":contenu" => $contenu,
            ":titre" => $titre,
            ":auteur" => $auteur
        ]);
    }
    function updateArticle(PDO $pdo, int $id, string $contenu, string $titre, string $imageUrl) {
        $query = $pdo->prepare("UPDATE annonce SET imageUrl = :imageUrl, contenu = :contenu, titre = :titre, datePublication = NOW() WHERE id = :id");
        $query->execute([
            ":imageUrl" => $imageUrl,
            ":contenu" => $contenu,
            ":titre" => $titre,
            ":id" => $id
        ]);
    }
    function deleteArticle(PDO $pdo, int $id) {
        $query = $pdo->prepare("DELETE FROM annonce WHERE id = :id");
        $query->execute([
            ":id" => $id
        ]);
    }
    function getAllArticles(PDO $pdo) {
        $query = $pdo->prepare("SELECT * FROM annonce ORDER BY datePublication DESC");
        $query->execute();
        return $query->fetchAll();
    }
?>