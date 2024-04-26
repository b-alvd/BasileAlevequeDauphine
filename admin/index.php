<?php
    $title = "Le Dauphiné - Admin";

    session_start();

    include_once("../utils/databaseManager.php");
    $pdo = connectDB();

    if (!isset($_SESSION["username"])) {
        header("Location: http://localhost/BasileAlevequeDauphine/login.php");
    }

    include_once("../block/header.php");
?>

<section class="add_container_form">
    <h2>Créer un article</h2>
    <form action="addArticle.php" method="POST" enctype="multipart/form-data">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title">
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <label for="content">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <input class="form-btn" type="submit" value="Ajouter">
    </form>
</section>

<section class="admin_articles">
    <?php
        $articles = getAllArticles($pdo);
        if (count($articles) === 0) {
    ?>
        <p class="no_articles">Pas d'article pour le moment.</p>
    <?php
        } else {
            foreach($articles as $article) {
    ?>
        <article>
            <p class="id">ID de l'article: <?php echo($article["id"]) ?></p>
            <h2 class="title"><?php echo($article["titre"]) ?></h2>
            <section class="infos">
                <p>Posté par <strong><?php echo($article["auteur"]) ?></strong></p>
                <p>Le <strong><?php echo($article["datePublication"]) ?></strong></p>
            </section>
            <section class="buttons">
                <a href='http://localhost/BasileAlevequeDauphine/admin/updateArticle.php?id=<?php echo($article["id"]); ?>'>Modifier</a>
                <a href='http://localhost/BasileAlevequeDauphine/admin/deleteArticle.php?id=<?php echo($article["id"]); ?>'>Supprimer</a>
            </section>
        </article>
    <?php
            }
        }
    ?>
</section>

<section class="other_buttons">
    <a class="link_page_home" href="http://localhost/BasileAlevequeDauphine/index.php">Voir les articles sur la page d'accueil</a>
    <form action="../logout.php" method="POST">
        <input type="submit" name="logout" value="Se déconnecter">
    </form>
</section>

<?php
    include_once("../block/footer.php");
?>