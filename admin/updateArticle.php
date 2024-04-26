<?php
    $title = "Le Dauphiné - Modifier un article";

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
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["contenu"], $_POST["titre"])) {
        $imageUrl = $article["imageUrl"];
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $image_upload = "../uploads/";
            $image_file_upload = $image_upload . basename($_FILES["image"]["name"]);
            $image_read = "./uploads/";
            $image_file_read = $image_read . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_file_upload)) {
                $imageUrl = $image_file_read;
            }
        }
        updateArticle($pdo, $_POST["id"], $_POST["contenu"], $_POST["titre"], $imageUrl);
        header("Location: http://localhost/BasileAlevequeDauphine/admin/index.php");
    }

    include_once("../block/header.php");
?>

<form class="update_article_form" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo($id) ?>">
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value="<?php echo($article['titre']) ?>" />
    <label for="contenu">Contenu</label>
    <textarea name="contenu" id="contenu" cols="30" rows="10"><?php echo($article["contenu"]) ?></textarea>
    <label for="image">Image</label>
    <input type="file" name="image" id="image" />
    <input class="form-btn" type="submit" value="Envoyer" />
</form>

<?php
    include_once("../block/footer.php");
?>