<?php
    require_once("utils/databaseManager.php");

    $title = "Le Dauphiné - Login";

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["username"], $_POST["password"])) {

        $pdo = connectDB();
        $response = $pdo->prepare("SELECT username, password FROM utilisateur WHERE username = :username");
        $response->execute([
            ":username" => $_POST["username"]
        ]);

        $user = $response->fetch();

        if($user !== false){
            if(password_verify($_POST["password"], $user["password"])){
                session_start();
                $_SESSION["username"] = $_POST["username"];
                header("Location: http://localhost/BasileAlevequeDauphine/admin/index.php");
            } else {
                $errors["global"] = "Identifiants invalides";
            }
        } else {
            $errors["global"] = "Identifiants invalides";
        }

    } else {

        $errors["global"] = "Identifiants manquants";
        
    }

    include_once("block/header.php");
?>


<form class="login_form" method="POST">
    <label for="username">Nom d'utilisateur</label>
    <input type="text" name="username" id="username">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">
    <?php
        if (isset($errors["global"])) {
            echo ("<p class='text_error'>" . $errors["global"] . "</p>");
        }
    ?>
    <input class="form-btn" type="submit" value="Valider">
</form>

<?php
    include_once("block/footer.php");
?>