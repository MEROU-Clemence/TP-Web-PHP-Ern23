<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>

<?php require_once './template/_jeu.php' ?>
<?php require_once './template/_avis.php' ?>


<!-- renvoi de la fonction de tous les jeux sur page d'accueil -->
<div class="d-flex flex-wrap justify-content-center align-self-center main-games">
    <?php games_by_utilisateurs() ?>
</div>

<?php require_once './template/_footer.php' ?>