<?php
    $title = "Le Dauphiné";

    session_start();

    include_once("utils/databaseManager.php");
    $pdo = connectDB();

    include_once("block/header.php");
?>

<section class="articles">
    <?php
        $articles = getAllArticles($pdo);

        foreach($articles as $article){
    ?>
    <article class="article_item">
        <?php
            if($article["imageUrl"] != "") {
        ?>
                <img src="<?php echo($article["imageUrl"]); ?>" />
        <?php
            }
        ?>
        <section class="article_item_content">
            <h2><?php echo($article["titre"]) ?></h2>
            <div class="article_contenu_container">
                <p><?php echo($article["contenu"]) ?></p>
            </div>
            <div class="article_item_infos">
                <p>Posté par <?php echo($article["auteur"]) ?></p>
                <p>Le <?php echo($article["datePublication"]) ?></p>
            </div>
        </section>
    </article>
    <?php
        }
    ?>
</section>

<?php
    include_once("block/footer.php");
?>