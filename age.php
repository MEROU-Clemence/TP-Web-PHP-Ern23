<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>
<?php require_once './template/_age.php' ?>
<?php require_once './template/_jeu.php' ?>

<?php require_once './template/_detail.php' ?>

<!-- renvoi fonction du détail d'un jeu -->
<div class="d-flex flex-wrap justify-content-center align-self-center main-games">

    <?php $age_limit = intval($_GET['rendu_jeu_age']);
    game_by_age($age_limit);
    ?>
</div>

<?php require_once './template/_footer.php' ?>