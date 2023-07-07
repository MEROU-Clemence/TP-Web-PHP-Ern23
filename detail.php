<?php require_once './requete/config.php' ?>
<?php require_once './requete/get_games.php' ?>

<?php require_once './template/_header.php' ?>
<?php require_once './template/_navbar.php' ?>

<?php require_once './template/_detail.php' ?>

<!-- renvoi fonction du détail d'un jeu -->
<div class="d-flex flex-wrap justify-content-center main-games">

    <?php $jeu_id = intval($_GET['rendu_jeu']);
    detail_games($jeu_id) ?>
</div>

<?php require_once './template/_footer.php' ?>