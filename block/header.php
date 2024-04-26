<!DOCTYPE html>
<html lang="fr">

      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo ($title ?? "Default Title") ?></title>
            
            <link rel="stylesheet" href="./styles.css">
            <link rel="stylesheet" href="../styles.css">
      </head>

      <body>
            <nav>
                  <h1>Le Dauphiné</h1>
                  <section>
                        <a href="http://localhost/BasileAlevequeDauphine/index.php">Accueil</a>
                        <?php if (!isset($_SESSION["username"])) { ?>
                              <a href="http://localhost/BasileAlevequeDauphine/login.php">Login</a>
                        <?php } ?>
                        <?php if (isset($_SESSION["username"])) { ?>
                              <a href="http://localhost/BasileAlevequeDauphine/admin/index.php">Admin</a>
                        <?php } ?>
                  </section>
            </nav>