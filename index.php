<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>

<?php require_once './template/_jeu.php' ?>

<div class="d-flex flex-wrap justify-content-center main-games">
    <?php get_all_games() ?>
</div>

<?php require_once './template/_footer.php' ?>