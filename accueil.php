<?php
    require_once ("session.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="accueil.css"> <!-- Inclut une feuille de style externe -->
    </head>
    <body>

    
    <?php if(session_status() === PHP_SESSION_NONE): ?>
        <p>Vous avez été déconnecté.</p>
    <?php endif; ?>

    <div class="message" id ="temp_message">
        <p>Vous êtes connecté.</p> <!-- Affiche le nom de l'utilisateur connecté -->
    </div>

        <header class="header-up"> <!-- En-tête en haut du site -->
            <h2 class="logo">Projet Garage</h2>
            <nav class="navigation">
                <a href="accueil.php">Accueil</a>
                <a href="#">A propos</a>
                <a href="#">Service</a>
                <a href="#">Contact</a>
                <a href="admin/admin.php">Administration</a>
                <?php if (isset($user)): ?> <!-- Vérifie si l'utilisateur est connecté -->
                    <button onclick="window.location.href='login/deconnexion.php';" class="btnLogin-popup" name="valider"><?= htmlspecialchars($user["nom"]) ?></button> <!-- Affiche le bouton de déconnexion -->
                <?php else: ?>
                    <button onclick="window.location.href='login/connecter.php';" class="btnLogin-popup" name="valider">Se connecter</button> <!-- Affiche le bouton de connexion -->
                <?php endif; ?>
            </nav>
        </header>

        <div class="fenetre-options">
            <div class="fenetre-location">
            <button onclick="window.location.href='location/location.php';" class="bouton">Location</button> <!-- Affiche le lien de location -->
            </div>
        </div>
        <script src="accueil.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> <!-- Inclut un script externe -->
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> <!-- Inclut un script externe -->
    </body>
</html>
