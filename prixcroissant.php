<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>

<?php require_once './template/_jeu.php' ?>

<!-- appeler la fonction qui fait la requête sql pour récupérer les jeux -->
<div class="d-flex flex-wrap justify-content-center align-self-center main-games">
    <?php
    get_games_croissant();
    ?>
</div>

<?php require_once './template/_footer.php' ?>